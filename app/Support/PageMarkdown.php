<?php

namespace App\Support;

use DOMDocument;
use DOMElement;
use DOMNode;
use DOMXPath;

/**
 * Markdown-версия страницы для ИИ-ассистентов (/{slug}.md), собранная из HTML секции content.
 * Текст берётся из самой страницы, поэтому markdown не расходится с сайтом.
 */
class PageMarkdown
{
    // Блоки без смысловой нагрузки: кнопки, анимации, счётчики, форма оценки
    private const SKIP_CLASSES = [
        'breadcrumbs', 'home-hero__contact', 'home-hero__img', 'particle-container', 'home-info',
        'mobile-cta__buttons', 'rating-section', 'btn', 'btn-primary-mobile', 'btn-outline-mobile', 'summary-date',
        'article-top', 'article-bottom',
    ];

    private const SKIP_TAGS = ['script', 'style', 'svg', 'img', 'button', 'form', 'noscript', 'nav'];

    private array $lines = [];

    public static function fromHtml(string $html, string $url, string $updated): string
    {
        return (new self())->convert($html, $url, $updated);
    }

    private function convert(string $html, string $url, string $updated): string
    {
        $dom = new DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML('<?xml encoding="UTF-8"><div id="md-root">' . $html . '</div>', LIBXML_NOERROR);
        libxml_clear_errors();

        $this->walk((new DOMXPath($dom))->query('//*[@id="md-root"]')->item(0));

        $md = implode("\n\n", $this->lines);
        $md = preg_replace('/^(# .+)$/m', "$1\n\nСтраница: {$url}\nОбновлено: {$updated}", $md, 1);

        return $md . "\n\n## Контакты\n\n"
            . "- WhatsApp: https://wa.me/77774333822\n"
            . "- Телефон: +7 777 433 38 22\n"
            . "- E-mail: info@mdlab.kz\n"
            . "- Адрес: Алматы, ул. Назарбаева 50, офис 209 (Пн–Пт 09:00–18:00)\n";
    }

    private function walk(DOMNode $node): void
    {
        foreach ($node->childNodes as $child) {
            if (!$child instanceof DOMElement || $this->skip($child)) {
                continue;
            }

            $tag = strtolower($child->tagName);
            $class = ' ' . $child->getAttribute('class') . ' ';

            if (preg_match('/^h([1-4])$/', $tag, $m)) {
                $this->lines[] = str_repeat('#', (int) $m[1]) . ' ' . $this->inline($child);
            } elseif ($tag === 'p') {
                $this->push($this->inline($child));
            } elseif ($tag === 'li') {
                $this->pushItem('- ' . $this->inline($child));
            } elseif ($tag === 'table') {
                $this->push($this->table($child));
            } elseif (str_contains($class, ' summary-fact ')) {
                $value = $this->inline($this->byClass($child, 'summary-fact__value'));
                $label = $this->inline($this->byClass($child, 'summary-fact__label'));
                $this->pushItem("- {$value} — {$label}");
            } elseif (str_contains($class, ' pricing-card__price ')) {
                $this->push('**Цена: ' . $this->inline($child) . '**');
            } elseif (str_contains($class, ' step-item__time ')) {
                $this->push('Срок этапа: ' . $this->inline($child));
            } elseif (str_contains($class, ' related-link ')) {
                $href = $child->getAttribute('href');
                $href = str_starts_with($href, '/') ? 'https://mdlab.kz' . $href : $href;
                $this->pushItem('- [' . $this->inline($child) . '](' . $href . ')');
            } elseif (str_contains($class, ' tech-item ')) {
                $this->pushItem('- ' . $this->inline($child));
            } else {
                $this->walk($child);
            }
        }
    }

    private function skip(DOMElement $el): bool
    {
        if (in_array(strtolower($el->tagName), self::SKIP_TAGS, true)) {
            return true;
        }
        $classes = preg_split('/\s+/', $el->getAttribute('class'));

        return (bool) array_intersect($classes, self::SKIP_CLASSES);
    }

    private function byClass(DOMElement $el, string $class): ?DOMElement
    {
        foreach ($el->getElementsByTagName('*') as $child) {
            if (in_array($class, preg_split('/\s+/', $child->getAttribute('class')), true)) {
                return $child;
            }
        }

        return null;
    }

    // Текст элемента; ссылки — в формате markdown с абсолютным адресом
    private function inline(?DOMNode $node): string
    {
        if (!$node) {
            return '';
        }
        $out = '';
        foreach ($node->childNodes as $child) {
            if ($child instanceof DOMElement) {
                $tag = strtolower($child->tagName);
                if (in_array($tag, self::SKIP_TAGS, true) || $tag === 'i') {
                    continue;
                }
                $text = $this->inline($child);
                if ($tag === 'a' && ($href = $child->getAttribute('href')) && !str_starts_with($href, 'tel:')) {
                    $href = str_starts_with($href, '/') ? 'https://mdlab.kz' . $href : $href;
                    $out .= "[{$text}]({$href})";
                } elseif (in_array($tag, ['strong', 'b'], true) && $text !== '') {
                    $out .= "**{$text}**";
                } elseif ($tag === 'br') {
                    $out .= ' ';
                } else {
                    $out .= $text;
                }
            } else {
                $out .= $child->textContent;
            }
        }

        return trim(preg_replace('/\s+/u', ' ', str_replace("\u{00A0}", ' ', $out)));
    }

    // Таблица в статьях: первая строка — заголовок
    private function table(DOMElement $table): string
    {
        $rows = [];
        foreach ($table->getElementsByTagName('tr') as $tr) {
            $cells = [];
            foreach ($tr->childNodes as $cell) {
                if ($cell instanceof DOMElement && in_array(strtolower($cell->tagName), ['th', 'td'], true)) {
                    $cells[] = str_replace('|', '/', $this->inline($cell));
                }
            }
            $rows[] = '| ' . implode(' | ', $cells) . ' |';
            if (count($rows) === 1) {
                $rows[] = '|' . str_repeat(' --- |', count($cells));
            }
        }

        return implode("\n", $rows);
    }

    private function push(string $text): void
    {
        if ($text !== '') {
            $this->lines[] = $text;
        }
    }

    // Пункты списка идут подряд, без пустой строки между ними
    private function pushItem(string $text): void
    {
        $last = end($this->lines);
        if ($last !== false && str_starts_with($last, '- ')) {
            $this->lines[key($this->lines)] .= "\n" . $text;
        } else {
            $this->lines[] = $text;
        }
    }
}

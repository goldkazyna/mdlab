@php
    extract(require resource_path('data/' . $dataFile . '.php'));
    $h = $page['headings'];
@endphp
# {!! $page['md_title'] !!}

> {!! $page['md_intro'] !!}

Страница: https://mdlab.kz/{!! $page['slug'] !!}
Обновлено: {!! $updated !!}

## {!! $h['pricing'][2] !!}

| Пакет | Цена | Срок | Что входит |
|---|---|---|---|
@foreach($packages as $p)
| {!! $p['name'] !!} | {!! ($p['from'] ? 'от ' : '') . number_format($p['price'], 0, '', ' ') !!} ₸ | {!! $p['days'] !!} | {!! implode(', ', $p['features']) !!} |
@endforeach

{!! $page['md_note'] !!}

## {!! $h['types'][2] !!}

@foreach($types as $item)
- **{!! $item['name'] !!}** — {!! $item['text'] !!}{{ !empty($item['url']) ? ' Подробнее: https://mdlab.kz/' . $item['url'] : '' }}
@endforeach

## {!! $h['includes'][2] !!}

@foreach($includes as $item)
- **{!! $item['name'] !!}** — {!! $item['text'] !!}
@endforeach

## {!! $h['advantages'][2] !!}

@foreach($advantages as $item)
- **{!! $item['name'] !!}** — {!! $item['text'] !!}
@endforeach

## {!! $h['audience'] !!}

@foreach($audience as $item)
- {!! $item !!}
@endforeach

## {!! $h['steps'][2] !!}

@foreach($steps as $i => $step)
{!! $i + 1 !!}. **{!! $step['name'] !!}** ({!! $step['time'] !!}) — {!! $step['text'] !!}
@endforeach

@foreach($page['seo_sections'] as [$heading, $text])
## {!! $heading !!}

{!! strip_tags($text) !!}

@endforeach
## {!! $h['faq'][2] !!}

@foreach($faq as $item)
### {!! $item['q'] !!}

{!! $item['a'] !!}

@endforeach
## Связанные услуги

@foreach($page['related'] as [$slug, $icon, $name])
- {!! $name !!}: https://mdlab.kz/{!! $slug !!}
@endforeach
- Портфолио: https://mdlab.kz/gallery

## Контакты

- WhatsApp: https://wa.me/77774333822
- Телефон: +7 777 433 38 22
- E-mail: info@mdlab.kz
- Адрес: Алматы, ул. Назарбаева 50, офис 209 (Пн–Пт 09:00–18:00)

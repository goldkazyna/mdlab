@php
    extract(require resource_path('data/smm.php'));
    $clean = fn ($html) => trim(preg_replace('/\s+/u', ' ', strip_tags(str_replace('<br>', ' ', $html))));
@endphp
# SMM-продвижение Instagram в Алматы и Казахстане — MD Lab

> Modern Design Lab (MD Lab) — веб-студия в Алматы (с 2014 года). Ведём и продвигаем Instagram под ключ: стратегия, Reels, AI-ролики, сторис, съёмка и таргетированная реклама. Три пакета: 350 000 ₸, 550 000 ₸ и от 750 000 ₸ в месяц. Работаем по Алматы и удалённо по всему Казахстану.

Страница: https://mdlab.kz/prodvighenie-v-socialynyh-setyah
Обновлено: {!! $updated !!}

## Пакеты и цены

Рекламный бюджет на таргет оплачивается отдельно, напрямую в рекламный кабинет; рекомендуемый стартовый бюджет — от 150 000 ₸ в месяц.

@foreach($packets as $i => $packet)
### Пакет №{!! $i + 1 !!} «{!! $packet['name'] !!}» — {!! str_replace('тг/мес', '₸ в месяц', $packet['price']) !!}{!! $packet['hit'] ? ' (самый популярный)' : '' !!}

{!! $packet['info'] !!}

@foreach($packet['items'] as $item)
- {!! $clean($item) !!}
@endforeach

@endforeach
## Дополнительные услуги

- Фото и видеосъёмка для Instagram (товары, заведения, услуги) с обработкой фото — от 25 000 ₸.

## Для каких бизнесов подходит

@foreach($businesses as $business)
- {!! $clean($business) !!}
@endforeach

## Примеры проектов

@foreach($works as $work)
- **{!! $work['name'] !!}** — {!! $clean($work['info']) !!}
@endforeach

## Частые вопросы

@foreach($faq as $item)
### {!! $item['q'] !!}

{!! $item['a'] !!}

@endforeach
## Контакты

- WhatsApp: https://wa.me/77774333822
- Телефон: +7 777 433 38 22
- E-mail: info@mdlab.kz
- Адрес: Алматы, ул. Назарбаева 50, офис 209 (Пн–Пт 09:00–18:00)

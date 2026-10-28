@php
    extract(require resource_path('data/landing-page.php'));
@endphp
# Создание Landing Page (лендинга) в Алматы — MD Lab

> Modern Design Lab (MD Lab) — веб-студия в Алматы (с 2014 года, 300+ проектов). Создаём продающие лендинги под ключ: анализ конкурентов, структура, продающие тексты, уникальный дизайн, адаптивная вёрстка под телефоны, формы и WhatsApp, аналитика и цели для рекламы в Google Ads, Яндекс Директ и Instagram. Стоимость — от 200 000 ₸, срок — 5–10 рабочих дней. Работаем в Алматы и удалённо по всему Казахстану.

Страница: https://mdlab.kz/landing-page
Обновлено: {!! $updated !!}

## Стоимость и сроки

| Пакет | Цена | Срок | Что входит |
|---|---|---|---|
@foreach($packages as $p)
| {!! $p['name'] !!} | {!! ($p['from'] ? 'от ' : '') . number_format($p['price'], 0, '', ' ') !!} ₸ | {!! $p['days'] !!} | {!! implode(', ', $p['features']) !!} |
@endforeach

Домен и хостинг оплачиваются отдельно. Гарантия — 30 дней после запуска.

## Какие лендинги делаем

@foreach($types as $item)
- **{!! $item['name'] !!}** — {!! $item['text'] !!}
@endforeach

## Что входит в разработку

@foreach($includes as $item)
- **{!! $item['name'] !!}** — {!! $item['text'] !!}
@endforeach

## Почему MD Lab

@foreach($advantages as $item)
- **{!! $item['name'] !!}** — {!! $item['text'] !!}
@endforeach

## Когда нужен лендинг

@foreach($audience as $item)
- {!! $item !!}
@endforeach

## Этапы работы

@foreach($steps as $i => $step)
{!! $i + 1 !!}. **{!! $step['name'] !!}** ({!! $step['time'] !!}) — {!! $step['text'] !!}
@endforeach

## Частые вопросы

@foreach($faq as $item)
### {!! $item['q'] !!}

{!! $item['a'] !!}

@endforeach
## Связанные услуги

- Контекстная реклама Google Ads и Яндекс Директ: https://mdlab.kz/kontekstnaya-reklama
- SMM-продвижение Instagram: https://mdlab.kz/prodvighenie-v-socialynyh-setyah
- Корпоративный сайт: https://mdlab.kz/korporativnyy-sayt
- Интернет-магазин: https://mdlab.kz/internet-magazin
- Портфолио: https://mdlab.kz/gallery

## Контакты

- WhatsApp: https://wa.me/77774333822
- Телефон: +7 777 433 38 22
- E-mail: info@mdlab.kz
- Адрес: Алматы, ул. Назарбаева 50, офис 209 (Пн–Пт 09:00–18:00)

@php
    extract(require resource_path('data/kaspi.php'));
@endphp
# Интеграция Kaspi терминала и Kaspi QR с 1С, iiko, r_keeper, Poster, CRM и сайтом — MD Lab

> Modern Design Lab (MD Lab) — веб-студия в Алматы (с 2014 года). Подключаем терминал Kaspi и оплату Kaspi QR / Kaspi Pay к кассовым и учётным системам: 1С, iiko, r_keeper, Poster, amoCRM, Битрикс24, сайтам и собственному софту. Сумма передаётся на терминал автоматически, результат оплаты возвращается в систему. Стоимость и срок — после бесплатного разбора задачи. Работаем в Алматы и удалённо по всему Казахстану.

Страница: https://mdlab.kz/integraciya-kaspi
Обновлено: {!! $updated !!}

## Что подключаем к Kaspi

@foreach($types as $item)
- **{!! $item['name'] !!}** — {!! $item['text'] !!}
@endforeach

## Что даёт интеграция бизнесу

@foreach($advantages as $item)
- **{!! $item['name'] !!}** — {!! $item['text'] !!}
@endforeach

## С какими системами интегрируем

@foreach($systems as $item)
- {!! $item['name'] !!}
@endforeach
- Любая другая система, у которой есть API или доступ к базе данных

## Кому нужна интеграция Kaspi

@foreach($audience as $item)
- {!! $item !!}
@endforeach

## Как проходит работа

@foreach($steps as $i => $step)
{!! $i + 1 !!}. **{!! $step['name'] !!}** — {!! $step['text'] !!}
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

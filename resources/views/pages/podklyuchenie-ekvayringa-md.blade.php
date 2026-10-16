@php
    extract(require resource_path('data/ekvayring.php'));
@endphp
# Подключение эквайринга и онлайн-оплаты на сайт, в приложение и Telegram-бот — MD Lab

> Modern Design Lab (MD Lab) — веб-студия в Алматы (с 2014 года). Подключаем приём онлайн-оплаты картами и через Kaspi Pay к сайтам, интернет-магазинам, мобильным приложениям и Telegram-ботам: Kaspi Pay, Halyk ePay, Freedom Pay, CloudPayments и другие банки Казахстана. Помогаем с договором и проверкой сайта банком, настраиваем онлайн-чеки, подписки и связку с 1С или CRM. Стоимость и срок — после бесплатного разбора задачи. Работаем в Алматы и удалённо по всему Казахстану.

Страница: https://mdlab.kz/podklyuchenie-ekvayringa
Обновлено: {!! $updated !!}

## Какую оплату подключаем

@foreach($types as $item)
- **{!! $item['name'] !!}** — {!! $item['text'] !!}
@endforeach

## Платёжные системы и банки

@foreach($providers as $item)
- {!! $item['name'] !!}
@endforeach

## Что входит в подключение

@foreach($included as $item)
- **{!! $item['name'] !!}** — {!! $item['text'] !!}
@endforeach

## Платформы

@foreach($platforms as $item)
- {!! $item['name'] !!}
@endforeach

## Кому подходит

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
## Связанные услуги

- Интеграция терминала Kaspi с 1С, iiko, r_keeper, Poster и CRM: https://mdlab.kz/integraciya-kaspi
- Разработка приложения с онлайн-оплатой: https://mdlab.kz/razrabotka-prilozheniya-s-oplatoy

## Контакты

- WhatsApp: https://wa.me/77774333822
- Телефон: +7 777 433 38 22
- E-mail: info@mdlab.kz
- Адрес: Алматы, ул. Назарбаева 50, офис 209 (Пн–Пт 09:00–18:00)

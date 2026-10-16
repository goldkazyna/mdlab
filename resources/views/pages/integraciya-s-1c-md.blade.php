@php
    extract(require resource_path('data/integraciya-1c.php'));
@endphp
# Интеграция 1С с сайтом, Kaspi Магазином, маркетплейсами, приложением и CRM — MD Lab

> Modern Design Lab (MD Lab) — веб-студия в Алматы (с 2014 года). Настраиваем автоматический обмен 1С с интернет-магазином, Kaspi Магазином, Wildberries, Ozon, мобильными приложениями, Telegram-ботами, amoCRM и Битрикс24: товары, цены и остатки из 1С, заказы, клиенты и оплаты — обратно в 1С. Работаем с 1С:Управление торговлей, УНФ, Бухгалтерия, Розница, ERP и нетиповыми конфигурациями, дорабатываем саму 1С. Стоимость и срок — после бесплатного разбора задачи. Работаем в Алматы и удалённо по всему Казахстану.

Страница: https://mdlab.kz/integraciya-s-1c
Обновлено: {!! $updated !!}

## Что связываем с 1С

@foreach($types as $item)
- **{!! $item['name'] !!}** — {!! $item['text'] !!}
@endforeach

## Какие данные передаём

@foreach($sync as $item)
- {!! $item['name'] !!}
@endforeach

## Что даёт интеграция

@foreach($advantages as $item)
- **{!! $item['name'] !!}** — {!! $item['text'] !!}
@endforeach

## Конфигурации 1С

@foreach($configs as $item)
- {!! $item['name'] !!}
@endforeach

Способы обмена: CommerceML, HTTP-сервисы 1С, OData, REST API; доработки через расширения конфигурации.

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
- Подключение эквайринга и онлайн-оплаты на сайт и в приложение: https://mdlab.kz/podklyuchenie-ekvayringa

## Контакты

- WhatsApp: https://wa.me/77774333822
- Телефон: +7 777 433 38 22
- E-mail: info@mdlab.kz
- Адрес: Алматы, ул. Назарбаева 50, офис 209 (Пн–Пт 09:00–18:00)

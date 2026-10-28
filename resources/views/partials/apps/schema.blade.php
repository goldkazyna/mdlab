{{-- JSON-LD страниц разработки приложений: WebPage, Service с пакетами и FAQPage строятся из resources/data/apps/{slug}.php,
     поэтому разметка всегда совпадает с видимыми ценами и FAQ (partials/apps/pricing, partials/apps/faq). --}}
@php
    $pageUrl = 'https://mdlab.kz/' . $slug;
    $appSchemas = [
        [
            '@context' => 'https://schema.org',
            '@type' => 'WebPage',
            '@id' => $pageUrl . '#webpage',
            'url' => $pageUrl,
            'name' => $title,
            'description' => $description,
            'inLanguage' => 'ru',
            'dateModified' => $updated,
            'mainEntity' => ['@id' => $pageUrl . '#service'],
        ],
        [
            '@context' => 'https://schema.org',
            '@type' => 'Service',
            '@id' => $pageUrl . '#service',
            'name' => $service['name'],
            'description' => $service['description'],
            'serviceType' => $service['type'],
            'url' => $pageUrl,
            'provider' => [
                '@type' => 'Organization',
                'name' => 'Modern Design Lab',
                'alternateName' => 'MD Lab',
                'url' => 'https://mdlab.kz',
                'logo' => 'https://mdlab.kz/assets/img/logo.png',
                'telephone' => '+77774333822',
                'address' => [
                    '@type' => 'PostalAddress',
                    'streetAddress' => 'ул. Назарбаева 50, офис 209',
                    'addressLocality' => 'Алматы',
                    'postalCode' => '050030',
                    'addressCountry' => 'KZ',
                ],
            ],
            'areaServed' => [
                ['@type' => 'City', 'name' => 'Алматы'],
                ['@type' => 'Country', 'name' => 'Казахстан'],
            ],
            'offers' => [
                '@type' => 'AggregateOffer',
                'priceCurrency' => 'KZT',
                'lowPrice' => (string) min(array_column($packages, 'price')),
                'highPrice' => (string) max(array_column($packages, 'price')),
                'offerCount' => (string) count($packages),
            ],
            'hasOfferCatalog' => [
                '@type' => 'OfferCatalog',
                'name' => 'Пакеты: ' . $service['name'],
                'itemListElement' => array_map(fn ($p) => [
                    '@type' => 'Offer',
                    'name' => $p['name'],
                    'description' => $p['desc'] . ': ' . implode(', ', $p['features']) . '.',
                    'priceSpecification' => [
                        '@type' => 'PriceSpecification',
                        'priceCurrency' => 'KZT',
                        ($p['from'] ? 'minPrice' : 'price') => (string) $p['price'],
                    ],
                ], $packages),
            ],
        ],
        [
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',
            'mainEntity' => array_map(fn ($f) => [
                '@type' => 'Question',
                'name' => $f['q'],
                'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f['a']],
            ], $faq),
        ],
    ];
@endphp
<link rel="alternate" type="text/markdown" href="/{{ $slug }}.md" title="Markdown-версия страницы для ИИ">
@foreach($appSchemas as $schema)
<script type="application/ld+json">{!! json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}</script>
@endforeach

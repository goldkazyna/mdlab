{{-- Карточки тарифов страниц разработки приложений, данные — $packages из resources/data/apps/{slug}.php --}}
@foreach($packages as $p)
@php $packagePrice = ($p['from'] ? 'от ' : '') . number_format($p['price'], 0, '', ' '); @endphp
<div class="pricing-card @if(!empty($p['featured'])) featured @endif">
    <h3>{{ $p['name'] }}</h3>
    <div class="pricing-card__price">{{ ($p['from'] ? 'от ' : '') . number_format($p['price'], 0, '', "\u{A0}") }} <span>₸</span></div>
    <p class="pricing-card__desc">{{ $p['desc'] }}</p>
    <ul class="pricing-card__features">
        @foreach($p['features'] as $feature)
        <li><i class="fa-solid fa-check"></i> {{ $feature }}</li>
        @endforeach
    </ul>
    <a href="https://wa.me/77774333822?text={{ rawurlencode('Здравствуйте! Интересует пакет ' . $p['name'] . ' (' . $packagePrice . ' ₸)') }}" target="_blank" rel="noopener" class="btn-primary-mobile btn-whatsapp">
        <i class="fa-brands fa-whatsapp"></i> Написать в WhatsApp
    </a>
</div>
@endforeach

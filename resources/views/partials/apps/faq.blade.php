{{-- Вопросы FAQ страниц разработки приложений, данные — $faq из resources/data/apps/{slug}.php (те же, что в FAQPage) --}}
@foreach($faq as $i => $item)
<div class="faq-item @if($i === 0) active @endif">
    <div class="faq-item__question">
        <h4>{{ $item['q'] }}</h4>
        <i class="fa-solid fa-chevron-down"></i>
    </div>
    <div class="faq-item__answer">
        <p>{{ $item['a'] }}</p>
    </div>
</div>
@endforeach

<section class="section-rateit">
    <div class="container">
        <div class="section-rateit__row" itemscope itemtype="https://schema.org/Product">
            <meta itemprop="brand" content="Modern Design Lab"/>
            <span style="font-size: 18px;">Оценка:</span>
            <div class="rateit" data-rateit-value="{{ $rating ?? '4.8' }}" data-rateit-ispreset="true" data-rateit-readonly="true"></div>
            <meta itemprop="name" content="{{ $title ?? '' }}"/>
            <meta itemprop="description" content="{{ $description ?? '' }}"/>
            <span class="totalvotes" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                Рейтинг:
                <meta itemprop="ratingValue" content="{{ $rating ?? '4.8' }}">{{ $rating ?? '4.8' }} /
                <meta itemprop="bestRating" content="5">5
                <meta itemprop="ratingCount" content="{{ $ratingCount ?? '127' }}">(Кол-во: {{ $ratingCount ?? '127' }})
            </span>
            <span itemprop="offers" itemscope itemtype="https://schema.org/AggregateOffer">
                <meta itemprop="lowPrice" content="{{ $price ?? '200000' }}"/>
                <meta itemprop="priceCurrency" content="KZT"/>
            </span>
        </div>
    </div>
</section>
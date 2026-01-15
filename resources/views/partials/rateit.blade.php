@php
    $pageUrl = '/' . ltrim(request()->path(), '/');
    $ratingData = \App\Models\Rating::getAverageRating($pageUrl);
@endphp

<!-- JSON-LD Schema для Google -->
@if($ratingData['count'] > 0)
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "WebPage",
    "name": "{{ $title ?? config('app.name') }}",
    "description": "{{ $description ?? '' }}",
    "aggregateRating": {
        "@@type": "AggregateRating",
        "ratingValue": "{{ $ratingData['average'] }}",
        "bestRating": "5",
        "worstRating": "1",
        "ratingCount": "{{ $ratingData['count'] }}"
    }
}
</script>
@endif

<!-- Блок рейтинга -->
<div class="rating-section">
    <div class="container">
        <div class="rating-box">
            <div class="rating-box__title">Оцените эту страницу</div>
            <div class="rating-box__stars" id="ratingStars">
                <span class="star" data-rating="1"><i class="fa-regular fa-star"></i></span>
                <span class="star" data-rating="2"><i class="fa-regular fa-star"></i></span>
                <span class="star" data-rating="3"><i class="fa-regular fa-star"></i></span>
                <span class="star" data-rating="4"><i class="fa-regular fa-star"></i></span>
                <span class="star" data-rating="5"><i class="fa-regular fa-star"></i></span>
            </div>
            <div class="rating-box__info">
                <span id="ratingAverage">{{ $ratingData['average'] }}</span> из 5
                <span class="rating-box__count">(<span id="ratingCount">{{ $ratingData['count'] }}</span> оценок)</span>
            </div>
            <div class="rating-box__message" id="ratingMessage"></div>
        </div>
    </div>
</div>

<style>
.rating-section {
    padding: 50px 0;
    background: linear-gradient(135deg, #d6f3ff 0%, #fff 100%);
}

.rating-box {
    max-width: 400px;
    margin: 0 auto;
    text-align: center;
    background: #fff;
    padding: 35px;
    border-radius: 20px;
    box-shadow: 0 10px 40px rgba(0, 152, 214, 0.1);
}

.rating-box__title {
    font-size: 20px;
    font-weight: 600;
    color: #1a1a2e;
    margin-bottom: 20px;
}

.rating-box__stars {
    display: flex;
    justify-content: center;
    gap: 10px;
    margin-bottom: 20px;
}

.rating-box__stars .star {
    font-size: 32px;
    color: #ddd;
    cursor: pointer;
    transition: all 0.2s;
}

.rating-box__stars .star:hover,
.rating-box__stars .star.hover {
    color: #ffc107;
    transform: scale(1.15);
}

.rating-box__stars .star.active i {
    font-weight: 900;
}

.rating-box__stars .star.active {
    color: #ffc107;
}

.rating-box__info {
    font-size: 16px;
    color: #666;
}

.rating-box__info #ratingAverage {
    font-weight: 700;
    color: #0098D6;
    font-size: 20px;
}

.rating-box__count {
    color: #999;
    font-size: 14px;
}

.rating-box__message {
    margin-top: 15px;
    font-size: 14px;
    color: #28a745;
    min-height: 20px;
}

.rating-box__message.error {
    color: #dc3545;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const stars = document.querySelectorAll('#ratingStars .star');
    const pageUrl = window.location.pathname;
    let currentRating = 0;
    let averageRating = {{ $ratingData['average'] }};

    // Показываем средний рейтинг сразу
    showAverageStars(averageRating);

    // Проверяем голосовал ли пользователь
    fetch('/api/rating?page_url=' + encodeURIComponent(pageUrl))
        .then(response => response.json())
        .then(data => {
            if (data.user_rating) {
                currentRating = data.user_rating;
                updateStars(currentRating);
            }
        })
        .catch(error => console.error('Error:', error));

    // Ховер эффект
    stars.forEach(star => {
        star.addEventListener('mouseenter', function() {
            const rating = this.dataset.rating;
            highlightStars(rating);
        });

        star.addEventListener('mouseleave', function() {
            if (currentRating > 0) {
                updateStars(currentRating);
            } else {
                showAverageStars(averageRating);
            }
        });

        // Клик — отправка оценки
        star.addEventListener('click', function() {
            const rating = this.dataset.rating;
            
            fetch('/api/rating', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({
                    page_url: pageUrl,
                    rating: rating
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    currentRating = rating;
                    averageRating = data.average;
                    updateStars(rating);
                    document.getElementById('ratingAverage').textContent = data.average;
                    document.getElementById('ratingCount').textContent = data.count;
                    document.getElementById('ratingMessage').textContent = data.message;
                    document.getElementById('ratingMessage').classList.remove('error');
                    
                    setTimeout(() => {
                        document.getElementById('ratingMessage').textContent = '';
                    }, 3000);
                }
            })
            .catch(error => {
                document.getElementById('ratingMessage').textContent = 'Ошибка. Попробуйте позже.';
                document.getElementById('ratingMessage').classList.add('error');
            });
        });
    });

    function highlightStars(rating) {
        stars.forEach(star => {
            const starRating = star.dataset.rating;
            const icon = star.querySelector('i');
            
            if (starRating <= rating) {
                star.classList.add('hover');
                icon.classList.remove('fa-regular');
                icon.classList.add('fa-solid');
            } else {
                star.classList.remove('hover');
                icon.classList.remove('fa-solid');
                icon.classList.add('fa-regular');
            }
        });
    }

    function updateStars(rating) {
        stars.forEach(star => {
            const starRating = star.dataset.rating;
            const icon = star.querySelector('i');
            
            if (starRating <= rating) {
                star.classList.add('active');
                icon.classList.remove('fa-regular');
                icon.classList.add('fa-solid');
            } else {
                star.classList.remove('active');
                icon.classList.remove('fa-solid');
                icon.classList.add('fa-regular');
            }
        });
    }

    function showAverageStars(rating) {
        const fullStars = Math.floor(rating);
        const hasHalf = (rating - fullStars) >= 0.5;
        
        stars.forEach(star => {
            const starRating = parseInt(star.dataset.rating);
            const icon = star.querySelector('i');
            
            star.classList.remove('active', 'hover');
            icon.classList.remove('fa-solid', 'fa-star-half-stroke');
            icon.classList.add('fa-regular');
            
            if (starRating <= fullStars) {
                icon.classList.remove('fa-regular');
                icon.classList.add('fa-solid');
                star.classList.add('active');
            } else if (starRating === fullStars + 1 && hasHalf) {
                icon.classList.remove('fa-regular', 'fa-star');
                icon.classList.add('fa-solid', 'fa-star-half-stroke');
                star.classList.add('active');
            }
        });
    }
});
</script>
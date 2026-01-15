@extends('layouts.app')

@push('styles')
<style>
.gallery-page {
    padding: 160px 0;
    background: #f8f9fa;
    min-height: 100vh;
}

.gallery-header {
    text-align: center;
    margin-bottom: 50px;
}

.gallery-header h1 {
    font-size: 42px;
    font-weight: 700;
    color: #1a1a2e;
    margin-bottom: 15px;
}

.gallery-header p {
    font-size: 18px;
    color: #666;
    max-width: 600px;
    margin: 0 auto;
}

/* Фильтры */
.gallery-filters {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 10px;
    margin-bottom: 40px;
}

.gallery-filters .filter-btn {
    padding: 12px 24px;
    border: none;
    background: #fff;
    color: #333;
    font-size: 14px;
    font-weight: 500;
    border-radius: 50px;
    cursor: pointer;
    box-shadow: 0 2px 10px rgba(0,0,0,0.08);
    transition: background 0.3s, color 0.3s, box-shadow 0.3s;
}

.gallery-filters .filter-btn:hover {
    background: #ff5722;
    color: #fff;
    box-shadow: 0 5px 20px rgba(255,87,34,0.3);
}

.gallery-filters .filter-btn.active {
    background: #ff5722;
    color: #fff;
}

/* Сетка галереи */
.gallery-grid {
    display: flex;
    flex-wrap: wrap;
    margin: -10px;
}

.gallery-item {
    width: 25%;
    padding: 10px;
}

@media (max-width: 992px) {
    .gallery-item { width: 33.333%; }
}

@media (max-width: 768px) {
    .gallery-item { width: 50%; }
	.gallery-page {
    padding: 110px 0;
}
}

@media (max-width: 480px) {
    .gallery-item { width: 100%; }
}

/* Карточка */
.gallery-card {
    position: relative;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    background: #fff;
    display: block;
}

.gallery-card:hover {
    box-shadow: 0 15px 40px rgba(0,0,0,0.2);
}

.gallery-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.gallery-card:hover img {
    transform: scale(1.1);
}

.gallery-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(to top, rgba(0,0,0,0.7) 0%, transparent 50%);
    opacity: 0;
    transition: opacity 0.3s ease;
    z-index: 1;
}

.gallery-card:hover::before {
    opacity: 1;
}

.gallery-card .card-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 20px;
    transform: translateY(100%);
    transition: transform 0.3s ease;
    z-index: 2;
}

.gallery-card:hover .card-overlay {
    transform: translateY(0);
}

.gallery-card .card-overlay span {
    color: #fff;
    font-size: 14px;
    font-weight: 500;
}

.gallery-card .zoom-icon {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%) scale(0);
    width: 50px;
    height: 50px;
    background: #ff5722;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: transform 0.3s ease;
    z-index: 2;
}

.gallery-card:hover .zoom-icon {
    transform: translate(-50%, -50%) scale(1);
}

.gallery-card .zoom-icon i {
    color: #fff;
    font-size: 20px;
}

/* Счётчик */
.gallery-count {
    text-align: center;
    margin-top: 40px;
    color: #666;
    font-size: 16px;
}

.gallery-count span {
    font-weight: 700;
    color: #ff5722;
}
</style>
@endpush

@section('content')
<section class="gallery-page">
    <div class="container">
        <div class="gallery-header">
            <h1>Наши работы</h1>
            <p>В нашем портфолио — более 300 успешных проектов. Создаём сайты, которые приносят результат!</p>
        </div>

        <div class="gallery-filters">
            <button class="filter-btn active" data-filter="all">Все проекты</button>
            <button class="filter-btn" data-filter=".im">Интернет-магазины</button>
            <button class="filter-btn" data-filter=".land">Landing Page</button>
            <button class="filter-btn" data-filter=".coop">Корпоративные сайты</button>
            <button class="filter-btn" data-filter=".logo">Логотипы</button>
            <button class="filter-btn" data-filter=".smm">SMM</button>
        </div>

        <div class="gallery-grid">
            <!-- Интернет магазины -->
            <div class="gallery-item mix im">
                <a data-fancybox="gallery" href="/images/gallery/im/balga_big.jpg" class="gallery-card">
                    <img src="/images/gallery/im/balga.jpg" alt="Интернет магазин Balga">
                    <div class="zoom-icon"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                    <div class="card-overlay"><span>Интернет-магазин</span></div>
                </a>
            </div>
            <div class="gallery-item mix im">
                <a data-fancybox="gallery" href="/images/gallery/im/dhz_big.jpg" class="gallery-card">
                    <img src="/images/gallery/im/dhz.jpg" alt="Интернет магазин DHZ">
                    <div class="zoom-icon"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                    <div class="card-overlay"><span>Интернет-магазин</span></div>
                </a>
            </div>
            <div class="gallery-item mix im">
                <a data-fancybox="gallery" href="/images/gallery/im/feya_big.jpg" class="gallery-card">
                    <img src="/images/gallery/im/feya.jpg" alt="Интернет магазин Feya">
                    <div class="zoom-icon"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                    <div class="card-overlay"><span>Интернет-магазин</span></div>
                </a>
            </div>
            <div class="gallery-item mix im">
                <a data-fancybox="gallery" href="/images/gallery/im/fgwilson_big.jpg" class="gallery-card">
                    <img src="/images/gallery/im/fgwilson.jpg" alt="Интернет магазин FG Wilson">
                    <div class="zoom-icon"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                    <div class="card-overlay"><span>Интернет-магазин</span></div>
                </a>
            </div>
            <div class="gallery-item mix im">
                <a data-fancybox="gallery" href="/images/gallery/im/hhmebel_big.jpg" class="gallery-card">
                    <img src="/images/gallery/im/hhmebel.jpg" alt="Интернет магазин HH Mebel">
                    <div class="zoom-icon"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                    <div class="card-overlay"><span>Интернет-магазин</span></div>
                </a>
            </div>
            <div class="gallery-item mix im">
                <a data-fancybox="gallery" href="/images/gallery/im/itzip_big.jpg" class="gallery-card">
                    <img src="/images/gallery/im/itzip.jpg" alt="Интернет магазин ITzip">
                    <div class="zoom-icon"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                    <div class="card-overlay"><span>Интернет-магазин</span></div>
                </a>
            </div>
            <div class="gallery-item mix im">
                <a data-fancybox="gallery" href="/images/gallery/im/luxar_big.jpg" class="gallery-card">
                    <img src="/images/gallery/im/luxar.jpg" alt="Интернет магазин Luxar">
                    <div class="zoom-icon"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                    <div class="card-overlay"><span>Интернет-магазин</span></div>
                </a>
            </div>
            <div class="gallery-item mix im">
                <a data-fancybox="gallery" href="/images/gallery/im/rrdecor_big.jpg" class="gallery-card">
                    <img src="/images/gallery/im/rrdecor.jpg" alt="Интернет магазин RR Decor">
                    <div class="zoom-icon"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                    <div class="card-overlay"><span>Интернет-магазин</span></div>
                </a>
            </div>
            <div class="gallery-item mix im">
                <a data-fancybox="gallery" href="/images/gallery/im/4big.jpg" class="gallery-card">
                    <img src="/images/gallery/im/4.jpg" alt="Интернет магазин">
                    <div class="zoom-icon"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                    <div class="card-overlay"><span>Интернет-магазин</span></div>
                </a>
            </div>
            <div class="gallery-item mix im">
                <a data-fancybox="gallery" href="/images/gallery/im/5big.jpg" class="gallery-card">
                    <img src="/images/gallery/im/5.jpg" alt="Интернет магазин">
                    <div class="zoom-icon"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                    <div class="card-overlay"><span>Интернет-магазин</span></div>
                </a>
            </div>
            <div class="gallery-item mix im">
                <a data-fancybox="gallery" href="/images/gallery/im/6big.jpg" class="gallery-card">
                    <img src="/images/gallery/im/6.jpg" alt="Интернет магазин">
                    <div class="zoom-icon"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                    <div class="card-overlay"><span>Интернет-магазин</span></div>
                </a>
            </div>
            <div class="gallery-item mix im">
                <a data-fancybox="gallery" href="/images/gallery/im/7big.jpg" class="gallery-card">
                    <img src="/images/gallery/im/7.jpg" alt="Интернет магазин">
                    <div class="zoom-icon"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                    <div class="card-overlay"><span>Интернет-магазин</span></div>
                </a>
            </div>
            <div class="gallery-item mix im">
                <a data-fancybox="gallery" href="/images/gallery/im/8big.jpg" class="gallery-card">
                    <img src="/images/gallery/im/8.jpg" alt="Интернет магазин">
                    <div class="zoom-icon"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                    <div class="card-overlay"><span>Интернет-магазин</span></div>
                </a>
            </div>
            <div class="gallery-item mix im">
                <a data-fancybox="gallery" href="/images/gallery/im/9big.jpg" class="gallery-card">
                    <img src="/images/gallery/im/9.jpg" alt="Интернет магазин">
                    <div class="zoom-icon"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                    <div class="card-overlay"><span>Интернет-магазин</span></div>
                </a>
            </div>

            <!-- Landing Page -->
            <div class="gallery-item mix land">
                <a data-fancybox="gallery" href="/images/gallery/land/2804/chisto_b.jpg" class="gallery-card">
                    <img src="/images/gallery/land/2804/chisto_m.jpg" alt="Landing Page Chisto">
                    <div class="zoom-icon"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                    <div class="card-overlay"><span>Landing Page</span></div>
                </a>
            </div>
            <div class="gallery-item mix land">
                <a data-fancybox="gallery" href="/images/gallery/land/1big.jpg" class="gallery-card">
                    <img src="/images/gallery/land/1.jpg" alt="Landing Page">
                    <div class="zoom-icon"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                    <div class="card-overlay"><span>Landing Page</span></div>
                </a>
            </div>
            <div class="gallery-item mix land">
                <a data-fancybox="gallery" href="/images/gallery/land/2big.jpg" class="gallery-card">
                    <img src="/images/gallery/land/2.jpg" alt="Landing Page">
                    <div class="zoom-icon"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                    <div class="card-overlay"><span>Landing Page</span></div>
                </a>
            </div>
            <div class="gallery-item mix land">
                <a data-fancybox="gallery" href="/images/gallery/land/3big.jpg" class="gallery-card">
                    <img src="/images/gallery/land/3.jpg" alt="Landing Page">
                    <div class="zoom-icon"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                    <div class="card-overlay"><span>Landing Page</span></div>
                </a>
            </div>
            <div class="gallery-item mix land">
                <a data-fancybox="gallery" href="/images/gallery/land/4big.jpg" class="gallery-card">
                    <img src="/images/gallery/land/4.jpg" alt="Landing Page">
                    <div class="zoom-icon"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                    <div class="card-overlay"><span>Landing Page</span></div>
                </a>
            </div>
            <div class="gallery-item mix land">
                <a data-fancybox="gallery" href="/images/gallery/land/5big.jpg" class="gallery-card">
                    <img src="/images/gallery/land/5.jpg" alt="Landing Page">
                    <div class="zoom-icon"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                    <div class="card-overlay"><span>Landing Page</span></div>
                </a>
            </div>
            <div class="gallery-item mix land">
                <a data-fancybox="gallery" href="/images/gallery/land/6big.jpg" class="gallery-card">
                    <img src="/images/gallery/land/6.jpg" alt="Landing Page">
                    <div class="zoom-icon"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                    <div class="card-overlay"><span>Landing Page</span></div>
                </a>
            </div>

            <!-- Корпоративные сайты -->
            <div class="gallery-item mix coop">
                <a data-fancybox="gallery" href="/images/gallery/corp/1big.jpg" class="gallery-card">
                    <img src="/images/gallery/corp/1.jpg" alt="Корпоративный сайт">
                    <div class="zoom-icon"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                    <div class="card-overlay"><span>Корпоративный сайт</span></div>
                </a>
            </div>
            <div class="gallery-item mix coop">
                <a data-fancybox="gallery" href="/images/gallery/corp/2big.jpg" class="gallery-card">
                    <img src="/images/gallery/corp/2.jpg" alt="Корпоративный сайт">
                    <div class="zoom-icon"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                    <div class="card-overlay"><span>Корпоративный сайт</span></div>
                </a>
            </div>
            <div class="gallery-item mix coop">
                <a data-fancybox="gallery" href="/images/gallery/corp/3big.jpg" class="gallery-card">
                    <img src="/images/gallery/corp/3.jpg" alt="Корпоративный сайт">
                    <div class="zoom-icon"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                    <div class="card-overlay"><span>Корпоративный сайт</span></div>
                </a>
            </div>
            <div class="gallery-item mix coop">
                <a data-fancybox="gallery" href="/images/gallery/corp/4big.jpg" class="gallery-card">
                    <img src="/images/gallery/corp/4.jpg" alt="Корпоративный сайт">
                    <div class="zoom-icon"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                    <div class="card-overlay"><span>Корпоративный сайт</span></div>
                </a>
            </div>
            <div class="gallery-item mix coop">
                <a data-fancybox="gallery" href="/images/gallery/corp/5big.jpg" class="gallery-card">
                    <img src="/images/gallery/corp/5.jpg" alt="Корпоративный сайт">
                    <div class="zoom-icon"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                    <div class="card-overlay"><span>Корпоративный сайт</span></div>
                </a>
            </div>
            <div class="gallery-item mix coop">
                <a data-fancybox="gallery" href="/images/gallery/corp/6big.jpg" class="gallery-card">
                    <img src="/images/gallery/corp/6.jpg" alt="Корпоративный сайт">
                    <div class="zoom-icon"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                    <div class="card-overlay"><span>Корпоративный сайт</span></div>
                </a>
            </div>

            <!-- Логотипы -->
            <div class="gallery-item mix logo">
                <a data-fancybox="gallery" href="/images/gallery/inst/1.PNG" class="gallery-card">
                    <img src="/images/gallery/inst/1_s.jpg" alt="Разработка логотипа">
                    <div class="zoom-icon"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                    <div class="card-overlay"><span>Логотип</span></div>
                </a>
            </div>

            <!-- SMM -->
            <div class="gallery-item mix smm">
                <a data-fancybox="gallery" href="/images/gallery/inst/1.PNG" class="gallery-card">
                    <img src="/images/gallery/inst/1_s.jpg" alt="SMM продвижение">
                    <div class="zoom-icon"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                    <div class="card-overlay"><span>SMM</span></div>
                </a>
            </div>
            <div class="gallery-item mix smm">
                <a data-fancybox="gallery" href="/images/gallery/inst/2.PNG" class="gallery-card">
                    <img src="/images/gallery/inst/2_s.jpg" alt="SMM продвижение">
                    <div class="zoom-icon"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                    <div class="card-overlay"><span>SMM</span></div>
                </a>
            </div>
            <div class="gallery-item mix smm">
                <a data-fancybox="gallery" href="/images/gallery/inst/3.PNG" class="gallery-card">
                    <img src="/images/gallery/inst/3_s.jpg" alt="SMM продвижение">
                    <div class="zoom-icon"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                    <div class="card-overlay"><span>SMM</span></div>
                </a>
            </div>
            <div class="gallery-item mix smm">
                <a data-fancybox="gallery" href="/images/gallery/inst/4.PNG" class="gallery-card">
                    <img src="/images/gallery/inst/4_s.jpg" alt="SMM продвижение">
                    <div class="zoom-icon"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                    <div class="card-overlay"><span>SMM</span></div>
                </a>
            </div>
            <div class="gallery-item mix smm">
                <a data-fancybox="gallery" href="/images/gallery/inst/5.PNG" class="gallery-card">
                    <img src="/images/gallery/inst/5_s.jpg" alt="SMM продвижение">
                    <div class="zoom-icon"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                    <div class="card-overlay"><span>SMM</span></div>
                </a>
            </div>
            <div class="gallery-item mix smm">
                <a data-fancybox="gallery" href="/images/gallery/inst/6.PNG" class="gallery-card">
                    <img src="/images/gallery/inst/6_s.jpg" alt="SMM продвижение">
                    <div class="zoom-icon"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                    <div class="card-overlay"><span>SMM</span></div>
                </a>
            </div>
            <div class="gallery-item mix smm">
                <a data-fancybox="gallery" href="/images/gallery/inst/7.PNG" class="gallery-card">
                    <img src="/images/gallery/inst/7_s.jpg" alt="SMM продвижение">
                    <div class="zoom-icon"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                    <div class="card-overlay"><span>SMM</span></div>
                </a>
            </div>
            <div class="gallery-item mix smm">
                <a data-fancybox="gallery" href="/images/gallery/inst/8.PNG" class="gallery-card">
                    <img src="/images/gallery/inst/8_s.jpg" alt="SMM продвижение">
                    <div class="zoom-icon"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                    <div class="card-overlay"><span>SMM</span></div>
                </a>
            </div>
            <div class="gallery-item mix smm">
                <a data-fancybox="gallery" href="/images/gallery/inst/9.PNG" class="gallery-card">
                    <img src="/images/gallery/inst/9_s.jpg" alt="SMM продвижение">
                    <div class="zoom-icon"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                    <div class="card-overlay"><span>SMM</span></div>
                </a>
            </div>
            <div class="gallery-item mix smm">
                <a data-fancybox="gallery" href="/images/gallery/inst/10.PNG" class="gallery-card">
                    <img src="/images/gallery/inst/10_s.jpg" alt="SMM продвижение">
                    <div class="zoom-icon"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                    <div class="card-overlay"><span>SMM</span></div>
                </a>
            </div>
            <div class="gallery-item mix smm">
                <a data-fancybox="gallery" href="/images/gallery/inst/11.PNG" class="gallery-card">
                    <img src="/images/gallery/inst/11_s.jpg" alt="SMM продвижение">
                    <div class="zoom-icon"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                    <div class="card-overlay"><span>SMM</span></div>
                </a>
            </div>
            <div class="gallery-item mix smm">
                <a data-fancybox="gallery" href="/images/gallery/inst/12.PNG" class="gallery-card">
                    <img src="/images/gallery/inst/12_s.jpg" alt="SMM продвижение">
                    <div class="zoom-icon"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                    <div class="card-overlay"><span>SMM</span></div>
                </a>
            </div>
            <div class="gallery-item mix smm">
                <a data-fancybox="gallery" href="/images/gallery/inst/13.PNG" class="gallery-card">
                    <img src="/images/gallery/inst/13_s.jpg" alt="SMM продвижение">
                    <div class="zoom-icon"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                    <div class="card-overlay"><span>SMM</span></div>
                </a>
            </div>
        </div>

        <div class="gallery-count">
            Показано <span class="count-visible">41</span> из <span>41</span> проектов
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.3.1/mixitup.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var containerEl = document.querySelector('.gallery-grid');
    var filterBtns = document.querySelectorAll('.filter-btn');
    var mixer = null;
    var isAnimating = false;

    if(containerEl && typeof mixitup === 'function') {
        mixer = mixitup(containerEl, {
            selectors: {
                target: '.gallery-item'
            },
            animation: {
                duration: 300,
                effects: 'fade',
                easing: 'ease-out'
            },
            callbacks: {
                onMixStart: function() {
                    isAnimating = true;
                },
                onMixEnd: function(state) {
                    isAnimating = false;
                    document.querySelector('.count-visible').textContent = state.totalShow;
                }
            }
        });

        filterBtns.forEach(function(btn) {
            btn.addEventListener('click', function() {
                // Блокируем если анимация идёт
                if(isAnimating) return;

                var filterValue = this.getAttribute('data-filter');

                filterBtns.forEach(function(b) { 
                    b.classList.remove('active'); 
                });
                this.classList.add('active');

                if(filterValue === 'all') {
                    mixer.filter('all');
                } else {
                    mixer.filter(filterValue);
                }
            });
        });
    }
});
</script>
@endpush

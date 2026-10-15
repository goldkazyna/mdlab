// Страница «Продвижение в социальных сетях»: слайдеры работ и форма анализа
document.addEventListener('DOMContentLoaded', function () {

    const swiperWorksDesktop = document.querySelector('.swiper-works-desktop');
    if (swiperWorksDesktop && typeof Swiper !== 'undefined' && window.innerWidth > 767) {
        new Swiper(swiperWorksDesktop, {
            slidesPerView: 4,
            spaceBetween: 10,
            direction: 'vertical',
            navigation: {
                nextEl: '.works-desktop-next',
                prevEl: '.works-desktop-prev',
            },
        });
    }

    const swiperWorksMobile = document.querySelector('.swiper-works-mobile');
    if (swiperWorksMobile && typeof Swiper !== 'undefined' && window.innerWidth < 768) {
        new Swiper(swiperWorksMobile, {
            slidesPerView: 1,
            spaceBetween: 10,
            loop: true,
            autoHeight: true,
            navigation: {
                nextEl: '.works-mobile-next',
                prevEl: '.works-mobile-prev',
            },
        });
    }

});

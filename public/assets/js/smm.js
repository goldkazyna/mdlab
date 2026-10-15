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

    // Форма «Проанализируем вашу ситуацию» — та же отправка в Telegram, что и у модалки звонка
    const form = document.getElementById('smmForm');
    const message = document.getElementById('smmFormMessage');
    if (!form) return;

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        form.classList.add('loading');
        message.className = 'form-msg';
        message.textContent = '';

        const formData = new FormData(form);

        fetch('/api/contact', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            },
            body: JSON.stringify({
                name: formData.get('name'),
                phone: formData.get('phone'),
                page: window.location.href + ' (форма анализа SMM)'
            })
        })
        .then(response => response.json())
        .then(data => {
            form.classList.remove('loading');
            message.className = 'form-msg ' + (data.success ? 'success' : 'error');
            message.textContent = data.message || 'Ошибка отправки. Позвоните нам напрямую.';
            if (data.success) form.reset();
        })
        .catch(() => {
            form.classList.remove('loading');
            message.className = 'form-msg error';
            message.textContent = 'Ошибка соединения. Позвоните нам напрямую.';
        });
    });
});

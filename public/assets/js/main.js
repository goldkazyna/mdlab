$(document).ready(function () {


    // Маски для инпутов
    $.mask.definitions['9'] = '';
    $.mask.definitions['d'] = '[0-9]';

    $('[type="tel"]').mask("+7 (ddd) dd-dd-ddd");


    // Анимация цифр
    if ($('.benefits__inner').length) {
        let show = true;
        const countbox = ".benefits__inner";
        $(window).on("scroll load resize", function () {
            if (!show) return false; // Отменяем показ анимации, если она уже была выполнена
            let w_top = $(window).scrollTop(); // Количество пикселей на которое была прокручена страница
            let e_top = $(countbox).offset().top; // Расстояние от блока со счетчиками до верха всего документа
            let w_height = $(window).height(); // Высота окна браузера
            let d_height = $(document).height(); // Высота всего документа
            let e_height = $(countbox).outerHeight(); // Полная высота блока со счетчиками
            if (w_top + 500 >= e_top || w_height + w_top == d_height || e_height + e_top < w_height) {
                $('.benefits__num span').css('opacity', '1');
                $('.benefits__num span').spincrement({
                    thousandSeparator: " ",
                    duration: 5000,
                    leeway: 50
                });

                show = false;
            }
        });
    }

    if ($('.home-benefits').length) {
        let show = true;
        const countbox = ".home-benefits";

        $(window).on("scroll load resize", function () {
            if (!show) return;

            let w_top = $(window).scrollTop();              // Верх окна
            let w_bottom = w_top + $(window).height();      // Низ окна
            let e_top = $(countbox).offset().top;           // Верх блока
            let e_bottom = e_top + $(countbox).outerHeight(); // Низ блока

            // Проверка: блок полностью в видимой части окна
            if (w_top <= e_top && w_bottom >= e_bottom) {
                $('.home-benefits__num span').css('opacity', '1').spincrement({
                    thousandSeparator: " ",
                    duration: 5000,
                    leeway: 50
                });

                show = false; // Отключаем повтор
            }
        });
    }


    if ($('[data-accordion]').length) {
        // Инициализация аккордеона
        initAccordion('[data-accordion]');
    }


    // Модальные окна
    Fancybox.bind("[data-fancybox]", {
        tpl: {
            closeButton: '<button data-fancybox-close class="fancybox__close modal__close"><i class="fa-solid fa-xmark"></i></button>'
        }
    });


    // Мобильное меню
    const btnBurger = $(".toggle-btn");
    const mobileWidth = 1200;

    btnBurger.on("click", function (e){
        e.preventDefault();
        $('body').toggleClass('_modal-open');
    });

    // Подменю в мобильном меню
    // $('.nav-main__item').on('click', '.nav-main__toggle', function (e){
    //     if ($(window).width() <= mobileWidth ) {
    //         e.preventDefault();
    //         e.stopPropagation();
    //         $(this).toggleClass('_open');
    //         $(this).closest('.nav-main__item').find('.nav-main__submenu').slideToggle();
    //     }
    // });

    // Подменю в мобильном меню при клике на всю ссылку, если есть toggle
    $('.nav-main__item').on('click', '.nav-main__link', function (e){
        if ($(window).width() <= mobileWidth ) {
            var $link = $(this);
            var $toggle = $link.find('.nav-main__toggle');

            // Проверяем, есть ли toggle внутри ссылки
            if ($toggle.length) {
                e.preventDefault(); // отменяем переход по ссылке
                e.stopPropagation();

                $toggle.toggleClass('_open');

                // Находим подменю в текущем пункте меню
                $link.closest('.nav-main__item').find('.nav-main__submenu').slideToggle();
            }
            // Если toggle нет – переход по ссылке остаётся обычным
        }
    });



    lottie.loadAnimation({
        container: document.getElementById("rocket"), // Контейнер
        renderer: "svg", // Формат рендеринга (svg, canvas, html)
        loop: true, // Зацикливание
        autoplay: true, // Автовоспроизведение
        path: "assets/img/animation/rocket.json" // Путь к JSON-анимации
    });


    // AOS
    AOS.init({});

    // АНимации прыжков
    function animateJumpingImage(selector, repeat = false) {
        let $image = $(selector);

        function applyAnimation() {
            $image.addClass("bounce-animation");

            setTimeout(() => {
                $image.removeClass("bounce-animation");

                if (repeat) {
                    setTimeout(applyAnimation, 2000); // Запускаем снова через 2 секунды
                }
            }, 1200); // Длительность анимации (1.2s)
        }

        applyAnimation();
    }


    // ОДИН РАЗ анимация для .bots-hero__img
    //animateJumpingImage(".bots-hero__img", false);

    // ПОСТОЯННО прыгающая другая картинка
    animateJumpingImage(".section-bots__img", true);


    // Анимированый фон
    // Конфигурация цветов и прозрачности

    if ($('.icbg-animation').length) {
        var icBgConfig = {
            lineColor: "rgba(0,150,214, ALPHA)", // Цвет линий (желтый, меняем ALPHA на прозрачность)
            circleColor: "rgba(0,150,214, ALPHA)", // Цвет точек (желтый, меняем ALPHA на прозрачность)
            minAlpha: 0.03, // Минимальная прозрачность
            maxAlpha: 0.13  // Максимальная прозрачность
        };
        var icBgAnimation = function() {
            var width,
                height,
                largeHeader,
                canvas,
                ctx,
                points,
                target,
                animateHeader = true;

            initTop();
            initIcBgAnimation();
            addEventListeners();

            function initTop() {
                width = window.innerWidth;
                height = window.innerHeight;
                target = {
                    x: width / 2,
                    y: height / 2
                };

                canvas = document.getElementById("icbg-animation");
                canvas.width = width;
                canvas.height = height;
                ctx = canvas.getContext("2d");

                // create lines and points
                points = [];
                for (var x = 0; x < width; x = x + width / 18) {
                    for (var y = 0; y < height; y = y + height / 15) {
                        var px = x + Math.random() * width / 4;
                        var py = y + Math.random() * height / 2;
                        var p = {
                            x: px,
                            originX: px,
                            y: py,
                            originY: py
                        };
                        points.push(p);
                    }
                }

                // for each point find the 5 closest points
                for (var i = 0; i < points.length; i++) {
                    var closest = [];
                    var p1 = points[i];
                    for (var j = 0; j < points.length; j++) {
                        var p2 = points[j];
                        if (!(p1 == p2)) {
                            var placed = false;
                            for (var k = 0; k < 4; k++) {
                                if (!placed) {
                                    if (closest[k] == undefined) {
                                        closest[k] = p2;
                                        placed = true;
                                    }
                                }
                            }
                            for (var k = 0; k < 4; k++) {
                                if (!placed) {
                                    if (getDistance(p1, p2) < getDistance(p1, closest[k])) {
                                        closest[k] = p2;
                                        placed = true;
                                    }
                                }
                            }
                        }
                    }
                    p1.closest = closest;
                }

                // assign a circle to each point
                for (var i in points) {
                    var c = new Circle(points[i], 2 + Math.random() * 6, "rgba(246,241,0,0.15)");
                    points[i].circle = c;
                }
            }

            // Mouse and touch event handling
            function addEventListeners() {
                if (!("ontouchstart" in window)) {
                    window.addEventListener("mousemove", mouseMove);
                } else {
                    window.addEventListener("touchmove", mouseMove, { passive: false });
                }
                window.addEventListener("scroll", scrollCheck);
                window.addEventListener("resize", resize);
            }

            function mouseMove(e) {
                var posx = 0, posy = 0;

                if (e.touches) {
                    // Для мобильных устройств (берем координаты первого касания)
                    posx = e.touches[0].clientX;
                    posy = e.touches[0].clientY;
                } else {
                    // Для мыши
                    posx = e.clientX;
                    posy = e.clientY;
                }

                target.x = posx;
                target.y = posy;
            }

            function scrollCheck() {
                // Убираем отключение анимации при скролле, оставляем анимацию всегда включенной
                animateHeader = true
            }

            function resize() {
                width = window.innerWidth;
                height = window.innerHeight;
                canvas.width = width;
                canvas.height = height;
            }

            // animation
            function initIcBgAnimation() {
                animate();
                for (var i in points) {
                    shiftPoint(points[i]);
                }
            }

            function animate() {
                // color settings for lines below
                if (animateHeader) {
                    ctx.clearRect(0, 0, width, height);

                    for (var i in points) {
                        if (Math.abs(getDistance(target, points[i])) < 4000) {
                            points[i].active = icBgConfig.maxAlpha;
                            points[i].circle.active = icBgConfig.maxAlpha;
                        } else if (Math.abs(getDistance(target, points[i])) < 20000) {
                            points[i].active = 0.08;
                            points[i].circle.active = 0.12;
                        } else if (Math.abs(getDistance(target, points[i])) < 40000) {
                            points[i].active = 0.05;
                            points[i].circle.active = 0.10;
                        } else {
                            points[i].active = icBgConfig.minAlpha;
                            points[i].circle.active = icBgConfig.minAlpha;
                        }

                        drawLines(points[i]);
                        points[i].circle.draw();
                    }
                }
                requestAnimationFrame(animate);
            }
            // speed of movement adjusted below
            function shiftPoint(p) {
                TweenLite.to(p, 40 + 15 * Math.random(), {
                    x: p.originX - 50 + Math.random() * 200,
                    y: p.originY - 50 + Math.random() * 150,
                    ease: Circ.easeInOut,
                    onComplete: function() {
                        shiftPoint(p);
                    }
                });
            }

            // Canvas manipulation
            function drawLines(p) {
                if (!p.active) return;
                for (var i in p.closest) {
                    ctx.beginPath();
                    ctx.moveTo(p.x, p.y);
                    ctx.lineTo(p.closest[i].x, p.closest[i].y);
                    ctx.strokeStyle = icBgConfig.lineColor.replace("ALPHA", p.active);
                    ctx.stroke();
                }
            }

            function Circle(pos, rad, color) {
                var _this = this;

                // constructor
                (function() {
                    _this.pos = pos || null;
                    _this.radius = rad || null;
                    _this.color = color || null;
                })();

                this.draw = function() {
                    if (!_this.active) return;
                    ctx.beginPath();
                    ctx.arc(_this.pos.x, _this.pos.y, _this.radius, 0, 15 * Math.PI, false);
                    ctx.fillStyle = icBgConfig.circleColor.replace("ALPHA", this.active);
                    ctx.fill();
                };
            }

            // Util
            function getDistance(p1, p2) {
                return Math.pow(p1.x - p2.x, 2) + Math.pow(p1.y - p2.y, 2);
            }
        };
        icBgAnimation();
    }



    // Табы
    $('.bots-stages__link').on('click', function(e) {
        e.preventDefault();

        var menuIndex = $(this).data('menu');

        $('.bots-stages__link').removeClass('_active');
        $(this).addClass('_active');

        var $currentMenu = $('.bots-stages__item:visible');
        var $newMenu = $('.bots-stages__item[data-content="' + menuIndex + '"]');

        if ($newMenu.is(':visible')) return;

        $currentMenu.fadeOut(200, function() {
            $newMenu.fadeIn(200);
        });
    });


    // Горизонтальный скролл
    if ($('.section-bots').length) {
        gsap.registerPlugin(ScrollTrigger);

        let sectionBots = document.querySelector(".section-bots_horizontal");
        let botsDevelop = document.querySelector(".bots-develop");
        let lastItem = document.querySelector(".bots-develop__item:last-child");

// Определяем размеры
        let scrollWidth = botsDevelop.scrollWidth;
        let viewportWidth = window.innerWidth;
        let lastItemWidth = lastItem.offsetWidth;

// Насколько нужно проскроллить, чтобы последний элемент оказался по центру
        let scrollAmount = scrollWidth - viewportWidth + viewportWidth / 2 - lastItemWidth / 2;

// ✅ Фиксируем высоту секции БЕЗ ДОПОЛНИТЕЛЬНОГО ПРОСТРАНСТВА
        let fakeHeight = scrollAmount + sectionBots.offsetHeight;
        sectionBots.style.height = `${fakeHeight}px`; // ❗ Задаем НЕ `min-height`, а `height`

// ✅ Адаптивный верхний отступ
        let topOffset = viewportWidth > 1024 ? 150 : 80;

        gsap.to(botsDevelop, {
            x: -scrollAmount,
            ease: "none",
            scrollTrigger: {
                trigger: sectionBots,
                start: `top ${topOffset}px`,
                end: `+=${scrollAmount}`,
                pin: true,
                pinSpacing: false, // ❗ ВАЖНО: убираем "прыгающий" контент
                scrub: 1
            }
        });
    }


    if ($('.home-portfolio__body').length) {
        // Инициализация Isotope
        var $grid = $('.home-portfolio__body').isotope({
            itemSelector: '.home-portfolio-item',
            percentPosition: true,
            masonry: {
                columnWidth: '.home-portfolio-item',
                gutter: 20
            }
        });

        // Обработка кликов по фильтрам
        $('.home-portfolio__tag').on('click', function (e) {
            e.preventDefault();

            var $this = $(this);
            var filterValue = $this.data('case-filter'); // Получаем значение фильтра

            // Убираем класс active со всех фильтров
            $('.home-portfolio__tag').removeClass('_active');

            // Добавляем класс active текущему фильтру
            $this.addClass('_active');

            // Применяем фильтр
            $grid.isotope({
                filter: filterValue === '*' ? '*' : `[data-case-item*="${filterValue.slice(1)}"]`
            });

            // После фильтрации пересчитываем layout
            $grid.isotope('layout');
        });

    }


    if ($('.home-review').length > 0) {
        const reviewSwiper = new Swiper('.home-review .swiper', {
            slidesPerView: 'auto',
            spaceBetween: 0,
            centeredSlides: true,
            loop: true,
            speed: 8000, // Большая скорость делает переход медленным
            autoplay: {
                delay: 0,          // Никакой паузы между слайдами
                disableOnInteraction: false,
            },
            freeMode: true,         // Двигается без привязки к шагу слайда
            freeModeMomentum: false,
            allowTouchMove: true,
            navigation: {
                nextEl: '.home-review .slider-nav__next',
                prevEl: '.home-review .slider-nav__prev',
            },
        });

        // Остановка при наведении
        $('.home-review .swiper').on('mouseenter', () => {
            reviewSwiper.autoplay.stop();
        });

        $('.home-review .swiper').on('mouseleave', () => {
            reviewSwiper.autoplay.start();
        });
    }




});


// Аккордеон
function initAccordion(selector) {

    $(selector).each(function() {
        const $accordion = $(this);
        const singleMode = $accordion.data('accordion') === 'single';
        const keepOpen = $accordion.data('keep-open') === true || $accordion.data('keep-open') === 'true';

        // При загрузке сразу показываем все блоки с классом _open
        $accordion.find('[data-accordion-item]._open [data-accordion-body]').css('display', 'block');

        $accordion.find('[data-accordion-btn]').on('click', function() {
            const $item = $(this).closest('[data-accordion-item]');
            const $body = $item.find('[data-accordion-body]');
            const isOpen = $item.hasClass('_open');

            console.log('a')

            if (singleMode) {
                if (isOpen && keepOpen) {
                    // Если пункт уже открыт и запрещено все закрывать — выходим из функции
                    return;
                }

                // В режиме single сворачиваем все блоки, кроме текущего
                $accordion.find('[data-accordion-item]._open').not($item).each(function() {
                    const $otherItem = $(this);
                    const $otherBody = $otherItem.find('[data-accordion-body]');
                    $otherItem.removeClass('_open');
                    $otherBody.slideUp('500ms');
                });
            }

            // Переключаем текущее состояние: открываем или закрываем блок
            if (isOpen) {
                if (!keepOpen) {
                    $item.removeClass('_open');
                    $body.slideUp('500ms');
                }
            } else {
                $item.addClass('_open');
                $body.slideDown('500ms');
            }
        });
    });

}

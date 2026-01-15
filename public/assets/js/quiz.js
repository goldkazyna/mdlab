$(document).ready(function () {
    const $steps = $('#quizModal .quiz-step');
    let currentStep = 0;

    function showStep(index) {
        const $prevBtn = $('#quizModal .btn-prev');
        const $nextBtn = $('#quizModal .btn-next');
        const $submitBtn = $('#quizModal .btn-submit');

        const $current = $steps.filter('._active');
        const $next = $steps.eq(index);

        if ($current[0] === $next[0]) return; // если уже на нужном шаге — ничего не делаем

        $current.fadeOut(300, function () {
            $current.removeClass('_active');
            $next.fadeIn(300).addClass('_active');
        });

        // Управление кнопками
        if (index === $steps.length - 1) {
            $nextBtn.hide();
            $submitBtn.show();
        } else {
            $nextBtn.show();
            $submitBtn.hide();
        }

        if (index === 0) {
            $prevBtn.hide(); // первая кнопка — «Отмена», но скрываем её
        } else {
            $prevBtn.show();
        }

        clearError(); // убрать ошибки при смене шага
    }




    function isStepValid(index) {
        const $step = $steps.eq(index);
        const $requiredOptions = $step.find('input[type="radio"], input[type="checkbox"]');
        if ($requiredOptions.length > 0) {
            return $requiredOptions.is(':checked');
        }
        return true;
    }

    function showError(message) {
        $('#quizModal .quiz-footer').slideDown('fast').html(`<div class="quiz-error">${message}</div>`);
    }

    function clearError() {
        $('#quizModal .quiz-footer').slideUp('fast').empty();
    }

    // Кнопка "далее"
    $('#quizModal .btn-next').on('click', function () {
        if (!isStepValid(currentStep)) {
            showError('Пожалуйста, выберите один из вариантов, чтобы продолжить.');
            return;
        }

        if (currentStep < $steps.length - 1) {
            currentStep++;
            showStep(currentStep);
        }
    });

    // Кнопка "назад/отмена"
    $('#quizModal .btn-prev').on('click', function () {
        if (currentStep === 0) {
            Fancybox.close();
        } else {
            currentStep--;
            showStep(currentStep);
        }
    });

    // Сабмит - сюда логику отправку данных
    $('#quizForm').on('submit', function (e) {
        e.preventDefault();
        clearError();

        // Показываем благодарность
        $('#quizModal .quiz-success').slideDown('fast').html('Спасибо! Ваша заявка отправлена, мы&nbsp;свяжемся с&nbsp;вами в&nbsp;ближайшее время.');

        // (опционально) Прячем форму
        $('#quizForm').hide();

        // (опционально) Закрыть модалку через 3 сек
        // setTimeout(() => Fancybox.close(), 3000);
    });


    // Сброс при открытии
    $(document).on('fancybox:reveal', function (e, fancybox) {
        if ($(fancybox.$container).find('#quizModal').length) {
            currentStep = 0;
            showStep(currentStep);
            $('#quizForm')[0].reset(); // сбрасываем поля формы
            clearError(); // очищаем возможные ошибки
        }
    });

});

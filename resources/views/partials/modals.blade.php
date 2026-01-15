<div class="modal modal_sm" id="recallModal">
    <div class="modal__title">Заказать звонок</div>
    <form class="form modal__form" id="recallForm">
        <div class="input">
            <input type="text" name="name" placeholder="Ваше имя" required>
        </div>
        <div class="input">
            <input type="tel" name="phone" placeholder="Номер телефона" required>
        </div>
        <input type="hidden" name="page" id="formPage">
        <button class="btn btn_md" type="submit">
            <span class="btn__name">Отправить</span>
        </button>
        <div class="form__message" id="formMessage"></div>
    </form>
</div>

<style>
.form__message {
    margin-top: 15px;
    padding: 10px;
    border-radius: 8px;
    font-size: 14px;
    text-align: center;
    display: none;
}
.form__message.success {
    display: block;
    background: #d4edda;
    color: #155724;
}
.form__message.error {
    display: block;
    background: #f8d7da;
    color: #721c24;
}
.form.loading .btn {
    opacity: 0.7;
    pointer-events: none;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('recallForm');
    const message = document.getElementById('formMessage');
    const pageInput = document.getElementById('formPage');
    
    // Записываем текущую страницу
    pageInput.value = window.location.href;
    
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Добавляем класс загрузки
        form.classList.add('loading');
        message.className = 'form__message';
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
                page: formData.get('page')
            })
        })
        .then(response => response.json())
        .then(data => {
            form.classList.remove('loading');
            
            if (data.success) {
                message.className = 'form__message success';
                message.textContent = data.message;
                form.reset();
                pageInput.value = window.location.href;
                
                // Закрываем модалку через 3 секунды
                setTimeout(() => {
                    // Если используете Fancybox
                    if (typeof Fancybox !== 'undefined') {
                        Fancybox.close();
                    }
                    message.className = 'form__message';
                }, 3000);
            } else {
                message.className = 'form__message error';
                message.textContent = data.message;
            }
        })
        .catch(error => {
            form.classList.remove('loading');
            message.className = 'form__message error';
            message.textContent = 'Ошибка соединения. Попробуйте позже.';
        });
    });
});
</script>
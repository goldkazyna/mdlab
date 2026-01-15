@extends('layouts.app')

@push('styles')
<style>
.contacts-page {
    padding: 160px 0;
    background: #f8f9fa;
    min-height: 100vh;
}

.contacts-header {
    text-align: center;
    margin-bottom: 50px;
}

.contacts-header h1 {
    font-size: 42px;
    font-weight: 700;
    color: #1a1a2e;
    margin-bottom: 15px;
}

.contacts-header p {
    font-size: 18px;
    color: #666;
    max-width: 600px;
    margin: 0 auto;
}

.contacts-wrapper {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
    margin-bottom: 50px;
}

@media (max-width: 992px) {
    .contacts-wrapper {
        grid-template-columns: 1fr;
    }
}

/* Контактная информация */
.contacts-info {
    background: #fff;
    border-radius: 20px;
    padding: 40px;
    box-shadow: 0 10px 40px rgba(0,0,0,0.08);
}

.contacts-info__title {
    font-size: 24px;
    font-weight: 700;
    color: #1a1a2e;
    margin-bottom: 30px;
}

.contact-item {
    display: flex;
    align-items: flex-start;
    gap: 20px;
    margin-bottom: 25px;
}

.contact-item:last-child {
    margin-bottom: 0;
}

.contact-item__icon {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, #ff5722 0%, #ff7a50 100%);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.contact-item__icon i {
    color: #fff;
    font-size: 20px;
}

.contact-item__content {
    flex: 1;
}

.contact-item__label {
    font-size: 14px;
    color: #999;
    margin-bottom: 5px;
}

.contact-item__value {
    font-size: 18px;
    font-weight: 600;
    color: #1a1a2e;
}

.contact-item__value a {
    color: #1a1a2e;
    text-decoration: none;
    transition: color 0.3s;
}

.contact-item__value a:hover {
    color: #ff5722;
}

/* Соцсети */
.contacts-social {
    margin-top: 30px;
    padding-top: 30px;
    border-top: 1px solid #eee;
}

.contacts-social__title {
    font-size: 16px;
    font-weight: 600;
    color: #1a1a2e;
    margin-bottom: 15px;
}

.social-links {
    display: flex;
    gap: 12px;
}

.social-links a {
    width: 45px;
    height: 45px;
    background: #f5f5f5;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #666;
    font-size: 20px;
    transition: all 0.3s;
}

.social-links a:hover {
    background: #ff5722;
    color: #fff;
    transform: translateY(-3px);
}

/* Форма */
.contacts-form {
    background: #fff;
    border-radius: 20px;
    padding: 40px;
    box-shadow: 0 10px 40px rgba(0,0,0,0.08);
}

.contacts-form__title {
    font-size: 24px;
    font-weight: 700;
    color: #1a1a2e;
    margin-bottom: 30px;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    font-size: 14px;
    font-weight: 500;
    color: #333;
    margin-bottom: 8px;
}

.form-group input,
.form-group textarea {
    width: 100%;
    padding: 15px 20px;
    border: 2px solid #eee;
    border-radius: 12px;
    font-size: 16px;
    transition: border-color 0.3s;
    outline: none;
}

.form-group input:focus,
.form-group textarea:focus {
    border-color: #ff5722;
}

.form-group textarea {
    min-height: 120px;
    resize: vertical;
}

.form-submit {
    width: 100%;
    padding: 18px 30px;
    background: linear-gradient(135deg, #ff5722 0%, #ff7a50 100%);
    border: none;
    border-radius: 12px;
    color: #fff;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s;
}

.form-submit:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 30px rgba(255,87,34,0.4);
}

/* Карта */
.contacts-map {
    background: #fff;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 40px rgba(0,0,0,0.08);
}

.contacts-map__header {
    padding: 25px 30px;
    border-bottom: 1px solid #eee;
}

.contacts-map__title {
    font-size: 20px;
    font-weight: 700;
    color: #1a1a2e;
    margin: 0;
}

.contacts-map__body {
    height: 400px;
    background: #f0f0f0;
    display: flex;
    align-items: center;
    justify-content: center;
}

.contacts-map__body iframe {
    width: 100%;
    height: 100%;
    border: none;
}

.map-placeholder {
    text-align: center;
}

.map-placeholder button {
    padding: 15px 30px;
    background: #ff5722;
    color: #fff;
    border: none;
    border-radius: 8px;
    font-size: 16px;
    cursor: pointer;
    transition: all 0.3s;
}

.map-placeholder button:hover {
    background: #e64a19;
    transform: translateY(-2px);
}

/* Сообщение об успехе */
.form-message {
    padding: 15px;
    border-radius: 10px;
    margin-bottom: 20px;
    display: none;
}

.form-message.success {
    background: #e8f5e9;
    color: #2e7d32;
    display: block;
}

.form-message.error {
    background: #ffebee;
    color: #c62828;
    display: block;
}
@media (max-width: 768px) {
    .contacts-page {
    padding: 110px 0;

}
}
</style>
@endpush

@section('content')
<section class="contacts-page">
    <div class="container">
        <div class="contacts-header">
            <h1>Контакты</h1>
            <p>Свяжитесь с нами любым удобным способом — мы всегда на связи!</p>
        </div>

        <div class="contacts-wrapper">
            <!-- Контактная информация -->
            <div class="contacts-info">
                <h2 class="contacts-info__title">Наши контакты</h2>
                
                <div class="contact-item">
                    <div class="contact-item__icon">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="contact-item__content">
                        <div class="contact-item__label">Адрес</div>
                        <div class="contact-item__value">г. Алматы, ул. Назарбаева 50, 2 эт. 209 оф.</div>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-item__icon">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="contact-item__content">
                        <div class="contact-item__label">Телефон</div>
                        <div class="contact-item__value">
                            <a href="tel:+77774333822">+7 777 433 38 22</a>
                        </div>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-item__icon">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="contact-item__content">
                        <div class="contact-item__label">Email</div>
                        <div class="contact-item__value">
                            <a href="mailto:info@mdlab.kz">info@mdlab.kz</a>
                        </div>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-item__icon">
                        <i class="fa-brands fa-whatsapp"></i>
                    </div>
                    <div class="contact-item__content">
                        <div class="contact-item__label">WhatsApp</div>
                        <div class="contact-item__value">
                            <a href="https://wa.me/77774333822">Написать в WhatsApp</a>
                        </div>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-item__icon">
                        <i class="fa-solid fa-clock"></i>
                    </div>
                    <div class="contact-item__content">
                        <div class="contact-item__label">Режим работы</div>
                        <div class="contact-item__value">Пн-Пт: 09:00 - 18:00</div>
                    </div>
                </div>

                <div class="contacts-social">
                    <div class="contacts-social__title">Мы в соцсетях</div>
                    <div class="social-links">
                        <a href="https://www.instagram.com/mdlabkz/" target="_blank" title="Instagram">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="https://www.facebook.com/MD-Lab-351217825313347/" target="_blank" title="Facebook">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="https://vk.com/public151532814" target="_blank" title="VK">
                            <i class="fa-brands fa-vk"></i>
                        </a>
                        <a href="https://wa.me/77774333822" target="_blank" title="WhatsApp">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Форма обратной связи -->
            <div class="contacts-form">
                <h2 class="contacts-form__title">Напишите нам</h2>
                
                <div id="contact-message" class="form-message"></div>
                
                <form id="contactForm">
                    <div class="form-group">
                        <label for="contact_name">Ваше имя</label>
                        <input type="text" id="contact_name" name="name" placeholder="Как к вам обращаться?" required>
                    </div>
                    <div class="form-group">
                        <label for="contact_phone">Телефон</label>
                        <input type="tel" id="contact_phone" name="phone" placeholder="+7 (___) ___-__-__" required>
                    </div>
                    <div class="form-group">
                        <label for="contact_email">Email</label>
                        <input type="email" id="contact_email" name="email" placeholder="example@mail.com">
                    </div>
                    <div class="form-group">
                        <label for="contact_message">Сообщение</label>
                        <textarea id="contact_message" name="message" placeholder="Расскажите о вашем проекте..."></textarea>
                    </div>
                    <button type="submit" class="form-submit">Отправить сообщение</button>
                </form>
            </div>
        </div>

        <!-- Карта -->
        <div class="contacts-map">
            <div class="contacts-map__header">
                <h3 class="contacts-map__title">Мы на карте</h3>
            </div>
            <div class="contacts-map__body" id="yandex-map">
                <div class="map-placeholder">
                    <button onclick="loadYandexMap()">
                        <i class="fa-solid fa-map-location-dot"></i> Показать карту
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection

@push('scripts')
<script>
function loadYandexMap() {
    var mapContainer = document.getElementById('yandex-map');
    mapContainer.innerHTML = '<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A210fb1c1f4d0f50ad15453dac51f5fce5d45701735ffff7be9ddfec2c241d61c&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>';
}

// Форма контактов
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    var form = this;
    var messageBlock = document.getElementById('contact-message');
    var submitBtn = form.querySelector('.form-submit');
    var originalText = submitBtn.textContent;
    
    // Валидация
    var name = document.getElementById('contact_name').value;
    var phone = document.getElementById('contact_phone').value;
    
    if(name.trim() === '' || phone.trim() === '') {
        messageBlock.className = 'form-message error';
        messageBlock.textContent = 'Пожалуйста, заполните обязательные поля';
        return;
    }
    
    submitBtn.textContent = 'Отправка...';
    submitBtn.disabled = true;
    
    // TODO: Отправка на сервер
    // Пока просто имитация
    setTimeout(function() {
        messageBlock.className = 'form-message success';
        messageBlock.textContent = 'Спасибо! Ваше сообщение отправлено. Мы свяжемся с вами в ближайшее время.';
        form.reset();
        submitBtn.textContent = originalText;
        submitBtn.disabled = false;
    }, 1000);
});
</script>
@endpush
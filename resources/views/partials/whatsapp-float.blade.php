<a href="{{ $__env->yieldContent('wa_url', 'https://wa.me/77774333822') }}" target="_blank" rel="noopener" class="wa-float" aria-label="Написать в WhatsApp" title="Написать в WhatsApp">
    <svg viewBox="0 0 32 32" width="32" height="32" aria-hidden="true"><path fill="currentColor" d="M16.04 3C8.86 3 3.02 8.83 3.02 16c0 2.3.6 4.53 1.74 6.5L3 29l6.68-1.75A13 13 0 0 0 16.04 29C23.2 29 29.05 23.17 29.05 16S23.2 3 16.04 3zm0 23.8c-1.98 0-3.92-.53-5.61-1.53l-.4-.24-3.97 1.04 1.06-3.86-.26-.4A10.76 10.76 0 0 1 5.24 16c0-5.95 4.85-10.8 10.8-10.8 5.96 0 10.8 4.85 10.8 10.8 0 5.96-4.84 10.8-10.8 10.8zm5.92-8.08c-.32-.16-1.92-.95-2.22-1.06-.3-.11-.51-.16-.73.16-.21.32-.84 1.06-1.03 1.27-.19.22-.38.24-.7.08-.32-.16-1.37-.5-2.6-1.6-.96-.86-1.61-1.92-1.8-2.24-.19-.32-.02-.5.14-.66.15-.14.32-.38.49-.57.16-.19.21-.32.32-.54.1-.21.05-.4-.03-.56-.08-.16-.73-1.75-1-2.4-.26-.63-.53-.54-.73-.55h-.62c-.21 0-.56.08-.86.4-.3.32-1.13 1.1-1.13 2.7 0 1.58 1.16 3.12 1.32 3.33.16.22 2.28 3.48 5.53 4.88.77.33 1.37.53 1.84.68.78.25 1.48.21 2.04.13.62-.09 1.92-.78 2.19-1.54.27-.76.27-1.4.19-1.54-.08-.13-.29-.21-.61-.37z"/></svg>
</a>

<style>
.wa-float {
    position: fixed;
    right: 20px;
    bottom: 20px;
    z-index: 1000;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: #25D366;
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 6px 20px rgba(37, 211, 102, 0.45);
    transition: transform 0.2s, background 0.2s;
}
.wa-float::before {
    content: '';
    position: absolute;
    inset: 0;
    border-radius: 50%;
    background: #25D366;
    z-index: -1;
    animation: wa-pulse 2s ease-out infinite;
}
.wa-float:hover {
    background: #20BA5A;
    color: #fff;
    transform: scale(1.08);
}
.wa-float::after {
    display: none;
}
@keyframes wa-pulse {
    0% { transform: scale(1); opacity: 0.6; }
    100% { transform: scale(1.6); opacity: 0; }
}
@media (max-width: 767px) {
    .wa-float {
        right: 15px;
        bottom: 15px;
        width: 54px;
        height: 54px;
    }
}
@media (prefers-reduced-motion: reduce) {
    .wa-float::before { animation: none; }
}
</style>

{{-- На компьютере WhatsApp часто не установлен, и человек теряется на странице wa.me.
     Поэтому на десктопе клик по WhatsApp открывает окно: QR-код для телефона, кнопка и номер. --}}
<div class="wa-modal" id="waModal" hidden>
    <div class="wa-modal__box" role="dialog" aria-modal="true" aria-labelledby="waModalTitle">
        <button type="button" class="wa-modal__close" aria-label="Закрыть">&times;</button>
        <div class="wa-modal__title" id="waModalTitle">Напишите нам в WhatsApp</div>
        <div class="wa-modal__body">
            <div class="wa-modal__qr-col">
                <div class="wa-modal__qr" id="waModalQr"></div>
                <div class="wa-modal__hint">Наведите камеру телефона — чат откроется с готовым сообщением</div>
            </div>
            <div class="wa-modal__info">
                <a class="wa-modal__open" id="waModalOpen" href="https://wa.me/77774333822" target="_blank" rel="noopener">Открыть WhatsApp на компьютере</a>
                <div class="wa-modal__label">Или позвоните, или напишите на номер:</div>
                <div class="wa-modal__phone">
                    <a href="tel:+77774333822">+7 (777) 433-38-22</a>
                    <button type="button" class="wa-modal__copy" data-phone="+77774333822">Скопировать</button>
                </div>
                <div class="wa-modal__hours">Пн–Пт 09:00–18:00</div>
            </div>
        </div>
    </div>
</div>

<style>
.wa-modal {
    position: fixed;
    inset: 0;
    z-index: 2000;
    background: rgba(17, 24, 39, 0.55);
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
}
.wa-modal[hidden] { display: none; }
.wa-modal__box {
    position: relative;
    background: #fff;
    border-radius: 20px;
    padding: 32px 36px;
    max-width: 620px;
    width: 100%;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.25);
}
.wa-modal__close {
    position: absolute;
    top: 12px;
    right: 16px;
    border: 0;
    background: none;
    font-size: 30px;
    line-height: 1;
    color: #999;
    cursor: pointer;
}
.wa-modal__close:hover { color: #333; }
.wa-modal__title {
    font-size: 22px;
    font-weight: 700;
    color: #1a1a2e;
    margin-bottom: 22px;
}
.wa-modal__body {
    display: flex;
    gap: 30px;
    align-items: center;
}
.wa-modal__qr-col {
    flex: 0 0 200px;
    text-align: center;
}
.wa-modal__qr {
    width: 200px;
    height: 200px;
    padding: 10px;
    border: 1px solid #e5e7eb;
    border-radius: 12px;
    box-sizing: border-box;
}
.wa-modal__qr img, .wa-modal__qr canvas { width: 100% !important; height: auto !important; }
.wa-modal__hint {
    font-size: 13px;
    color: #666;
    margin-top: 10px;
    line-height: 1.4;
}
.wa-modal__info { flex: 1; }
.wa-modal__open {
    display: block;
    text-align: center;
    background: #25D366;
    color: #fff !important;
    font-weight: 600;
    padding: 14px 18px;
    border-radius: 12px;
    text-decoration: none;
    margin-bottom: 22px;
}
.wa-modal__open:hover { background: #20BA5A; }
.wa-modal__label {
    font-size: 14px;
    color: #666;
    margin-bottom: 6px;
}
.wa-modal__phone {
    display: flex;
    align-items: center;
    gap: 12px;
    flex-wrap: wrap;
}
.wa-modal__phone a {
    font-size: 24px;
    font-weight: 700;
    color: #1a1a2e;
    text-decoration: none;
}
.wa-modal__copy {
    border: 1px solid #0098D6;
    background: #fff;
    color: #0098D6;
    border-radius: 8px;
    padding: 6px 12px;
    font-size: 13px;
    cursor: pointer;
}
.wa-modal__copy:hover { background: #0098D6; color: #fff; }
.wa-modal__hours {
    font-size: 13px;
    color: #888;
    margin-top: 12px;
}
</style>

<script>
(function () {
    var modal = document.getElementById('waModal');
    if (!modal) return;
    var desktop = window.matchMedia('(hover: hover) and (pointer: fine) and (min-width: 992px)');
    var qrLib = null;

    function loadQr(cb) {
        if (window.QRCode) return cb();
        if (!qrLib) {
            qrLib = document.createElement('script');
            qrLib.src = 'https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js';
            document.head.appendChild(qrLib);
        }
        qrLib.addEventListener('load', cb);
    }

    function open(href) {
        document.getElementById('waModalOpen').href = href;
        var box = document.getElementById('waModalQr');
        box.innerHTML = '';
        loadQr(function () {
            box.innerHTML = '';
            new QRCode(box, {text: href, width: 360, height: 360, correctLevel: QRCode.CorrectLevel.L});
        });
        modal.hidden = false;
    }

    function close() { modal.hidden = true; }

    // Ссылки «поделиться» (wa.me/?text=) не трогаем — только наш номер
    document.addEventListener('click', function (e) {
        var a = e.target.closest && e.target.closest('a[href*="wa.me/77774333822"]');
        if (!a || a.id === 'waModalOpen' || !desktop.matches) return;
        e.preventDefault();
        open(a.href);
    });

    modal.addEventListener('click', function (e) {
        if (e.target === modal || e.target.closest('.wa-modal__close')) close();
        var copy = e.target.closest('.wa-modal__copy');
        if (copy && navigator.clipboard) {
            navigator.clipboard.writeText(copy.dataset.phone).then(function () {
                copy.textContent = 'Скопировано';
                setTimeout(function () { copy.textContent = 'Скопировать'; }, 2000);
            });
        }
    });
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') close();
    });
})();
</script>

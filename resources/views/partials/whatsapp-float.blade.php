<a href="https://wa.me/77774333822" target="_blank" rel="noopener" class="wa-float" aria-label="Написать в WhatsApp" title="Написать в WhatsApp">
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

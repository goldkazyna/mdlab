/**
 * Журнал заходов: отпечаток устройства + поведение на сайте.
 * Данные уходят на /api/v, смотреть на /visits.
 */
(function () {
    'use strict';

    var ENDPOINT = '/api/v';

    function uuid() {
        if (window.crypto && crypto.randomUUID) return crypto.randomUUID();
        return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function (c) {
            var r = Math.random() * 16 | 0;
            return (c === 'x' ? r : (r & 0x3 | 0x8)).toString(16);
        });
    }

    function store(storage, key, make) {
        try {
            var value = storage.getItem(key);
            if (!value) {
                value = make();
                storage.setItem(key, value);
            }
            return value;
        } catch (e) {
            return make();
        }
    }

    // cyrb53 → 32 hex-символа (два прохода с разными seed)
    function hash(str) {
        function cyrb53(s, seed) {
            var h1 = 0xdeadbeef ^ seed, h2 = 0x41c6ce57 ^ seed;
            for (var i = 0, ch; i < s.length; i++) {
                ch = s.charCodeAt(i);
                h1 = Math.imul(h1 ^ ch, 2654435761);
                h2 = Math.imul(h2 ^ ch, 1597334677);
            }
            h1 = Math.imul(h1 ^ (h1 >>> 16), 2246822507) ^ Math.imul(h2 ^ (h2 >>> 13), 3266489909);
            h2 = Math.imul(h2 ^ (h2 >>> 16), 2246822507) ^ Math.imul(h1 ^ (h1 >>> 13), 3266489909);
            return (h2 >>> 0).toString(16).padStart(8, '0') + (h1 >>> 0).toString(16).padStart(8, '0');
        }
        return cyrb53(str, 1) + cyrb53(str, 2);
    }

    function canvasSign() {
        try {
            var c = document.createElement('canvas');
            c.width = 240; c.height = 60;
            var ctx = c.getContext('2d');
            ctx.textBaseline = 'top';
            ctx.font = '16px Arial';
            ctx.fillStyle = '#f60';
            ctx.fillRect(100, 5, 80, 30);
            ctx.fillStyle = '#069';
            ctx.fillText('MD Lab, Алматы 😃', 4, 10);
            ctx.fillStyle = 'rgba(102,204,0,0.7)';
            ctx.fillText('MD Lab, Алматы 😃', 6, 14);
            return c.toDataURL();
        } catch (e) {
            return '';
        }
    }

    function webglSign() {
        try {
            var gl = document.createElement('canvas').getContext('webgl');
            if (!gl) return '';
            var ext = gl.getExtension('WEBGL_debug_renderer_info');
            return [
                ext ? gl.getParameter(ext.UNMASKED_VENDOR_WEBGL) : gl.getParameter(gl.VENDOR),
                ext ? gl.getParameter(ext.UNMASKED_RENDERER_WEBGL) : gl.getParameter(gl.RENDERER),
                gl.getParameter(gl.MAX_TEXTURE_SIZE)
            ].join('|');
        } catch (e) {
            return '';
        }
    }

    // Какие из распространённых шрифтов установлены (по ширине текста)
    function fontsSign() {
        try {
            var fonts = ['Arial Black', 'Calibri', 'Cambria', 'Comic Sans MS', 'Consolas', 'Courier New', 'Georgia',
                'Helvetica Neue', 'Impact', 'Lucida Console', 'Segoe UI', 'Tahoma', 'Trebuchet MS', 'Verdana',
                'Roboto', 'Ubuntu', 'SF Pro Text', 'Menlo', 'PT Sans', 'Noto Sans'];
            var ctx = document.createElement('canvas').getContext('2d');
            var text = 'mmmmmmmmmmlli10OЖ';
            ctx.font = '72px monospace';
            var base = ctx.measureText(text).width;
            return fonts.filter(function (f) {
                ctx.font = '72px "' + f + '", monospace';
                return ctx.measureText(text).width !== base;
            }).join(',');
        } catch (e) {
            return '';
        }
    }

    function fingerprint() {
        var n = navigator, s = screen;
        return hash([
            n.userAgent, n.language, (n.languages || []).join(','), n.platform,
            n.hardwareConcurrency, n.deviceMemory, n.maxTouchPoints,
            s.width + 'x' + s.height, s.colorDepth, window.devicePixelRatio,
            Intl.DateTimeFormat().resolvedOptions().timeZone, new Date().getTimezoneOffset(),
            canvasSign(), webglSign(), fontsSign()
        ].join('##'));
    }

    // --- Сессия во вкладке: копим показатели между страницами ---
    var sessionId = store(sessionStorage, 'vl_s', uuid);
    var state;
    try {
        state = JSON.parse(sessionStorage.getItem('vl_state')) || {};
    } catch (e) {
        state = {};
    }
    state.pages = (state.pages || 0) + 1;
    state.dur = state.dur || 0;
    state.scroll = state.scroll || 0;

    function save() {
        try { sessionStorage.setItem('vl_state', JSON.stringify(state)); } catch (e) {}
    }

    var payload = {
        s: sessionId,
        fp: fingerprint(),
        vid: store(localStorage, 'vl_v', uuid),
        url: location.href,
        ref: document.referrer,
        scr: screen.width + 'x' + screen.height,
        lang: navigator.language,
        tz: Intl.DateTimeFormat().resolvedOptions().timeZone
    };

    function send() {
        save();
        var body = JSON.stringify(Object.assign({}, payload, state));
        if (navigator.sendBeacon && navigator.sendBeacon(ENDPOINT, new Blob([body], {type: 'application/json'}))) {
            return;
        }
        try {
            fetch(ENDPOINT, {method: 'POST', body: body, keepalive: true, headers: {'Content-Type': 'application/json'}});
        } catch (e) {}
    }

    // Время считаем только пока вкладка видна
    setInterval(function () {
        if (document.visibilityState === 'visible') {
            state.dur++;
            if (state.dur % 15 === 0) save();
        }
    }, 1000);

    window.addEventListener('scroll', function () {
        var max = document.documentElement.scrollHeight - window.innerHeight;
        var pct = max > 0 ? Math.round(window.scrollY / max * 100) : 100;
        if (pct > state.scroll) state.scroll = Math.min(pct, 100);
    }, {passive: true});

    document.addEventListener('click', function (e) {
        var a = e.target.closest && e.target.closest('a[href]');
        if (!a) return;
        var href = a.getAttribute('href') || '';
        var flag = /^tel:/i.test(href) ? 'ph'
            : /wa\.me|whatsapp/i.test(href) ? 'wa'
            : /t\.me|telegram/i.test(href) ? 'tg' : null;
        if (flag) {
            state[flag] = 1;
            send();
        }
    }, true);

    document.addEventListener('submit', function () {
        state.form = 1;
        send();
    }, true);

    document.addEventListener('visibilitychange', function () {
        if (document.visibilityState === 'hidden') send();
    });
    window.addEventListener('pagehide', send);

    send();
    // Повторная отправка через 30 сек — чтобы зафиксировать время даже без ухода со страницы
    setTimeout(send, 30000);
})();

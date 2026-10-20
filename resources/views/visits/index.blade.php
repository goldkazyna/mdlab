@extends('visits.layout')

@php
    $q = fn (array $over) => route('visits.index', array_merge(['tab' => $tab, 'days' => $days, 'paid' => $paidOnly ? '1' : '0'], $over));
@endphp

@section('content')
    <div class="top">
        <h1>Журнал заходов</h1>
        <form method="post" action="{{ route('visits.logout') }}">@csrf<button class="ghost">Выйти</button></form>
    </div>

    <div class="bar">
        <a class="pill {{ $tab === 'devices' ? 'on' : '' }}" href="{{ $q(['tab' => 'devices']) }}">Устройства</a>
        <a class="pill {{ $tab === 'visits' ? 'on' : '' }}" href="{{ $q(['tab' => 'visits']) }}">Все заходы</a>
        <span class="muted" style="margin-left:12px">Период:</span>
        @foreach($periods as $p)
            <a class="pill {{ $days === $p ? 'on' : '' }}" href="{{ $q(['days' => $p]) }}">{{ $p === 1 ? 'сутки' : $p . ' дн.' }}</a>
        @endforeach
        <span class="muted" style="margin-left:12px">Показывать:</span>
        <a class="pill {{ $paidOnly ? 'on' : '' }}" href="{{ $q(['paid' => '1']) }}">только с рекламы</a>
        <a class="pill {{ !$paidOnly ? 'on' : '' }}" href="{{ $q(['paid' => '0']) }}">все</a>
    </div>

    @if($tab === 'devices')
        <p class="muted">
            Одна строка = одно устройство (отпечаток браузера). Красным подсвечены подозрительные:
            {{ config('services.visits.suspicious_paid') }}+ платных клика за период и ни одного нажатия на контакты
            или среднее время на сайте меньше {{ config('services.visits.suspicious_avg_sec') }} сек.
        </p>
        <div class="tbl-wrap">
            <table>
                <thead>
                <tr>
                    <th>Устройство</th>
                    <th class="num">Платных кликов</th>
                    <th class="num">Сессий</th>
                    <th class="num">Дней</th>
                    <th>IP-адреса</th>
                    <th class="num">Ср. время</th>
                    <th class="num">Прокрутка</th>
                    <th>Нажатия</th>
                    <th>Последний заход</th>
                </tr>
                </thead>
                <tbody>
                @forelse($devices as $d)
                    @php($ips = $ipsByDevice[$d->fingerprint] ?? collect())
                    <tr class="{{ $d->suspicious ? 'bad' : '' }} {{ $blocked->contains($d->fingerprint) ? 'blocked' : '' }}">
                        <td>
                            <a class="fp" href="{{ route('visits.device', $d->fingerprint) }}">{{ substr($d->fingerprint, 0, 10) }}</a>
                            @if($d->suspicious)<span class="tag bad">подозрительно</span>@endif
                            @if($blocked->contains($d->fingerprint))<span class="tag grey">заблокировано</span>@endif
                            <div class="muted">{{ $d->device_type }} · {{ $d->os }} · {{ $d->browser }}</div>
                        </td>
                        <td class="num"><b>{{ $d->paid }}</b></td>
                        <td class="num">{{ $d->sessions }}</td>
                        <td class="num">{{ $d->days }}</td>
                        <td>
                            @foreach($ips->take(2) as $ip)
                                <div>@include('visits._ip')</div>
                            @endforeach
                            @if($ips->count() > 2)
                                <details>
                                    <summary>ещё {{ $ips->count() - 2 }}</summary>
                                    @foreach($ips->slice(2) as $ip)
                                        <div>@include('visits._ip')</div>
                                    @endforeach
                                </details>
                            @endif
                        </td>
                        <td class="num">{{ \App\Models\Visit::formatDuration($d->avg_duration) }}</td>
                        <td class="num">{{ $d->max_scroll }}%</td>
                        <td>
                            @if($d->actions > 0)
                                <span class="tag ok">{{ $d->actions }}</span>
                            @else
                                <span class="muted">нет</span>
                            @endif
                        </td>
                        <td>{{ \Illuminate\Support\Carbon::parse($d->last_seen)->timezone('Asia/Almaty')->format('d.m H:i') }}</td>
                    </tr>
                @empty
                    <tr><td colspan="9" class="muted">За этот период заходов нет.</td></tr>
                @endforelse
                </tbody>
            </table>
        </div>
    @else
        <div class="tbl-wrap">
            <table>
                <thead>
                <tr>
                    <th>Время</th>
                    <th>IP</th>
                    <th>Устройство</th>
                    <th>Страница входа</th>
                    <th>Источник</th>
                    <th class="num">На сайте</th>
                    <th class="num">Прокрутка</th>
                    <th class="num">Страниц</th>
                    <th>Нажатия</th>
                </tr>
                </thead>
                <tbody>
                @forelse($visits as $visit)
                    @include('visits._visit-row', ['showDevice' => true])
                @empty
                    <tr><td colspan="9" class="muted">За этот период заходов нет.</td></tr>
                @endforelse
                </tbody>
            </table>
        </div>
        {{ $visits->links('pagination::simple-default') }}
    @endif

    <h2>IP для исключения в Google Ads</h2>
    <div class="card">
        @if($blockedIps->isEmpty())
            <p class="muted" style="margin:0">Пока пусто. Откройте подозрительное устройство и нажмите «Заблокировать», его IP появятся здесь.</p>
        @else
            <p class="muted" style="margin-top:0">
                {{ $blockedIps->count() }} IP с {{ $blocked->count() }} заблокированных устройств.
                Google Ads → Кампания → Настройки → Исключения IP-адресов (не больше 500 на кампанию).
                Мобильные IP часто общие для многих абонентов оператора, их исключение может отрезать и живых клиентов.
            </p>
            <textarea id="ips" rows="6" readonly>{{ $blockedIps->implode("\n") }}</textarea>
            <p style="margin-bottom:0"><button type="button" onclick="navigator.clipboard.writeText(document.getElementById('ips').value).then(() => this.textContent = 'Скопировано')">Скопировать IP</button></p>
        @endif
    </div>
@endsection

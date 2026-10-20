@extends('visits.layout')

@php
    $first = $visits->last();
    $ips = $visits->pluck('ip')->unique()->values();
@endphp

@section('title', 'Устройство ' . substr($fingerprint, 0, 10))

@section('content')
    <p><a href="{{ route('visits.index') }}">← Журнал</a></p>
    <div class="top">
        <h1>Устройство <span class="fp">{{ substr($fingerprint, 0, 10) }}</span>
            @if($device->blocked)<span class="tag grey">заблокировано</span>@endif
        </h1>
    </div>

    <div class="card">
        <div class="grid">
            <div class="stat"><span class="muted">Платных кликов</span><b>{{ $visits->where('is_paid', true)->count() }}</b></div>
            <div class="stat"><span class="muted">Всего сессий</span><b>{{ $visits->count() }}</b></div>
            <div class="stat"><span class="muted">Разных дней</span><b>{{ $visits->map(fn ($v) => $v->created_at->toDateString())->unique()->count() }}</b></div>
            <div class="stat"><span class="muted">Разных IP</span><b>{{ $ips->count() }}</b></div>
            <div class="stat"><span class="muted">Ср. время на сайте</span><b>{{ \App\Models\Visit::formatDuration($visits->avg('duration_sec')) }}</b></div>
            <div class="stat"><span class="muted">Сессий с нажатиями</span><b>{{ $visits->filter->hasAction()->count() }}</b></div>
        </div>
        <p class="muted" style="margin-bottom:0">
            {{ $first->device_type }} · {{ $first->os }} · {{ $first->browser }} · экран {{ $first->screen }} · {{ $first->language }} · {{ $first->timezone }}<br>
            Первый заход: {{ $first->created_at->format('d.m.Y H:i') }}<br>
            <span class="fp">{{ $first->user_agent }}</span>
        </p>
    </div>

    <div class="card">
        <form method="post" action="{{ route('visits.device.update', $fingerprint) }}">
            @csrf
            <p style="margin-top:0"><input type="text" name="note" value="{{ $device->note }}" placeholder="Заметка (например: конкурент, бот)" maxlength="500"></p>
            <input type="hidden" name="blocked" value="{{ $device->blocked ? 0 : 1 }}">
            @if($device->blocked)
                <button class="ghost">Разблокировать</button>
            @else
                <button class="danger">Заблокировать (добавить IP в список для Google Ads)</button>
            @endif
        </form>
    </div>

    <h2>IP-адреса ({{ $ips->count() }})</h2>
    <div class="card">
        @foreach($ips as $ip)
            <div style="margin-bottom:6px">@include('visits._ip')</div>
        @endforeach
    </div>

    <h2>Заходы</h2>
    <div class="tbl-wrap">
        <table>
            <thead>
            <tr>
                <th>Время</th>
                <th>IP</th>
                <th>Страница входа</th>
                <th>Источник</th>
                <th class="num">На сайте</th>
                <th class="num">Прокрутка</th>
                <th class="num">Страниц</th>
                <th>Нажатия</th>
            </tr>
            </thead>
            <tbody>
            @foreach($visits as $visit)
                @include('visits._visit-row', ['showDevice' => false])
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

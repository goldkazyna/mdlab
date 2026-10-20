{{-- Строка таблицы заходов; $showDevice — показывать колонку устройства --}}
@php($ip = $visit->ip)
<tr class="{{ ($blocked ?? collect())->contains($visit->fingerprint) ? 'blocked' : '' }}">
    <td>{{ $visit->created_at->format('d.m H:i:s') }}</td>
    <td>@include('visits._ip')</td>
    @if($showDevice)
        <td>
            <a class="fp" href="{{ route('visits.device', $visit->fingerprint) }}">{{ substr($visit->fingerprint, 0, 10) }}</a>
            <div class="muted">{{ $visit->device_type }} · {{ $visit->os }} · {{ $visit->browser }} · {{ $visit->screen }}</div>
        </td>
    @endif
    <td class="wrapcell">{{ $visit->landingPath() }}</td>
    <td class="wrapcell">
        @if($visit->is_paid)<span class="tag">реклама</span>@endif
        {{ $visit->utm_campaign }}
        @if($visit->utm_term)<div class="muted">ключ: {{ $visit->utm_term }}</div>@endif
        @if(!$visit->is_paid && $visit->referrer)<span class="muted">{{ parse_url($visit->referrer, PHP_URL_HOST) }}</span>@endif
    </td>
    <td class="num">{{ \App\Models\Visit::formatDuration($visit->duration_sec) }}</td>
    <td class="num">{{ $visit->max_scroll }}%</td>
    <td class="num">{{ $visit->pages }}</td>
    <td>@include('visits._actions')</td>
</tr>

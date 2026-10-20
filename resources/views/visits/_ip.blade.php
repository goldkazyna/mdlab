{{-- IP с геоданными и пометками прокси/хостинга --}}
@php($info = $ipInfo[$ip] ?? null)
<span class="fp">{{ $ip }}</span>
@if($info)
    <span class="muted">{{ $info->country }}{{ $info->city ? ', ' . $info->city : '' }}</span>
    @if($info->is_hosting)<span class="tag bad" title="IP дата-центра или хостинга: живые люди так обычно не заходят">хостинг</span>@endif
    @if($info->is_proxy)<span class="tag bad" title="VPN / прокси">VPN</span>@endif
    @if($info->isp)<div class="muted">{{ $info->isp }}</div>@endif
@endif

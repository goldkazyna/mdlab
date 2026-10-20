@if($visit->clicked_phone)<span class="tag ok">звонок</span>@endif
@if($visit->clicked_whatsapp)<span class="tag ok">WhatsApp</span>@endif
@if($visit->clicked_telegram)<span class="tag ok">Telegram</span>@endif
@if($visit->submitted_form)<span class="tag ok">форма</span>@endif
@unless($visit->hasAction())<span class="muted">—</span>@endunless

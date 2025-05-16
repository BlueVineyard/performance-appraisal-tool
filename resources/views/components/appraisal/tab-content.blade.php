@props([
'id' => '',
'isActive' => false
])

<div class="tab-content {{ !$isActive ? 'hidden' : '' }} flex flex-col gap-12" id="{{ $id }}">
    {{ $slot }}
</div>
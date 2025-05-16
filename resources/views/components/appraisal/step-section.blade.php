@props([
'step' => 'first',
'isVisible' => true,
'section' => 's1'
])

<div class="{{ $step }}_step {{ !$isVisible ? 'hidden' : '' }} flex flex-col gap-12">
    {{ $slot }}
</div>
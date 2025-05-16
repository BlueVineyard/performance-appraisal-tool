@props([
'currentStep' => 1,
'totalSteps' => 3
])

<div class="steps">
    <span class="step_count font-bold text-xl">{{ $currentStep }} of {{ $totalSteps }}</span>
    @for ($i = 1; $i <= $totalSteps; $i++) <span
        class="step step_{{ $i }} {{ $i < $currentStep ? 'completed' : ($i == $currentStep ? 'active' : '') }}"></span>
        @endfor
</div>
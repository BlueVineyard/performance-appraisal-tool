@props([
'name' => '',
'section' => 's1',
'question' => 'q1'
])

<div class="rate-wrapper">
    <div class="progress-line">
        <div class="progress-fill"></div>
    </div>
    <div class="rate">
        @for ($i = 10; $i >= 1; $i--)
        <input type="radio" id="{{ $section }}_{{ $question }}_star{{ $i }}" name="{{ $name }}" value="{{ $i }}" />
        <label for="{{ $section }}_{{ $question }}_star{{ $i }}" data-value="{{ $i }}"></label>
        @endfor
    </div>
</div>
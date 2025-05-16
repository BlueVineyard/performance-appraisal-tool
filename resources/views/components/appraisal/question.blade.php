@props([
'question' => '',
'questionNumber' => '1.1',
'section' => 's1',
'tooltipContent' => 'A top aligned tooltip.'
])

<div class="form-group question-block" data-question="{{ $questionNumber }}">
    <div class="pat_label leading-relaxed text-sm">
        {{ $question }}
        <x-appraisal.tooltip :content="$tooltipContent" />
    </div>

    <x-appraisal.rating :name="$section . '_q' . substr($questionNumber, strpos($questionNumber, '.') + 1) . '_rating'"
        :section="$section" :question="'q' . substr($questionNumber, strpos($questionNumber, '.') + 1)" />

    <input type="text" class="pat_input" placeholder="Optional Comment..." />
</div>
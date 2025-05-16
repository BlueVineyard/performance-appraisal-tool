@props([
'showPrev' => true,
'showNext' => true,
'showSubmit' => false
])

<div class="step-buttons flex justify-between gap-4">
    <button type="button"
        class="prev-step {{ !$showPrev ? 'hidden' : '' }} bg-primary text-white px-6 py-2 rounded cursor-pointer">
        Back
    </button>
    <button type="button"
        class="next-step {{ !$showNext ? 'hidden' : '' }} bg-primary text-white px-6 py-2 rounded cursor-pointer">
        Next
    </button>
    <button type="submit"
        class="submit-form {{ !$showSubmit ? 'hidden' : '' }} bg-primary text-white px-6 py-2 rounded cursor-pointer">
        Submit
    </button>
</div>
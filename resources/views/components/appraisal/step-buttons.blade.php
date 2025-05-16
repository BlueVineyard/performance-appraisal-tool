@props([
'showPrev' => true,
'showNext' => true,
'showSubmit' => false
])

<div class="step-buttons flex flex-col sm:flex-row justify-between gap-3 sm:gap-4">
    <button type="button"
        class="prev-step {{ !$showPrev ? 'hidden' : '' }} bg-primary text-white px-6 py-2 rounded cursor-pointer w-full sm:w-auto">
        Back
    </button>
    <button type="button"
        class="next-step {{ !$showNext ? 'hidden' : '' }} bg-primary text-white px-6 py-2 rounded cursor-pointer w-full sm:w-auto">
        Next
    </button>
    <button type="submit"
        class="submit-form {{ !$showSubmit ? 'hidden' : '' }} bg-primary text-white px-6 py-2 rounded cursor-pointer w-full sm:w-auto">
        Submit
    </button>
</div>
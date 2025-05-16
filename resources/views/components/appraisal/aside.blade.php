@props([
'step' => 'first',
'title' => '',
'description' => '',
'isVisible' => true,
'bgPosition' => '37%_top'
])

<aside
    class="{{ $step }}_step_aside {{ !$isVisible ? 'hidden' : '' }} py-10 lg:pt-[90px] px-6 md:px-9 w-full bg-[url('https://bluevineyard.github.io/performance-appraisal-tool-HTML/assets/images/CPP.webp')] bg-cover bg-position-[{{ $bgPosition }}] relative lg:h-full lg:max-w-[439px] lg:absolute lg:top-0 lg:left-0 before:content-[''] before:bg-linear-[182.3deg,#00000075_6%,#00000000_94%] before:w-full before:h-full before:absolute before:top-0 before:left-0">
    <h2 class="mb-5 relative text-white">
        {{ $title }}
    </h2>
    <p class="relative text-white">
        {{ $description }}
    </p>
</aside>
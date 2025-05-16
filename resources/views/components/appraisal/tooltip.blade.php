@props([
'content' => 'A top aligned tooltip.'
])

<span class="relative inline-block align-text-bottom group">
    <img src="https://bluevineyard.github.io/performance-appraisal-tool-HTML/assets/icons/info.svg" alt="Info"
        class="inline w-4 h-4 cursor-pointer" />
    <div
        class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 hidden group-hover:flex flex-col items-center">
        <span class="relative z-10 p-2 text-xs leading-none text-white whitespace-nowrap bg-black shadow-lg">
            {{ $content }}
        </span>
        <div class="w-3 h-3 rotate-45 bg-black -mt-2"></div>
    </div>
</span>
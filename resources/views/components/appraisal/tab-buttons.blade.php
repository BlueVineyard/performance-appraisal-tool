@props([
'tabs' => [
['id' => 'CPP', 'title' => 'Commitment to Professional Practice'],
['id' => 'CPB', 'title' => 'Commitment to Professional Behaviour'],
['id' => 'CM', 'title' => 'Commitment to Mission']
]
])

<div class="flex flex-col sm:flex-row justify-center gap-2 sm:gap-3 mb-8" id="tabs">
    @foreach($tabs as $tab)
    <button
        class="tab-btn px-[14px] py-[10px] rounded-lg font-medium text-[#262626] text-sm hover:text-primary hover:bg-[#FAFAFA] cursor-pointer text-center"
        data-tab="{{ $tab['id'] }}">
        {{ $tab['title'] }}
    </button>
    @endforeach
</div>
@props(['trigger'])
<div x-data="{show:false}" @mouseover.away="show = false">
    {{-- trigger --}}
    <div @mouseover="show = ! show" class="inline-grid items-center grid-flow-col cursor-pointer text-primary px-6 py-2 hover:text-white hover:bg-primary focus:text-white focus:bg-primary">
        {{ $trigger }}
        <x-icons x-show="show" name="up-arrow"></x-icon>
        <x-icons x-show="!show" name="down-arrow"></x-icon>
    </div>
    {{-- links --}}
    <div x-show="show" @mouseover="show = show" class="absolute z-10" style="display:none">
        {{ $slot }}
    </div>
</div>
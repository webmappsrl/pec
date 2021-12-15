@props(['trigger'])

<div @mouseover.away="open = false" class="relative" x-data="{ open: false }">
    <button @mouseover="open = !open" :class="{'text-white bg-primary': open, 'text-primary bg-white': !open}" class="inline-grid items-center grid-flow-col cursor-pointer text-primary px-6 py-2 hover:text-white hover:bg-primary">
      {{ $trigger }}
      <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="pointer-events-none inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </button>
    <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute w-full origin-top-right shadow-lg z-10" style="display:none">
      <div class="shadow dark-mode:bg-gray-800">
        {{ $slot }}
      </div>
    </div>
</div>
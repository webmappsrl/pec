@props(['source','active'])
<div
    class="bg-black absolute mx-auto bg-cover bg-center bg-no-repeat"
    style="width: 100%;height: 450px; background-image:url('{{ $source }}');"
    x-show="{{$active}}"
    x-transition:enter="transition duration-1000"
    x-transition:enter-start="opacity-0 transform scale-100"
    x-transition:enter-end="opacity-100 transform scale-100"
    x-transition:leave="transition ease-in duration-1000"
    x-transition:leave-start="opacity-100 transform scale-100"
    x-transition:leave-end="opacity-0 transform scale-100"
>
</div>
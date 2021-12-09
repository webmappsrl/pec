<header>
    <div class="bg-primary px-4 py-2 text-right">
        <div class="max-w-screen-xl m-auto">
            <a class="text-white text-sm hover:underline" target="_blank" href="parchiemiliacentrale.it">Parchi Emilia Centrale</a>
        </div>
    </div>
    <div class="px-4 py-4">
        <div class="max-w-screen-xl m-auto grid grid-cols-4">
            <div class="col-span-2"><img src="{{asset('images/logo-pec.png')}}" alt="webmapp logo" class=""></div>
            <div class="col-span-1 self-center justify-self-end">
                <div class="rounded-md border border-black-500 p-2 grid-flow-col inline-grid ">
                    <img src="{{asset('images/lent.png')}}" alt="search icon" class="cursor-pointer px-2 py-1"><input type="text" placeholder="Cerca nel sito" class="focus:outline-none pl-4">
                </div>
            </div>
            <div class="col-span-1 text-right">
                <div class="grid-flow-col inline-grid gap-6 h-full items-center">
                    <p class="m-0">Seguici su</p>  
                    <a href="#"><img src="{{asset('images/f.png')}}" alt="facebook logo" class=""></a>
                    <a href="#"><img src="{{asset('images/y.png')}}" alt="youtube logo" class=""></a>
                </div>
            </div>
        </div>
    </div>
    <div class="px-4 py-2">
        <div class="max-w-screen-xl m-auto pec-menu-items">
            <x-dropdown>
                <x-slot name="trigger">
                    <x-dropdown-button>I parchi</x-dropdown-button>
                </x-slot>
                <x-dropdown-item href="#1">Parco del Frignano</x-dropdown-item>
                <x-dropdown-item href="#2">Parco dei Sassi di Roccamalatina</x-dropdown-item>
                <x-dropdown-item href="#3">Riserva Fontanili di Corte Valle Re</x-dropdown-item>
                <x-dropdown-item href="#4">Riserva Salse di Nirano</x-dropdown-item>
                <x-dropdown-item href="#5">Riserva Sassoguidano</x-dropdown-item>
                <x-dropdown-item href="#6">Riserva Cassa di espansione del fiume Secchia</x-dropdown-item>
                <x-dropdown-item href="#7">Riserva Rupe di Campotrera</x-dropdown-item>
                <x-dropdown-item href="#8">Paesaggio Protetto Collina Reggiana - Terre di Matilde</x-dropdown-item>
            </x-dropdown>
            <x-dropdown>
                <x-slot name="trigger">
                    <x-dropdown-button>Attività</x-dropdown-button>
                </x-slot>
                <x-dropdown-item href="#1">Itinerari a piedi</x-dropdown-item>
                <x-dropdown-item href="#2">Itinerari in bicicletta</x-dropdown-item>
            </x-dropdown>
            <x-dropdown>
                <x-slot name="trigger">
                    <x-dropdown-button>Percorsi tematici</x-dropdown-button>
                </x-slot>
                <x-dropdown-item href="#1">Escursionismo</x-dropdown-item>
                <x-dropdown-item href="#2">Itinerari consogliati nelle Aree Protette</x-dropdown-item>
                <x-dropdown-item href="#3">Itinerari Storici</x-dropdown-item>
                <x-dropdown-item href="#4">Itinerari in crinale</x-dropdown-item>
                <x-dropdown-item href="#5">Itinerari a tappe</x-dropdown-item>
                <x-dropdown-item href="#6">Ciclovie dei Parchi</x-dropdown-item>
                <x-dropdown-item href="#7">Percosi Natura in bicicletta</x-dropdown-item>
            </x-dropdown>
            <a href="#mappe" class="text-right inline-grid items-center grid-flow-col cursor-pointer text-primary py-2 hover:underline focus:underline" ><p>Mappe interattive</p></a>
        </div>
    </div>
</header>
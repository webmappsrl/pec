<header>
    <div class="bg-primary px-4 py-2 text-right">
        <div class="max-w-screen-xl m-auto">
            <a class="text-white text-sm hover:underline" target="_blank" href="http://www.parchiemiliacentrale.it/">Parchi Emilia Centrale</a>
        </div>
    </div>
    <div class="px-4 py-4">
        <div class="max-w-screen-xl m-auto grid grid-cols-4">
            <div class="col-span-2"><a href="/"><img class="inline" src="{{asset('images/logo-pec.png')}}" alt="pec logo" class=""></a></div>
            <div class="col-span-1 self-center justify-self-end">
                <div 
                x-data="{
                    value : '{{request('search')}}',
                    focused : false,
                }" 
                class="rounded-md p-2 grid-flow-col inline-grid duration-150 transition-all" :style="'border: ' + (focused ? '3px solid #37B39F' : '1px solid #D9DBDA')">
                    <form action="/search" method="get"  class="inline-flex m-0">
                        <button type="submit"><img src="{{asset('images/lent.png')}}" alt="search icon" class="cursor-pointer px-2 py-1"></button>
                        <input 
                            type="text" name="search" placeholder="Cerca nel sito" class="focus:outline-none pl-4" x-model="value" 
                            :value="value"
                            @click="$nextTick(()=>{focused = true})" 
                            @click.away="focused = false"
                        >
                        <div class="w-9"><img src="{{asset('images/deleteButton.png')}}" style="display:none;" alt="clear input" class="cursor-pointer px-2 py-1" x-show="value" @click="value = ''"></div>
                    </form>
                </div> 
            </div>
            <div class="col-span-1 text-right">
                <div class="grid-flow-col inline-grid gap-6 h-full items-center">
                    <p class="m-0">Seguici su</p>  
                    <a href="https://www.facebook.com/parchiemiliacentrale/" target="_blank"><img src="{{asset('images/f.png')}}" alt="facebook logo" class=""></a>
                    <a href="https://www.youtube.com/channel/UCqRVZPA9NFEPBHMKvFGZmEQ" target="_blank"><img src="{{asset('images/y.png')}}" alt="youtube logo" class=""></a>
                </div>
            </div>
        </div>
    </div>
    <div class="px-4 py-2 md:px-0 md:py-0">
        
        {{-- pec-menu-items --}}
        <div x-data="{ open: false }" class="max-w-screen-xl m-auto">

            <div class="p-4 flex flex-row items-center justify-between md:hidden">
                <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                    <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <nav :class="{'flex': open, 'hidden': !open}" class="pb-4 md:pb-0 hidden pec-menu-items">
                <x-dropdown>
                    
                    <x-slot name="trigger">
                        <x-dropdown-button>I parchi</x-dropdown-button>
                    </x-slot>
                    <x-dropdown-item href="/taxonomy/parco-frignano">Parco del Frignano</x-dropdown-item>
                    <x-dropdown-item href="/taxonomy/parco-sassi-roccamalatina">Parco dei Sassi di Roccamalatina</x-dropdown-item>
                    <x-dropdown-item href="/taxonomy/riserva-naturale-fontanili-corte-valle-re">Riserva Fontanili di Corte Valle Re</x-dropdown-item>
                    <x-dropdown-item href="/taxonomy/riserva-naturale-salse-nirano">Riserva Salse di Nirano</x-dropdown-item>
                    <x-dropdown-item href="/taxonomy/riserva-naturale-sassoguidano">Riserva Sassoguidano</x-dropdown-item>
                    <x-dropdown-item href="/taxonomy/riserva-naturale-cassa-espansione-fiume-secchia">Riserva Cassa di espansione del fiume Secchia</x-dropdown-item>
                    <x-dropdown-item href="/taxonomy/riserva-naturale-rupe-campotrera">Riserva Rupe di Campotrera</x-dropdown-item>
                    <x-dropdown-item href="/taxonomy/paesaggio-protetto-collina-reggiana-terre-di-matilde">Paesaggio Protetto Collina Reggiana - Terre di Matilde</x-dropdown-item>
                </x-dropdown>
                <x-dropdown>
                    <x-slot name="trigger">
                        <x-dropdown-button>Attività</x-dropdown-button>
                    </x-slot>
                    <x-dropdown-item href="/taxonomy/hiking">Itinerari a piedi</x-dropdown-item>
                    <x-dropdown-item href="/taxonomy/cycling">Itinerari in bicicletta</x-dropdown-item>
                </x-dropdown>
                <x-dropdown>
                    <x-slot name="trigger">
                        <x-dropdown-button>Percorsi tematici</x-dropdown-button>
                    </x-slot>
                    <x-dropdown-item href="/taxonomy/recommended-route">Itinerari consogliati nelle Aree Protette</x-dropdown-item>
                    <x-dropdown-item href="/taxonomy/historical-route">Itinerari Storici</x-dropdown-item>
                    <x-dropdown-item href="/taxonomy/ridge-route">Itinerari in crinale</x-dropdown-item>
                    <x-dropdown-item href="/taxonomy/route-in-stages">Itinerari a tappe</x-dropdown-item>
                    <x-dropdown-item href="/taxonomy/cycle-route">Ciclovie dei Parchi</x-dropdown-item>
                    <x-dropdown-item href="/taxonomy/">Percosi Natura in bicicletta</x-dropdown-item>
                </x-dropdown>
                <a href="https://4.app.geohub.webmapp.it/" target="_blank" class="text-right inline-grid items-center grid-flow-col cursor-pointer text-primary px-6 py-2 hover:text-white hover:bg-primary"><p class="font-bold">Mappa interattiva</p></a>
            </nav>
        </div>
    </div>
</header>
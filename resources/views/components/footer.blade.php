<footer>
    <img class="w-full m-0" src="{{asset('images/footer.png')}}" alt="footer pec image" class="">
    <div class="px-4 py-8 bg-primary-light">
        <div class="max-w-screen-xl m-auto grid gap-6 md:gap-0 grid-cols-1 md:grid-cols-3">
            <div class="col-span-2"><a href="/"><img src="{{asset('images/logo-pec-footer.png')}}" alt="pec logo"  class=""></a></div>
            <div class="col-span-1 text-left md:text-right">
                <div class="grid-flow-col inline-grid gap-6 h-full items-center">
                    <p class="m-0 uppercase">Seguici su</p>  
                    <a href="https://www.facebook.com/parchiemiliacentrale/" target="_blank"><img src="{{asset('images/f.png')}}" alt="facebook logo" class=""></a>
                    <a href="https://www.youtube.com/channel/UCqRVZPA9NFEPBHMKvFGZmEQ" target="_blank"><img src="{{asset('images/y.png')}}" alt="youtube logo" class=""></a>
                </div>
            </div>
        </div>
        <div class="max-w-screen-xl m-auto grid md:grid-cols-2 border-t border-primary-border mt-6 pt-6">
            <div class="md:col-span-1">
                <p class="m-0 uppercase pb-4 text-sm">Contatti</p>  
                <div class="flex pb-2">
                    <x-icon-pa class="mr-2" width="20" height="18"/><p class="text-xs">Sede legale: Viale Martiri della Libertà 34 – 41121 Modena<br>C.F. 94164020367 • Part. IVA 03435780360</p>
                </div>
                {{-- <div class="flex pb-2">
                    <x-icon-phone class="mr-2" width="20" height="20"/><p class="text-xs">tel <a href="tel:059 209311">059 209311</a> • cell <a href="tel:348 5219711">348 5219711</a> • fax <a href="tel:059 209803">059 209803</a></p>
                </div> --}}
                <div class="flex pb-2 items-center">
                    <x-icon-mail class="mr-2" width="20" height="16"/><p class="text-xs"><a href="mailto:info@parchiemiliacentrale.it">info@parchiemiliacentrale.it</a></p>
                </div>
            </div>
            <div class="md:col-span-1 flex md:justify-end flex-wrap">
                <img src="{{asset('images/loghi-footer-up.png')}}" alt="loghi collaborazione footer"  class="hidden md:block">
                <img src="{{asset('images/Loghi_AAPP_EPEC_tutti.png')}}" alt="loghi AAPP EPEC footer"  class="hidden md:block">
                <img src="{{asset('images/loghi-footer-up-mobile.png')}}" alt="loghi footer AAPP"  class="block md:hidden">
                <img src="{{asset('images/Loghi_AAPP_EPEC_tutti_mobile.png')}}" alt="loghi footer AAPP"  class="block md:hidden">
            </div>
        </div>
        <div class="max-w-screen-xl m-auto grid border-t border-primary-border mt-6 pt-6">
            <p class="m-0 uppercase pb-4 text-sm">AVVERTENZA:</p>  
            <p class="m-0 pb-4 text-xs">Gli itinerari proposti in questo sito sono organizzati sulla base della Rete Escursionistica dell’Emilia Romagna (REER) e ideati dall’Ente Parchi Emilia Centrale o da altri enti o associazioni che li hanno proposti. Gli itinerari di più giorni, a tappe o tematici, fanno capo ad associazioni che ne curano la percorribilità e la riconoscibilità sul territorio; i contatti ed il sito web di ogni cammino sono riportati nella scheda. La Rete Escursionistica “base” corrisponde al catasto dei sentieri della Regione Emilia Romagna (REER) riportata al link <a href='https://servizimoka.regione.emilia-romagna.it/mokaApp/apps/REER/index.html' target="_blank"> www.servizimoka.regione.emilia-romagna.it </a> ed aggiornata attraverso il confronto con: le sezioni CAI di Modena, Reggio Emilia, Pavullo nel Frignano e Sassuolo, i Comuni montani dell’Unione Distretto Ceramico, i Comuni di Polinago e Serramazzoni e altri soggetti promotori e gestori dei sentieri. Nel caso in cui si riscontrino errori nelle descrizioni o nelle tracce di sentieri o itinerari, oppure si verifichino problemi sulla percorribilità si prega di inviare una comunicazione all’e-mail: <a href="mailto:itinerari@parchiemiliacentrale.it">itinerari@parchiemiliacentrale.it</a>. La stessa e-mail può essere utilizzata per proporre nuovi itinerari nell’ambito delle province di Modena e Reggio Emilia.
                </p>  
            
        </div>
    </div>
    <div class="bg-primary-dark px-4 py-4">
        <div class="max-w-screen-xl m-auto">
            <a href="https://www.iubenda.com/privacy-policy/80094272" class="text-primary font-bold text-sm hover:underline iubenda-noiframe iubenda-noiframe " title="Privacy Policy ">Privacy Policy</a><script type="text/javascript">(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src="https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);</script>
            {{-- <span class="mx-8"></span>
            <a class="text-primary font-bold text-sm hover:underline" target="_blank" href="parchiemiliacentrale.it">Note Legali</a> --}}
        </div>
    </div>
    <div class="text-left md:text-center text-sm py-4 px-4">
        @php echo date('Y') @endphp © Parchi Emilia Centrale - Tutti i diritti riservati
    </div>
</footer>
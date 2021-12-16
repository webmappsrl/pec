<footer>
    <img class="w-full m-0" src="{{asset('images/footer.png')}}" alt="footer pec image" class="">
    <div class="px-4 py-8 bg-primary-light">
        <div class="max-w-screen-xl m-auto grid grid-cols-3">
            <div class="col-span-2"><img src="{{asset('images/logo-pec-footer.png')}}" alt="pec logo"  class=""></div>
            <div class="col-span-1 text-right">
                <div class="grid-flow-col inline-grid gap-6 h-full items-center">
                    <p class="m-0 uppercase">Seguici su</p>  
                    <a href="#"><img src="{{asset('images/f.png')}}" alt="facebook logo" class=""></a>
                    <a href="#"><img src="{{asset('images/y.png')}}" alt="youtube logo" class=""></a>
                </div>
            </div>
        </div>
        <div class="max-w-screen-xl m-auto grid grid-cols-2 border-t border-primary-border mt-6 pt-6">
            <div class="col-span-1">
                <p class="m-0 uppercase pb-4 text-sm">Contatti</p>  
                <div class="flex pb-2">
                    <x-icon-pa class="mr-2" width="20" height="18"/><p class="text-xs">Sede legale: Viale Martiri della Libertà 34 – 41121 Modena<br>C.F. 94164020367 • Part. IVA 03435780360</p>
                </div>
                <div class="flex pb-2">
                    <x-icon-phone class="mr-2" width="20" height="20"/><p class="text-xs">tel <a href="tel:059 209311">059 209311</a> • cell <a href="tel:348 5219711">348 5219711</a> • fax <a href="tel:059 209803">059 209803</a></p>
                </div>
                <div class="flex pb-2">
                    <x-icon-mail class="mr-2" width="20" height="16"/><p class="text-xs"><a href="mailto:info@parchiemiliacentrale.it">info@parchiemiliacentrale.it</a> • <a href="mailto:protocollo@pec.parchiemiliacentrale.it">protocollo@pec.parchiemiliacentrale.it</a></p>
                </div>
            </div>
            <div class="col-span-1 flex justify-end">
                <img src="{{asset('images/loghi-footer.png')}}" alt="loghi collaborazione footer"  class="">
            </div>
        </div>
    </div>
    <div class="bg-primary-dark px-4 py-4">
        <div class="max-w-screen-xl m-auto">
            <a class="text-primary font-bold text-sm hover:underline" target="_blank" href="parchiemiliacentrale.it">Privacy Policy</a>
            <span class="mx-8"></span>
            <a class="text-primary font-bold text-sm hover:underline" target="_blank" href="parchiemiliacentrale.it">Note Legali</a>
        </div>
    </div>
    <div class="text-center text-sm py-2">
        @php echo date('Y') @endphp © Parchi Emilia Centrale - Tutti i diritti riservati
    </div>
</footer>
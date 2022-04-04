<div
    class="relative"
    x-data="{
                active: 1,
                loop() {
                    setInterval(() => { this.active = this.active === 4 ? 1 : this.active+1 }, 5000)
                },
            }"
    x-init="loop"
>
    <div
    style="width: 100%; height: 457px"
    class="flex overflow-x-hidden relative"
    >
          <x-home.banner-slide source="{{asset('images/banner-1.png')}}" active="active == 1"></x-banner-slide>
          <x-home.banner-slide source="{{asset('images/banner-2.png')}}" active="active == 2"></x-banner-slide>
          <x-home.banner-slide source="{{asset('images/banner-3.png')}}" active="active == 3"></x-banner-slide>
          <x-home.banner-slide source="{{asset('images/banner-4.png')}}" active="active == 4"></x-banner-slide>
            
            
          <div class="absolute bottom-1 md:bottom-10 w-full">
              <div class="max-w-screen-xl m-auto px-0 md:px-4">
                  <h1 class="py-6 px-6 md:py-4 md:px-8 bg-white bg-opacity-70 md:rounded-xl max-w-3xl text-primary text-2xl md:text-4xl font-bold md:font-extrabold">Scopri i percorsi tematici e i luoghi di interesse delle Aree protette dell'Emilia Centrale</h1>
              </div>
          </div>
    </div>
</div>
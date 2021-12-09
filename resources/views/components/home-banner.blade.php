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
          <x-home-banner-slide source="{{asset('images/banner-1.png')}}" active="active == 1"></x-home-banner-slide>
          <x-home-banner-slide source="{{asset('images/banner-2.png')}}" active="active == 2"></x-home-banner-slide>
          <x-home-banner-slide source="{{asset('images/banner-3.png')}}" active="active == 3"></x-home-banner-slide>
          <x-home-banner-slide source="{{asset('images/banner-4.png')}}" active="active == 4"></x-home-banner-slide>
            
            
          <div class="absolute bottom-10 w-full">
              <div class="max-w-screen-xl m-auto">
                  <p class="py-4 px-8 bg-white bg-opacity-70 rounded-xl max-w-3xl w-max text-primary text-4xl font-extrabold">Scopri i percorsi tematici e i luoghi di interesse dei parchi</p>
              </div>
          </div>
    </div>
</div>
@props(['features'])

<div class="bg-primary-light">
    <div class="max-w-screen-xl m-auto py-12 px-4">
        <h2>Cosa vedere</h2>
        <div class="swiper poiHighlightSwiper">
            <div class="absolute inset-y-0 left-0 z-10 flex items-center">
                <button @click="poiHighlightSwiper.slidePrev()"
                    class="-ml-4 lg:-ml-8 flex justify-start items-center w-10 h-10 rounded-full focus:outline-none">
                    <svg viewBox="0 0 14 21" fill="currentColor" class="bi bi-chevron-left w-8 h-8">
                        <path fill-rule="evenodd"
                            d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="swiper-wrapper">


                <!-- Slides -->
                @foreach($features as $feature)
                    <x-poi-card :feature="$feature" />
                @endforeach



            </div>
            <div class="absolute inset-y-0 right-0 z-10 flex items-center">
                <button @click="poiHighlightSwiper.slideNext()"
                    class="-mr-4 lg:-mr-8 flex justify-end items-center w-10 h-10 rounded-full focus:outline-none">
                    <svg viewBox="0 0 14 21" fill="currentColor" class="bi bi-chevron-right w-8 h-8">
                        <path fill-rule="evenodd"
                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>

        </div>
    </div>
</div>

<script>
    var poiHighlightSwiper = new Swiper(".poiHighlightSwiper", {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 0,

        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 0,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 0,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 0,
            }
        },
    });

</script>

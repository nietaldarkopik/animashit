@php
    $sliders = \App\Models\SliderModel::where('status', '=', 1)->get();
    $gigs = \App\Models\GigModel::orderBy('sort', 'ASC')->get();
    $pages = \App\Models\PageModel::where('status','=','publish')->orderBy('sort', 'ASC')->get();
@endphp
<div class="container-fluid container-main d-flex">
    <div class="row z-1">
        <div class="col-12 p-0 my-auto">
            <div class="home-owlcarousel-nav-container owlcarousel-nav-container owl-nav container-xxxl"></div>
            {{-- <div class="home-owlcarousel-dot-container owlcarousel-dot-container owl-dots container-xxxl"></div> --}}
        </div>
    </div>

    <div class="video-foreground z-0">

        <div class="home-owl-carousel owl-carousel owl-theme z-3">
            @foreach($sliders as $i => $slider)
            <div class="item vw-100 vh-100 d-block justify-content-center">
                <div class="row d-flex h-100 justify-content-center align-items-center container-xxxl z-2 overlay-content">
                    <div class="col-lg-6 offset-lg-6x p-5">
                        <div class="w-100 p-5 overflow-y-auto mix-blend-difference-container text-black anim-text-shadow anim-stroke-dark" style="max-height: 80vh;">
                            {!! $slider->description !!}
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-6x p-5">
                        <span class="mix-blend-difference mix-blend-difference-container anim-text-shadow anim-stroke-dark owlcarousel-subtitle">{{ $slider->subtitle}}</span>
                        <h1 class="mix-blend-difference mix-blend-difference-container anim-text-shadow anim-stroke-dark owlcarousel-title">{{ $slider->title }}</h1>
                    </div>
                </div>
                <div class="w-100 h-100 overlay-content z-1">
                    <div class="overlay overlay1 z-1"></div>
                    {!! $slider->showDisplay($slider->id) !!}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        
        $(".home-owl-carousel").owlCarousel({
            items: 1,
            merge: false,
            loop: true,
            margin: 10,
            video: true,
            lazyLoad: true,
            nav: true,
            navContainer: '.home-owlcarousel-nav-container',
            dotsContainer: '.home-owlcarousel-dot-container',
            navText: ['<span class="fa fa-caret-left"></span>',
                '<span class="fa fa-caret-right"></span>'
            ],
            center: true,
            /*    responsive: {
                    480: {
                        items: 2
                    },
                    600: {
                        items: 4
                    }
                } */
        });
    })
</script>
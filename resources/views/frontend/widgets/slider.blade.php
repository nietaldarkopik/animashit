@php
    $sliders = \App\Models\SliderModel::where('status', '=', 1)->get();
    $gigs = \App\Models\GigModel::orderBy('sort', 'ASC')->get();
@endphp
<div class="container-fluid container-main d-flex">
    <div class="row z-1">
        <div class="col-12 p-0 my-auto">
            <div class="owlcarousel-nav-container owl-nav container-xxxl"></div>
            {{-- <div class="owlcarousel-dot-container owl-dots container-xxxl"></div> --}}
        </div>
    </div>

    <div class="video-foreground z-0">

        <div class="owl-carousel owl-theme z-3">
            <div class="item vw-100 vh-100 d-flex justify-content-center">
                <div class="w-100 h-100 overlay-content justify-content-center flex-row d-flex z-3">
                    <div class="d-flex justify-content-stretch align-items-center container-xxxl">
                        <div class="col-lg-6 offset-lg-6">
                            {{-- <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasStart" role="button"
                                aria-controls="offcanvasStart">
                                Left
                            </a>
                            <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasEnd" role="button"
                                aria-controls="offcanvasEnd">
                                Right
                            </a>
                            <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasBottom" role="button"
                                aria-controls="offcanvasBottom">
                                Bottom
                            </a> --}}
                        </div>
                        <div class="fixed-bottom">
                            <div class="container-fluid">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-12 text-center pb-3">
                                        <a class="ff-oswald text-white text-decoration-none toggle-offcanvas h5" data-bs-toggle="offcanvas" href="#offcanvasBottom" role="button"
                                        aria-controls="offcanvasBottom">Our <strong>Gigs</strong></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="overlay overlay1 z-2"></div>
                <video class="vw-100 vh-100 object-fit-cover" autoplay loop muted>
                    <source src="http://localhost/animashit/public/frontend/animashit/assets/videos/004 denzio.mp4">
                </video>
            </div>
            <div class="item vw-100 vh-100 d-block">
                <div class="overlay overlay1 z-2"></div>
                <video class="vw-100 vh-100 object-fit-cover" autoplay loop muted>
                    <source src="http://localhost/animashit/public/frontend/animashit/assets/videos/004 denzio.mp4">
                </video>
                <div class="w-100 h-100 overlay-content justify-content-center flex-row d-flex">
                    <div class="d-flex justify-content-stretch align-items-center container-xxxl">
                        <div class="col-lg-6 offset-lg-6">
                            <span class="owlcarousel-subtitle">SHAPE YOUR BODY</span>
                            <h1 class="owlcarousel-title">BE STRONG TRAINING HARD</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

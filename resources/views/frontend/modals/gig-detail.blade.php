<div class="row mt-10 fixed-top">
    <div class="col-12">
        <button type="button" class="btn btn-warning position-relative zindex99"
            data-bs-dismiss="modal"
            aria-label="Close"
        >
            <span class="fa fa-arrow-left"></span> Back
        </button>
    </div>
</div>
{{-- <div class="col-12 z-1 top-0 left-0 p-0 fixed-bottom carousel-modal opacity-25 zindex99 d-none">
    \{\{-- <div class="overlay overlay1"></div> --\}\}
    <div id="carouselArtistDetail" class="carousel slide  z-1 top-0 left-0 p-3 p-sm-0"
        data-bs-ride="carousel" data-bs-interval="5">
        \{\{-- <div class="overlay overlay2 ></div> --\}\}
        <div class="carousel-inner m-0 p-0" role="listbox">
            @foreach ($porfolios as $ip => $p)
                @php
                    $m = $p->media->last();
                    $id_media = (isset($m->id))?$m->id:0;
                @endphp
                @if(!empty($m))
                <div class="carousel-item @if ($ip == 0) active @endif">
                    \{\{-- @if (!empty($m) and file_exists(public_path($m->media))) --\}\}
                        \{\{-- <img src="\{\{ url(htmlspecialchars($m->media)) \}\}" class="w-100 d-block min-vw-100 min-vh-100x object-fit-fill" alt="First slide"> --\}\}
                        {!! $m->getDisplay($id_media) !!}
                    \{\{-- @endif --\}\}
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="mix-blend-difference">\{\{ $p->title }}</h3>
                        <p class="mix-blend-difference">\{\{ $p->description }}</p>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </div>
</div> --}}
<div class="row mt-12">
    <div class="col-12 p-0 zindex10 mt-3 container-xxxl overflow-y-auto gig-containergig-container-{{ $gig->id }}">
        <div class="d-flex flex-wrap justify-content-between align-items-start zindex99 align-content-around container-xxxl overflow-y-auto flex-column flex-sm-row px-2">
            <div class="col-12 col-md-6 px-3 text-justify zindex11 flex-wrap mix-blend-difference">
                <h2 class="text-white page-subtitle size3 ff-oswald"></span>
                <h1 class="text-white page-title ff-oswald anim-text-shadow position-relative">
                    <strong class="anim-stroke-light">{!! $gig->title !!}</strong> Gig
                </h1>
                <div class="overflow-auto p-1 page-description text-white" style="max-height: 80dvh;">
                    {!! $gig->description !!}
                </div>
            </div>
            <div class="col-12 col-md-6 px-3 pb-5 zindex10 mb-5 flex-wrap mix-blend-difference">
                <div class="row justify-content-start align-items-start g-1">
                    <div class="col-12 mix-blend-difference">
                        <span class="page-subtitle size3 text-white ff-oswald anim-text-shadow anim-stroke-light fw-bold">{!! $gig->title !!}</span>
                        <span class="page-subtitle size3 text-white ff-oswald anim-text-shadow">Artist</span>
                    </div>
                    <div class="col-12">
                        <div class="owlcarousel-artists owl-carousel owl-theme">
                            @foreach ($gig->gigHeads as $ia => $a)
                                @php
                                    $art = $a->artist;
                                @endphp
                                <div class="item">
                                    <div class="card bg-transparent rounded-0 text-dark h-100 card-artist border-0"
                                        data-id="{{ $art->id }}" data-gig_id="{{ $gig->id }}">

                                        <div class="card-body card-body-img bg-transparent block-border-white">
                                            {{-- <img class="card-img d-none object-fit-cover d-flex h-100" src="{{ (isset($a->media)?url($a->media):'') }}" alt="Title"> --}}
                                            <div class="ratio ratio-16x9">
                                                <img class="card-img object-fit-cover bg-transparent d-flex h-100"
                                                    src="{!! asset(resizeImage('uploads/artists/' . $art->avatar,'thumbnail-500x300',false)) !!}" alt="Title">
                                            </div>
                                        </div>
                                        <div
                                            class="card-img-overlay rounded-0 d-flex block-border-white flex-column justify-content-end p-0 pb-2">
                                            <div class="anime-bg-secondary-trans1 px-1 py-1">
                                                <h4 class="anim-text-shadow card-title size5">
                                                    <span class="ff-delicious-handrawn fw-bold">{{ $art->nickname }}</span>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="owlcarouselartists-nav-container position-absolutex owl-nav z-3 w-100">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="owlcarouselartists-dot-container position-absolutex owl-dots z-3">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-start align-items-start g-1 mt-5 mb-5">
                    <div class="col-12">
                        <span class="page-subtitle size3 ff-oswald anim-text-shadow anim-stroke-light fw-bold">{!! $gig->title !!}</span>
                        <span class="page-subtitle size3 ff-oswald anim-text-shadow">Portfolios</span>
                    </div>
                    <div class="col-12">
                        <div class="owlcarousel-portfolios owl-carousel owl-theme">
                            {{-- @foreach ($gig->portfolios as $ia => $a) --}}
                            @foreach ($portfolios as $ia => $a)
                                @php
                                    $artist = isset($a->profile) ? $a->profile : [];
                                    $client = isset($a->client) ? $a->client : [];
                                    $media = $a->media->where('type', 'image')->first();
                                @endphp
                                <div class="item">
                                    <div class="card bg-transparent border-0 rounded-0 text-dark h-100 card-portfolio"
                                        data-id="{{ $a->id }}" data-gig_id="{{ $gig->gig_id }}">
                                        <div class="card-body card-body-img block-border-white">
                                            {{-- <img class="card-img d-none object-fit-cover d-flex h-100" src="{{ (isset($a->media)?url($a->media):'') }}" alt="Title"> --}}
                                            {!! $a->showDisplay($a->id) !!}
                                        </div>
                                        <div class="card-body d-flex flex-column justify-content-end pb-2">
                                            <h4 class="card-title size5 text-center">
                                                <span class="ff-oswald anim-text-shadow anim-stroke-dark text-light fw-bold">{{ $client->nickname ?? '' }}</span>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="owlcarouselportfolios-nav-container position-absolutex owl-nav z-3 w-100">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="owlcarouselportfolios-dot-container position-absolutex owl-dots z-3 d-none">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $(".owlcarousel-artists").owlCarousel({
            items: 6,
            merge: false,
            loop: 0,
            margin: 10,
            video: true,
            lazyLoad: true,
            nav: true,
            navContainer: '.owlcarouselartists-nav-container',
            dotsContainer: '.owlcarouselartists-dot-container',
            navText: ['<span class="fa fa-caret-left"></span>',
                '<span class="fa fa-caret-right"></span>'
            ],
            center: false,
            responsive: {
                0: {
                    items: 2
                },
                576: {
                    items: 2
                },
                768: {
                    items: 2
                },
                992: {
                    items: 3
                },
                1200: {
                    items: 4
                },
                1400: {
                    items: 4
                },
            }
        });
        $(".owlcarousel-portfolios").owlCarousel({
            items: 6,
            merge: false,
            loop: 0,
            margin: 10,
            video: true,
            lazyLoad: true,
            nav: true,
            navContainer: '.owlcarouselportfolios-nav-container',
            dotsContainer: '.owlcarouselportfolios-dot-container',
            navText: ['<span class="fa fa-caret-left"></span>',
                '<span class="fa fa-caret-right"></span>'
            ],
            center: false,
            responsive: {
                0: {
                    items: 2
                },
                576: {
                    items: 2
                },
                768: {
                    items: 2
                },
                992: {
                    items: 3
                },
                1200: {
                    items: 4
                },
                1400: {
                    items: 4
                },
            }
        });
    });
</script>

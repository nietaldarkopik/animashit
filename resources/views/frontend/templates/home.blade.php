@extends('../frontend.master')
@php
    $gigs = \App\Models\GigModel::orderBy('sort', 'ASC')->get();
@endphp
@section('content')
    <section id="main-container" class="p-0 min-vh-100 container-fluid">
        <div class="container-xxxl video-container position-relative p-0 mx-auto">
            @include('frontend.widgets.slider')
        </div>
    </section>
        
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasStart" aria-labelledby="offcanvasStartLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasStartLabel">Offcanvas</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
        </div>
    </div>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEnd" aria-labelledby="offcanvasEndLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasEndLabel">Offcanvas</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div>
                Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists,
                etc.
            </div>
            <div class="dropdown mt-3">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                    Dropdown button
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="offcanvas offcanvas offcanvas-bottom bg-transparent offcanvas-bottom" tabindex="-1"
        id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel-body bg-transparent">
        {{-- <div class="offcanvas-header align-items-center">
            <h5 class="offcanvas-title ff-oswald text-white" id="offcanvasBottomLabel">Our <strong>Gigs</strong></h5>
            <button type="button" class="btn-close text-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div> --}}
        <div class="offcanvas-body overflow-hidden p-0 bg-transparent">
            <div class="row justify-content-center">
                <div class="col-12 text-center pt-1">
                    <button class="ff-oswald text-white h-5 boxed-white d-inline-block h5" data-bs-dismiss="offcanvas" aria-label="Close">Our <strong>Gigs</strong></button>
                </div>
            </div>
            <div class="row justify-content-center px-5 py-0">
                <div class="col-12 gigs-slick">
                    @foreach ($gigs as $i => $item)
                        @php
                            $thumbnail = App\Models\GigMediaModel::where(function ($query) use ($item) {
                                $query->where('gig_id', $item->id);
                                $query->where('display', 'thumbnail');
                            })->first();

                            if (!isset($thumbnail->id)) {
                                $thumbnail = App\Models\GigMediaModel::where(function ($query) use ($item) {
                                    $query->where('gig_id', $item->id);
                                    $query->where('display', 'upload_image');
                                })->first();
                            }

                        @endphp
                        @if (isset($thumbnail->id))
                            <div class="p-2">
                                <div class="card card-offcanvas-bottom bg-transparent text-center card-gig"
                                    data-gig_id="{{ $item->id }}">
                                    <div class="card-body card-body-img">
                                        <img class="card-img" src="{{ url(htmlspecialchars($thumbnail->media)) }}" alt="Title">
                                    </div>
                                    <div class="card-body p-1">
                                        <h4 class="card-title my-1 h6 ff-oswald text-white">{{ $item->title }}</h4>
                                        {{-- <p class="card-text my-1">Body</p> --}}
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Portfolio Detail-->
    <div class="modal fade anime-modal p-0" id="modalPagePortfolio" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog container-fluid mx-auto modal-sm modal-fullscreen p-0" role="document">
            <div class="modal-content m-0 p-0">
                <div class="modal-body ff-dmsans-regular m-0 p-0">
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Artist Detail-->
    <div class="modal fade anime-modal p-0" id="modalPage" tabindex="-1" role="dialog"
    aria-hidden="true">

    <div class="modal-dialog modal-dialog-scrollable container-fluid mx-auto modal-sm modal-fullscreen p-0" id="modalGeneral" role="document">
        <div class="modal-content m-0 p-0">
            <div class="modal-body ff-dmsans-regular">

            </div>
        </div>
    </div>

@endsection

@section('style')
    <link rel="stylesheet" href="{{ url('frontend/animashit/assets/scripts/slick-1.8.1/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/animashit/assets/scripts/slick-1.8.1/slick/slick-theme.css') }}">
@endsection
@section('script')
    <script src="{{ url('frontend/animashit/assets/scripts/slick-1.8.1/slick/slick.js') }}"></script>
    <script>
        var baseUrl = "{{ url('/') }}";
        var currentPage = "{{ $page?->slug }}"
        var bsOffcanvasBottom = new bootstrap.Offcanvas('.offcanvas-bottom');
        var bsOffcanvasStart = new bootstrap.Offcanvas('.offcanvas-start');
        var bsOffcanvasEnd = new bootstrap.Offcanvas('.offcanvas-end');
        var loading_html = `
                <div class="row justify-content-center align-items-center w-100 h-100">
                    <div class="col-12 text-center">
                        <button class="btn btn-primary" type="button" disabled>
                            <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                            Loading...
                        </button>
                    </div>
                </div>
            `;

        //bsOffcanvasStart.show();
        //bsOffcanvasEnd.show();

        $("body").on('show.bs.offcanvas',bsOffcanvasBottom,function(){
            $(".toggle-offcanvas").hide();
        });

        $("body").on('hidden.bs.offcanvas',bsOffcanvasBottom, function(){
            $(".toggle-offcanvas").show();
        });
        
        $("body").on("click", ".card-gig", function() {
            var gig_id = $(this).data("gig_id");
            var url = "{{ route("modal.gig.detail",["id" => "__yy__"])}}";
            url = url.replace('__yy__',gig_id);

            $("#modalPage .modal-body").html(loading_html);
            $("#modalPage").modal("show");
            
            $.ajax({
                url: url,
                data: "",
                dataType: "html",
                type: "get",
                success: function(msg)
                {
                    $("#modalPage .modal-body").html(msg);
                }
            })
           
        });
        $("body").on("click", ".card-artist", function() {
            var id = $(this).data("id");
            var gig_id = $(this).data("gig_id");
            var url = "{{ route("modal.artist.detail",["gig_id" => "__xx__","id" => "__yy__"])}}";
            url = url.replace('__xx__',gig_id);
            url = url.replace('__yy__',id);

            $("#modalPage .modal-body").html(loading_html);
            $("#modalPage").modal("show");
            $.ajax({
                url: url,
                data: "",
                dataType: "html",
                type: "get",
                success: function(msg)
                {
                    $("#modalPage .modal-body").html(msg);
                }
            })
        });
        $("body").on("click", ".card-portfolio", function() {
            var id = $(this).data("id");
            var gig_id = $(this).data("gig_id");
            var url = "{{ route("modal.portfolio.detail",["id" => "__yy__"])}}";
            url = url.replace('__yy__',id);

            $("#modalPagePortfolio .modal-body").html(loading_html);
            $("#modalPagePortfolio").modal("show");
            $.ajax({
                url: url,
                data: "",
                dataType: "html",
                type: "get",
                success: function(msg)
                {
                    $("#modalPagePortfolio .modal-body").html(msg);
                }
            })
        });

        $("body").on("hidden.bs.modal","#modalPagePortfolio",function(){
            $("#modalPagePortfolio .modal-body").html(loading_html);
        });

        $("body").on("hidden.bs.modal","#modalPage",function(){
            $("#modalPage .modal-body").html(loading_html);
        });
        $(document).ready(function() {


            $('.gigs-slick').slick({
                dots: true,
                infinite: false,
                speed: 300,
                respondTo: 'slider',
                slidesToShow: 6,
                slidesToScroll: 6,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 4,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });

            $(".owl-carousel").owlCarousel({
                items: 1,
                merge: false,
                loop: true,
                margin: 10,
                video: true,
                lazyLoad: true,
                nav: true,
                navContainer: '.owlcarousel-nav-container',
                dotsContainer: '.owlcarousel-dot-container',
                navText: ['<span class="fa fa-caret-left"></span>',
                    '<span class="fa fa-caret-right"></span>'
                ],
                center: true
                /* ,
                               responsive: {
                                   480: {
                                       items: 2
                                   },
                                   600: {
                                       items: 4
                                   }
                               } */
            });
            
            bsOffcanvasBottom.show();
        });

        {{--
        $(document).ready(function() {
            let mainMenu = getPagesList([], function(msg) {
                let output = $("<div/>");
                let data = msg.data;

                $.each(data, function(i, v) {
                    let isActive = currentPage == v.slug ? 'active' : '';
                    let visually = currentPage == v.slug ?
                        '<span class="visually-hidden">(current)</span>' : '';

                    $(output).append(`
                    <li class="nav-item">
                        <a class="nav-link ff-oswald fw-bold fs-5 ` + isActive + `" href="{{ url('page/') }}/` + v
                        .slug + `" aria-current="page" >` + v.title + visually + `</a>
                    </li>
                `);
                });
                $("#mainmenu").html($(output).html());
            });

            let currentDetailPage = getPagesDetail({
                slug: "{{ $page?->slug }}"
            }, function(msg) {
                /* let data = msg.data;
                //let title = $(`<div><h1 class="text1 text-dark text-outline2 mb-0 pb-0 size1 animate__animated animate__bounceIn">`+data.title+`</h1></div>`);
                let description = $(`<div><div class="animate__animated animate__slideInDown">` + data
                    .description + `</div></div>`);
                //let output = $(title).html() + $(description).html();
                let output = $(description).html();
                $("#maincontent").html(output); */
            });

            /* 
            let loadYoutube = getYoutubeUrl({url: "https://www.youtube.com/embed/Wa2qwFrnASw?controls=0&showinfo=0&rel=0&autoplay=1&loop=1"},function(msg)
            {
                console.log(msg);
                //let data = msg.data;
                //let title = $(`<div><h1 class="text1 text-dark text-outline2 mb-0 pb-0 size1 animate__animated animate__bounceIn">`+data.title+`</h1></div>`);
                //let description = $(`<div><div class="animate__animated animate__slideInDown">`+data.description+`</div></div>`);
                //let output = $(title).html() + $(description).html();
                //$("#maincontent").html(output);
            }); 
            */

            $(".video-background iframe").contents().find(".html5-main-video video").css(
                "object-fit: cover !important; position: fixed !important");
        }); 
        --}}
    </script>
@endsection

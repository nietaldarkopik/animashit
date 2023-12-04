@extends('../frontend.master')
@php
    $gigs = \App\Models\GigModel::orderBy('sort', 'ASC')->get();
@endphp
@section('content')
    <div class="overlay overlay1"></div>
    <section id="main-container" class="min-vh-100 container-fluid">
        <div class="container-xxxl mx-auto container-main">
            <div class="row justify-content-start align-content-start align-items-start h-100 vh-100 pt-5">
                @foreach ($gigs as $o => $item)
                    <div
                        class="col-12 p-0 z-1 container-xxxl pt-5 mb-5 overflow-y-auto gig-container @if ($o == 0) active @endif gig-container-{{ $item->id }}">
                        <div class="w-100 h-100 overlay-contentx justify-content-around flex-row d-flex">
                            <div
                                class="d-flex justify-content-between align-items-start align-content-around container-xxxl h-75 h-sm-100 h-100 h-12 overflow-y-auto flex-column flex-sm-row mb-5">
                                <div class="col-12 col-md-6 px-5 text-justify">
                                    <h2 class="page-subtitle size3 ff-oswald"></span>
                                        <h1 class="page-title ff-oswald">
                                            <strong>{!! $item->title !!}</strong> Gig
                                        </h1>
                                        <p class="page-description ff-graphikbold">
                                            {!! $item->description !!}
                                        </p>
                                </div>
                                <div class="col-12 col-md-6 px-5 pb-5 zindex10 mb-5">
                                    <div class="row justify-content-start align-items-start g-1">
                                        <div class="col-12">
                                            <span
                                                class="page-subtitle size3 ff-oswald fw-bold">{!! $item->title !!}</span>
                                            <span class="page-subtitle size3 ff-oswald">Artist</span>
                                        </div>
                                        <div class="col-12">
                                            <div class="owlcarousel-artists owl-carousel owl-theme">
                                                @foreach ($item->gigHeads as $ia => $a)
                                                    @php
                                                        $art = $a->artist;
                                                    @endphp
                                                    <div class="item">
                                                        <div class="card text-dark h-100 card-artist" data-id="{{ $art->id }}" data-gig_id="{{ $item->id }}">
                                                            <img class="card-img d-none object-fit-cover d-flex h-100"
                                                                src="{{ url($art->avatar) }}" alt="Title">
                                                            <div
                                                                class="card-img-overlay rounded-3 d-flex flex-column justify-content-end p-0 pb-2">
                                                                <div class="anime-bg-secondary-trans1 px-1 py-1">
                                                                    <h4 class="card-title size5">
                                                                        <span
                                                                            class="ff-delicious-handrawn fw-bold">{{ $art->nickname }}</span>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div
                                                class="owlcarouselartists-nav-container-{{ $o }} position-absolutex owl-nav z-3 w-100">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div
                                                class="owlcarouselartists-dot-container-{{ $o }} position-absolutex owl-dots z-3">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-start align-items-start g-1 mt-5 mb-5">
                                        <div class="col-12">
                                            <span
                                                class="page-subtitle size3 ff-oswald fw-bold">{!! $item->title !!}</span>
                                            <span class="page-subtitle size3 ff-oswald">Portfolios</span>
                                        </div>
                                        <div class="col-12">
                                            <div class="owlcarousel-portfolios owl-carousel owl-theme">
                                                @foreach ($item->portfolios as $ia => $a)
                                                    @php
                                                        $artist = (isset($a->profile))?$a->profile->where('user_type', 4)->first():[];
                                                        $client = (isset($a->profile))?$a->profile->where('user_type', 5)->first():[];
                                                        $media = $a->media->where('type', 'image')->first();
                                                    @endphp
                                                    <div class="item">
                                                        <div class="card text-dark h-100 card-portfolio" data-id="{{ $a->id }}" data-gig_id="{{ $item->gig_id }}">
                                                            <img class="card-img d-none object-fit-cover d-flex h-100"
                                                                src="{{ (isset($media->media)?url($media->media):'') }}" alt="Title">
                                                            <div
                                                                class="card-img-overlay d-flex flex-column justify-content-end p-0 pb-2">
                                                                <div class="anime-bg-secondary-trans1 px-1 py-1">
                                                                    <h4 class="card-title size5">
                                                                        <span
                                                                            class="ff-delicious-handrawn fw-bold">{{ $client->nickname ?? ''}}</span>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div
                                                class="owlcarouselportfolios-nav-container-{{ $o }} position-absolutex owl-nav z-3 w-100">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div
                                                class="owlcarouselportfolios-dot-container-{{ $o }} position-absolutex owl-dots z-3">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="row fixed-bottom m-0 p-0 footer-owlcarousel">
                    <div class="col-12 my-auto p-0 z-1 container-xxxlx text-center">
                        <h3 class="owlcarousel-group-title size5 owlcarousel-toggle showed">
                            <span class="fa fa-caret-down"></span>
                            <span>Choose Our Gigs<span>
                                    <span class="fa fa-caret-down"></span>
                        </h3>
                    </div>
                    <div class="col-12 m-0 owlcarousel-main-container d-flex justify-content-center">
                        <div class="owlcarousel-dot-container position-fixed owl-dots d-none d-sm-block"></div>
                        <div class="owl-carousel sticky-bottom owlcarousel-gig-list owl-theme d-nonex d-sm-block mx-5">
                            @foreach ($gigs as $item)
                                @php
                                $thumbnail = App\Models\GigMediaModel::where(function ($query) use($item) {
                                    $query->where('gig_id',$item->id);
                                    $query->where('display','thumbnail');
                                })->first();
                                if(!isset($thumbnail->id))
                                {
                                    $thumbnail = App\Models\GigMediaModel::where(function ($query) use($item) {
                                        $query->where('gig_id',$item->id);
                                        $query->where('display','upload_image');
                                    })->first();
                                }
                                
                                @endphp
                                <div class="w-100 h-100">
                                    <div class="card text-start anime-card2 h-100 card-gig"
                                        data-gig_id="{{ $item->id }}">
                                        @if(isset($thumbnail->id))
                                            <img class="card-img" src="{{ url(htmlspecialchars($thumbnail->media)) }}" alt="Title">
                                        @endif
                                        <div class="card-img-overlay card-body p-1">
                                            <h4 class="card-title my-1 h6">{{ $item->title }}</h4>
                                            {{-- <p class="card-text my-1">Body</p> --}}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-12 my-auto p-0 fixed-bottom container-xxxl">
                    <div class="owlcarousel-nav-container position-relative owl-nav mb-sm-4"></div>
                </div>
            </div>
        </div>
    </section>


    <!-- Modal Portfolio Detail-->
    <div class="modal fade anime-modal p-0" id="modalPagePortfolio" tabindex="-1" role="dialog" aria-labelledby="modalTitleId"
        aria-hidden="true">
        <div class="modal-dialog container-fluid mx-auto modal-sm modal-fullscreen p-0" role="document">
            <div class="modal-content m-0 p-0">
                <div class="modal-body ff-dmsans-regular m-0 p-0">
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Artist Detail-->
    <div class="modal fade anime-modal p-0" id="modalPage" tabindex="-1" role="dialog" aria-labelledby="modalTitleId"
    aria-hidden="true">
    <div class="modal-dialog container-fluid mx-auto modal-sm modal-fullscreen p-0" role="document">
        <div class="modal-content m-0 p-0">
            <div class="modal-body ff-dmsans-regular m-0 p-0">

            </div>
        </div>
    </div>

@endsection

@section('script')
    <script>
        $(document).ready(function() {
            var modalPage = document.getElementById('modalPage');
            modalPage.addEventListener('show.bs.modal', function(event) {
                let button = event.relatedTarget;
                let recipient = button.getAttribute('data-bs-whatever');
            });

            //$("#modalPage").modal("show");
        });
    </script>
    <script>
        var baseUrl = "{{ url('/') }}";
        var currentPage = "{{ $page?->slug }}";
        var currentGig = "";
        var defaultGigContent = $("#our-gig-content").clone();
        var defaultArtistContent = $(".master-artist").first().clone();

        $(window).on("load", function() {
            $(".overlay3").remove();
        });

        const animateCSS = (element, animation, prefix = 'animate__') =>
            // We create a Promise and return it
            new Promise((resolve, reject) => {
                const animationName = `${prefix}${animation}`;
                const node = document.querySelector(element);

                node.classList.add(`${prefix}animated`, animationName);

                // When the animation ends, we clean the classes and resolve the Promise
                function handleAnimationEnd(event) {
                    event.stopPropagation();
                    node.classList.remove(`${prefix}animated`, animationName);
                    resolve({
                        element: node
                    });
                }

                node.addEventListener('animationend', handleAnimationEnd, {
                    once: true
                });
            });
        $("body").on("click", ".card-artist", function() {
            var id = $(this).data("id");
            var gig_id = $(this).data("gig_id");
            var url = "{{ route("modal.artist.detail",["gig_id" => "__xx__","id" => "__yy__"])}}";
            url = url.replace('__xx__',gig_id);
            url = url.replace('__yy__',id);

            $("#modalPage .modal-body").html("");
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

            $("#modalPagePortfolio .modal-body").html("");
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
        $(document).ready(function() {
            $("body").on("click", ".owlcarousel-toggle", function() {

                var container = $(".owlcarousel-main-container");
                var navcontainer = $(".owlcarousel-nav-container");

                //if($(container).hasClass("animate__animated") == false)
                if ($(this).hasClass("showed") === true) {
                    $(navcontainer).addClass("animate__slideOutDown").addClass("animate__animated")
                        .addClass("animate__fast");
                    $(navcontainer).on("animationend", function(e) {
                        if ($(".owlcarousel-toggle").hasClass("showed")) {} else {
                            $(this).addClass("d-none");
                        }
                    })
                    $(container).addClass("animate__slideOutDown").addClass("animate__animated").addClass(
                        "animate__fast");
                    $(container).on("animationend", function(e) {
                        if ($(".owlcarousel-toggle").hasClass("showed")) {} else {
                            $(this).addClass("d-none");
                        }
                    })
                    $(this).removeClass("showed");
                } else {
                    $(container).removeClass("animate__slideOutDown").removeClass("animate__animated")
                        .removeClass("d-none").addClass("animate__slideInUp").addClass("animate__animated");

                    $(navcontainer).removeClass("animate__slideOutDown").removeClass("animate__animated")
                        .removeClass("d-none").addClass("animate__slideInUp").addClass("animate__animated");
                    $(this).addClass("showed");
                }
            });

            var owlcarouselGig = $(".owlcarousel-gig-list").owlCarousel({
                items: 6,
                merge: false,
                loop: false,
                margin: 10,
                video: true,
                lazyLoad: true,
                onRefresh: function(e) {
                    $(e.target).find(".card-img").addClass("d-none").hide();
                },
                onRefreshed: function(e) {
                    $(e.target).find(".card-img").removeClass("d-none").show();
                },
                nav: true,
                navContainer: '.owlcarousel-nav-container',
                dotsContainer: '.owlcarousel-dot-container',
                navText: ['<span class="fa fa-caret-left"></span>',
                    '<span class="fa fa-caret-right"></span>'
                ],
                center: true,
                responsive: {
                    0: {
                        items: 2
                    },
                    576: {
                        items: 2
                    },
                    768: {
                        items: 4
                    },
                    992: {
                        items: 6
                    },
                    1200: {
                        items: 10
                    },
                    1400: {
                        items: 10
                    },
                }
            });

            $("body").on("click", ".card-gig", function() {
                var gig_id = $(this).data("gig_id");
                var current_container = $(".gig-container.active");

                $(".gig-container").fadeOut({
                    duration: 1000,
                    complete: function() {
                        $(".gig-container").hide();
                        var idx = $(".gig-container").index($(".gig-container-" + gig_id)[0]);
                        console.log(idx);
                        owlcarouselGig.trigger("to.owl.carousel", idx);
                        $(".gig-container-" + gig_id).fadeIn({
                            duration: 500,
                            complete: function() {
                                $(".gig-container.active").removeClass("active");
                                $(".gig-container-" + gig_id).addClass("active");
                            }
                        })
                    }
                });

                /* 
                $(".gig-container")
                    .removeClass("animate__animated")
                    .removeClass("animate__slideInRight")
                    .removeClass("animate__slideOutUp");
                //$(".gig-container").fadeOut();
                $(current_container).removeClass("active").addClass("animate__repeat-1").addClass("animate__slideOutUp").addClass("animate__animated").on("animationend",function(e){
                    $(current_container).hide();
                    $(".gig-container")
                    .removeClass("animate__animated")
                    .removeClass("animate__slideInRight")
                    .removeClass("animate__slideOutUp");

                    //$(".gig-container-"+gig_id).fadeIn();
                    $(".gig-container-"+gig_id).show();
                    $(".gig-container-"+gig_id).addClass("active").addClass("animate__repeat-1").addClass("animate__slideInUp").addClass("animate__animated").on("animationend",function(e){
                        $(".gig-container-"+gig_id).removeClass("animate__slideInUp").removeClass("animate__animated");
                        // Do something after the animation
                    });
                }); */

                /*
                $(".gig-container:not(.gig-container-"+gig_id+")")
                .addClass("animate__slideOutUp")
                .addClass("animate__animated")
                .on("animationend",function(event){
                    event.stopPropagation();
                    $(".gig-container:not(.gig-container-"+gig_id+")")
                    .addClass("d-none");
                    $(".gig-container-"+gig_id).removeClass("animate__slideOutUp")
                        .addClass("animate__slideInUp")
                        .addClass("animate__animated").removeClass("d-none").on("animationend",function(event){
                            event.stopPropagation();
                            $(this).removeClass("animate_animated");
                        });
                });
                */
            });

            $(".owlcarousel-portfolios").each(function(i, v) {
                $(this).owlCarousel({
                    items: 6,
                    merge: false,
                    loop: 0,
                    margin: 10,
                    video: true,
                    lazyLoad: true,
                    onRefresh: function(e) {
                        $(e.target).find(".card-img").addClass("d-none").hide();
                    },
                    onRefreshed: function(e) {
                        $(e.target).find(".card-img").removeClass("d-none").show();
                        $(e.target).find(".card")
                            .addClass("animate__animated")
                            .addClass("animate__flipInX");
                    },
                    nav: true,
                    navContainer: '.owlcarouselportfolios-nav-container-' + i,
                    dotsContainer: '.owlcarouselportfolios-dot-container-' + i,
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
                            items: 4
                        },
                        1200: {
                            items: 4
                        },
                        1400: {
                            items: 4
                        },
                    }
                })
            });
            $(".owlcarousel-artists").each(function(i, v) {
                $(this).owlCarousel({
                    items: 6,
                    merge: false,
                    loop: 0,
                    margin: 10,
                    video: true,
                    lazyLoad: true,
                    onRefresh: function(e) {
                        $(e.target).find(".card-img").addClass("d-none").hide();
                    },
                    onRefreshed: function(e) {
                        $(e.target).find(".card-img").removeClass("d-none").show();
                        $(e.target).find(".card")
                            .addClass("animate__animated")
                            .addClass("animate__flipInX");
                    },
                    nav: true,
                    navContainer: '.owlcarouselartists-nav-container-' + i,
                    dotsContainer: '.owlcarouselartists-dot-container-' + i,
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
                            items: 4
                        },
                        1200: {
                            items: 4
                        },
                        1400: {
                            items: 4
                        },
                    }
                });
            })
        });
        $(document).ready(function() {

            const animateCSS = (element, animation, prefix = 'animate__') =>
                // We create a Promise and return it
                new Promise((resolve, reject) => {
                    let animationName = `${prefix}${animation}`;

                    $(element).addClass(`${prefix}animated`).addClass(animationName);

                    // When the animation ends, we clean the classes and resolve the Promise
                    function handleAnimationEnd(event) {
                        event.stopPropagation();
                        $(element).removeClass(`${prefix}animated`).removeClass(animationName);
                        resolve('Animation ended');
                    }

                    $("body").on('animationend', element, function handleAnimationEnd(event) {
                        event.stopPropagation();
                        console.log(element);
                        $(element).removeClass(`${prefix}animated`).removeClass(animationName);
                        resolve('Animation ended');
                    });
                });
            /* 
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
            */
            let mainGig = getGigsList([], function(msg) {
                let output = $("<div/>");
                let data = msg.data;

                $.each(data, function(i, v) {
                    let isActive = (currentGig == v.id || (currentGig == '' && i == 0)) ? 'active' :
                        '';

                    $(output).append(`
                        <div data-gig-id="` + v.id + `" class="` + isActive + ` col-md-12 anime-bg-secondary-trans1 py-1 gig-items bg-animashit-primary-trans border-animashit-secondary text-light px-3 border-bottom border-3">
                            <h2 class="gig-title ">` + v.title + `</h2>
                            <p class="gig-excerpt">
                                ` + v.title + `
                            </p>
                        </div>
                    `);
                });

                $("#our-gig-list").html($(output).html());
                let activeGig = $("#our-gig-list .gig-items.active");
                $(activeGig).click();

            });

            function funcGetArtistsGig(params) {
                return getArtistsGigsList(params, function(msg) {
                    let output = $("<div/>");
                    let data = msg.data;

                    $.each(data, function(i, v) {
                        $(output).append(
                            `
                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                                        <div class="card text-dark h-100 anim-shadow-hover anim-animate-heart artist-thumb" data-artist-id="` +
                            v.artist.id + `" data-gig-id="` + v.gig_id + `">
                                            <img class="card-img d-none object-fit-cover d-flex h-100"
                                                src="{{ url('uploads/artists/') }}/` + v.artist.avatar + `"
                                                alt="Title">
                                            <div class="card-img-overlay card-body d-flex flex-column justify-content-center p-0 pb-2">
                                                <div class="anime-bg-secondary-trans1 px-1 py-1">
                                                    <h4 class="card-title">` + v.artist.nickname + `</h4>
                                                    <!-- <p class="card-text">` + v.artist.avatar + `</p> -->
                                                </div>
                                            </div>
                                            <div class="card-body py-1">
                                                <strong>` + v.artist.nickname + `</strong>
                                            </div>
                                        </div>
                                    </div>
                        `);
                    });

                    $("#our-gig-artists-list").html($(output).html());

                });
            }

            $("body").on("click", ".artist-thumb", function() {
                let gig_id = $(this).data("gig-id");
                let artist_id = $(this).data("artist-id");

                //$(".leftbar").addClass("animate__slideOutLeft").addClass("animate__animated").addClass("d-none");
                //$(".rightbar").addClass("animate__slideOutRight").addClass("animate__animated").addClass("d-none");

                animateCSS(".leftbar", "slideOutLeft").then((message) => {
                    $(".leftbar").addClass("d-none");
                });

                animateCSS(".rightbar", "slideOutRight").then((message) => {
                    $(".rightbar").addClass("d-none");
                });

                setTimeout(() => {
                    window.location.href = "{{ url('page/artist/') }}/" + artist_id;
                }, 1000);

                /* 
                getGigsDetail({id: id}, function(msg) {
                    let output = $("<div/>");
                    let data = msg.data;


                }); */
            });

            $("body").on("click", ".gig-items", function() {
                let id = $(this).data("gig-id");

                $(".gig-items").removeClass("active");
                $(this).addClass("active");
                $("#our-gig-content").html($(defaultGigContent).html());
                $("#our-gig-artists-list").html($(defaultArtistContent));


                let mainGig = getGigsDetail({
                    id: id
                }, function(msg) {
                    let output = $("<div/>");
                    let data = msg.data;

                    $(output).append(`
                        <h2 class="gig-title">
                            ` + data.title + `
                        </h2>
                    `);

                    $(output).append(`
                        <div class="gig-excerpt overflow-x-auto" style="height: 30vh;">
                            ` + data.description + `
                        </div>
                    `);


                    $("#our-gig-content").html($(output).html());
                });

                funcGetArtistsGig({
                    gig_id: id
                });
            });

            let currentDetailPage = getPagesDetail({
                slug: "{{ $page?->slug }}"
            }, function(msg) {
                let data = msg.data;
                //let title = $(`<div><h1 class="text1 text-dark text-outline2 mb-0 pb-0 size1 animate__animated animate__bounceIn">`+data.title+`</h1></div>`);
                let description = $(`<div><div class="animate__animated animate__slideInDown">` + data
                    .description + `</div></div>`);
                //let output = $(title).html() + $(description).html();
                let output = $(description).html();
                $("#maincontent").html(output);
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


            $(".leftbar").removeClass("d-none");
            $(".rightbar").removeClass("d-none");
            animateCSS(".leftbar", "slideInLeft").then((message) => {
                $(".leftbar").removeClass("d-none");
            });

            animateCSS(".rightbar", "slideInRight").then((message) => {
                $(".rightbar").removeClass("d-none");
            });


        });
    </script>
@endsection

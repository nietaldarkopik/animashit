@extends('../frontend.master')
@php
    $gigs = \App\Models\GigModel::orderBy('sort', 'ASC')->get();
@endphp
@section('content')
    @include('../frontend.modals.our-gigs')
@endsection

@section('scriptx')
        
<script>
    var baseUrl = "{{ url('/') }}";
    var currentPage = "{{ $page?->slug }}";
    var currentGig = "";
    var defaultGigContent = $("#our-gig-content").clone();
    var defaultArtistContent = $(".master-artist").first().clone();
    var bsOffcanvasBottom = new bootstrap.Offcanvas('.offcanvas-bottom');

    $(window).on("load", function() {
        $(".overlay3").remove();
    });

    var animateCSS = (element, animation, prefix = 'animate__') =>
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
        var url = "{{ route('modal.artist.detail', ['gig_id' => '__xx__', 'id' => '__yy__']) }}";
        url = url.replace('__xx__', gig_id);
        url = url.replace('__yy__', id);

        $("#modalSubPage .modal-body").html(loading_html);
        $("#modalSubPage").modal("show");
        $.ajax({
            url: url,
            data: "",
            dataType: "html",
            type: "get",
            success: function(msg) {
                $("#modalSubPage .modal-body").html(msg);
            }
        })
    });
    
    $("body").on("click", ".card-portfolio", function() {
        var id = $(this).data("id");
        var gig_id = $(this).data("gig_id");
        var url = "{{ route('modal.portfolio.detail', ['id' => '__yy__']) }}";
        url = url.replace('__yy__', id);

        $("#modalSubPage .modal-body").html(loading_html);
        $("#modalSubPage").modal("show");
        $.ajax({
            url: url,
            data: "",
            dataType: "html",
            type: "get",
            success: function(msg) {
                $("#modalSubPage .modal-body").html(msg);
            }
        })
    });

    $("body").on("hidden.bs.modal", "#modalSubPage", function() {
        $("#modalSubPage .modal-body").html(loading_html);
    });

    $("body").on("hidden.bs.modal", "#modalSubPage", function() {
        $("#modalSubPage .modal-body").html(loading_html);
    });

    $("body").on("click", ".card-gig", function() {
        var gig_id = $(this).data("gig_id");
        var url = "{{ route("modal.gig.detail",["id" => "__yy__"])}}";
        url = url.replace('__yy__',gig_id);

        $("#modalSubPage .modal-body").html(loading_html);
        $("#modalSubPage").modal("show");
        $.ajax({
            url: url,
            data: "",
            dataType: "html",
            type: "get",
            success: function(msg)
            {
                $("#modalSubPage .modal-body").html(msg);
            }
        })
    });

    $(document).ready(function() {

        bsOffcanvasBottom.show();
        
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
        });

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
    });

    /* 
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
        *\/
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


            }); *\/
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
        *\/


        $(".leftbar").removeClass("d-none");
        $(".rightbar").removeClass("d-none");
        animateCSS(".leftbar", "slideInLeft").then((message) => {
            $(".leftbar").removeClass("d-none");
        });

        animateCSS(".rightbar", "slideInRight").then((message) => {
            $(".rightbar").removeClass("d-none");
        });


    });
     */
</script>

@endsection

@extends('../frontend.master')
@section('content')
    <div class="overlay overlay1"></div>
    <section id="main-container" class="min-vh-100 container-fluid">
        <div class="container-xxxl mx-auto container-main">
            <div class="row justify-content-end align-content-end align-items-center h-100 vh-100">
                <div class="owl-carousel owl-theme mb-5">
                        <div class="w-100 h-100">
                            <div class="card text-start anime-card2 h-100">
                                <img class="card-img" src="holder.js/100px180/" alt="Title">
                                <div class="card-img-overlay card-body">
                                    <h4 class="card-title">Title</h4>
                                    <p class="card-text">Body</p>
                                </div>
                            </div>
                        </div>
                        <div class="w-100 h-100">
                            <div class="card text-start anime-card2 h-100">
                                <img class="card-img" src="holder.js/100px180/" alt="Title">
                                <div class="card-img-overlay card-body">
                                    <h4 class="card-title">Title</h4>
                                    <p class="card-text">Body</p>
                                </div>
                            </div>
                        </div>
                        <div class="w-100 h-100">
                            <div class="card text-start anime-card2 h-100">
                                <img class="card-img" src="holder.js/100px180/" alt="Title">
                                <div class="card-img-overlay card-body">
                                    <h4 class="card-title">Title</h4>
                                    <p class="card-text">Body</p>
                                </div>
                            </div>
                        </div>
                        <div class="w-100 h-100">
                            <div class="card text-start anime-card2 h-100">
                                <img class="card-img" src="holder.js/100px180/" alt="Title">
                                <div class="card-img-overlay card-body">
                                    <h4 class="card-title">Title</h4>
                                    <p class="card-text">Body</p>
                                </div>
                            </div>
                        </div>
                        <div class="w-100 h-100">
                            <div class="card text-start anime-card2 h-100">
                                <img class="card-img" src="holder.js/100px180/" alt="Title">
                                <div class="card-img-overlay card-body">
                                    <h4 class="card-title">Title</h4>
                                    <p class="card-text">Body</p>
                                </div>
                            </div>
                        </div>
                        <div class="w-100 h-100">
                            <div class="card text-start anime-card2 h-100">
                                <img class="card-img" src="holder.js/100px180/" alt="Title">
                                <div class="card-img-overlay card-body">
                                    <h4 class="card-title">Title</h4>
                                    <p class="card-text">Body</p>
                                </div>
                            </div>
                        </div>
                        <div class="w-100 h-100">
                            <div class="card text-start anime-card2 h-100">
                                <img class="card-img" src="holder.js/100px180/" alt="Title">
                                <div class="card-img-overlay card-body">
                                    <h4 class="card-title">Title</h4>
                                    <p class="card-text">Body</p>
                                </div>
                            </div>
                        </div>
                        <div class="w-100 h-100">
                            <div class="card text-start anime-card2 h-100">
                                <img class="card-img" src="holder.js/100px180/" alt="Title">
                                <div class="card-img-overlay card-body">
                                    <h4 class="card-title">Title</h4>
                                    <p class="card-text">Body</p>
                                </div>
                            </div>
                        </div>
                        <div class="w-100 h-100">
                            <div class="card text-start anime-card2 h-100">
                                <img class="card-img" src="holder.js/100px180/" alt="Title">
                                <div class="card-img-overlay card-body">
                                    <h4 class="card-title">Title</h4>
                                    <p class="card-text">Body</p>
                                </div>
                            </div>
                        </div>
                        <div class="w-100 h-100">
                            <div class="card text-start anime-card2 h-100">
                                <img class="card-img" src="holder.js/100px180/" alt="Title">
                                <div class="card-img-overlay card-body">
                                    <h4 class="card-title">Title</h4>
                                    <p class="card-text">Body</p>
                                </div>
                            </div>
                        </div>
                </div>

                <div class="col-12 my-auto p-0 position-fixed z-1 container-xxxl">
                    <div class="owlcarousel-nav-container position-relative owl-nav"></div>
                    <div class="owlcarousel-dot-container position-fixed owl-dots"></div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        var baseUrl = "{{ url('/') }}";
        var currentPage = "{{ $page?->slug }}";
        var currentGig = "";
        var defaultGigContent = $("#our-gig-content").clone();
        var defaultArtistContent = $(".master-artist").first().clone();

        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                items: 6,
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
                center: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    576: {
                        items: 2
                    },
                    768: {
                        items: 3
                    },
                    992: {
                        items: 4
                    },
                    1200: {
                        items: 6
                    },
                    1400: {
                        items: 8
                    },
                }
            });
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
                                            <img class="card-img object-fit-cover h-100"
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

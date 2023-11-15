@extends('../frontend.master')
@section('content')
<section id="main-container" class="p-0 min-vh-100 container-fluid mt-5">
    <div class="container-xxxl mx-auto video-container position-relative p-0">
        {{-- <video class="w-100 z-0" autoplay loop muted>
            <source src="{{ url('frontend/animashit/assets/videos/video1.mp4') }}" type="video/mp4" class="w-100">
        </video> --}}
        <div class="overlay overlay1 z-1"></div>
        <div class="row justify-content-end align-items-stretch g-2 align-self-center my-auto position-relative z-2">
            <div class="col-md-2 p-2 leftbar gig-lists d-flex d-none position-absolute sticky-bottom start-0 top-0">
                <div class="row g-2 my-auto nav-gig-list" id="our-gig-list">
                    @for ($i = 0; $i < 7; $i++)
                        <div
                            class="col-md-12 w-100 anime-bg-secondary-trans1 py-1 gig-items bg-animashit-primary border-animashit-secondary text-light px-3 border-bottom border-3">
                            <h2 class="gig-title w-100 placeholder-glow">
                                <span class="placeholder col-3"></span> <span class="placeholder col-2"></span>
                                <span class="placeholder col-3"></span>
                            </h2>
                            <div class="gig-excerpt placeholder-glow">
                                <span class="placeholder col-3"></span>
                                <span class="placeholder col-3"></span>
                                <span class="placeholder col-3"></span>
                                <span class="placeholder col-3"></span>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
            <div class="align-self-start col-10 align-content-start flex-column justify-content-center p-2 rightbar d-none">
                        <div class="row row-cols-md-12 justify-content-between align-items-center g-2 my-2">
                            <div class="col-12 p-2" id="our-gig-content">
                                <h2 class="page-title placeholder-glow">
                                    <span class="placeholder">IDLE</span> <span class="placeholder">ANIMATION</span>
                                </h2>
                                <div class="gig-excerpt overflow-x-autox">
                                    <p class="placeholder-glow">
                                        <span class="placeholder">zowie</span>
                                        <span class="placeholder">yowza upon so minor drat exhaust so yowza upon
                                            so</span>
                                        <span class="placeholder">linear</span>
                                        <span class="placeholder">via</span>
                                        <span class="placeholder">via</span>
                                        <span class="placeholder">via</span>
                                        <span class="placeholder">minor drat exhaust so whether gosh pfft ack</span>
                                        <span class="placeholder">ack</span>
                                        <span class="placeholder">ack</span>
                                        <span class="placeholder">ack</span>
                                    </p>
                                    <p class="placeholder-glow">
                                        <span class="placeholder">zowie</span>
                                        <span class="placeholder">yowza upon so minor drat exhaust so yowza upon
                                            so</span>
                                        <span class="placeholder">linear</span>
                                        <span class="placeholder">via</span>
                                        <span class="placeholder">via</span>
                                        <span class="placeholder">via</span>
                                        <span class="placeholder">minor drat exhaust so whether gosh pfft ack</span>
                                        <span class="placeholder">ack</span>
                                        <span class="placeholder">ack</span>
                                        <span class="placeholder">ack</span>
                                    </p>
                                    <p class="placeholder-glow">
                                        <span class="placeholder">zowie</span>
                                        <span class="placeholder">yowza upon so minor drat exhaust so yowza upon
                                            so</span>
                                        <span class="placeholder">linear</span>
                                        <span class="placeholder">via</span>
                                        <span class="placeholder">via</span>
                                        <span class="placeholder">via</span>
                                        <span class="placeholder">minor drat exhaust so whether gosh pfft ack</span>
                                        <span class="placeholder">ack</span>
                                        <span class="placeholder">ack</span>
                                        <span class="placeholder">ack</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row row-cols-md-12 justify-content-between align-items-center g-2 my-2">
                            <div class="col-12  p-2">
                                <h2 class="gig-title">Our Gig Artists</h2>
                            </div>
                        </div>
                        <div class="row justify-content-stretch align-items-stretch g-2 artists-list"
                            id="our-gig-artists-list">
                            <div class="col-6 col-sm-4 col-md-3 col-lg-2 master-artist">
                                <div class="card text-dark h-100 placeholder-glow">
                                    <div class="placeholder">
                                        <img class="card-img object-fit-cover h-100"
                                            src="{{ url('frontend/animashit/assets/images/Yukki.png') }}"
                                            alt="Title">
                                    </div>
                                    <div class="card-img-overlay d-flex flex-column justify-content-end p-0 pb-2">
                                        <div class="anime-bg-secondary-trans1 px-1 py-1">
                                            <h4 class="card-title"><span class="placeholder">Art</span> <span
                                                    class="placeholder">malik</span></h4>
                                            <p class="card-text"><span class="placeholder">Lorem</span>
                                                <span class="placeholder">Ipsum</span>
                                                <span class="placeholder">Dolor</span>
                                                <span class="placeholder">Sit</span>
                                                <span class="placeholder">amet</span>
                                                <span class="placeholder">Ipsum</span>
                                                <span class="placeholder">Dolor</span>
                                                <span class="placeholder">Sit</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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

                    $("body").on('animationend',element, function handleAnimationEnd(event) {
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
                            <h2 class="gig-title">` + v.title + `</h2>
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
                                            <div class="card-img-overlay d-flex flex-column justify-content-center p-0 pb-2">
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
                    window.location.href = "{{ url("page/artist/")}}/" + artist_id;
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
                        <h2 class="page-title">
                            ` + data.title + `
                        </h2>
                    `);

                    $(output).append(`
                        <div class="page-description overflow-x-autox">
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

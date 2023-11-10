@extends('../frontend.master')
@section('content')
    <section id="main-gigs1" class="p-0 bg-light schema-1 min-vh-100">
        <div class="container-fluid video-container position-relative p-0">
            <video class="w-100" autoplay loop muted>
                <source src="{{ url('frontend/animashit/assets/videos/video1.mp4') }}" type="video/mp4" class="w-100">
            </video>
            <div class="container-fluid container-main justify-content-center d-flex">
                <div class="row justify-content-center align-items-stretch g-2 align-self-center my-auto">
                    <div class="col-md-4 p-2">
                        <div class="row g-2 my-auto nav-gig-list h-100" id="our-gig-list">
                            @for($i = 0; $i < 7; $i++)
                            <div
                                class="col-md-12 w-100 anime-bg-secondary-trans1 py-1 gig-items bg-animashit-primary border-animashit-secondary text-light px-3 border-bottom border-3">
                                <h2 class="gig-title w-100 placeholder-glow">
                                    <span class="placeholder col-3"></span> <span class="placeholder col-2"></span> <span
                                        class="placeholder col-3"></span>
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
                    <div class="col-md-8 align-content-center d-flex flex-column justify-content-center p-2">
                        <div class="card text-white bg-animashit-primary-trans">
                            <div class="card-body">
                                <div class="row row-cols-md-12 justify-content-between align-items-center g-2 my-2">
                                    <div class="col-12 p-2" id="our-gig-content">
                                        <h2 class="gig-title placeholder-glow">
                                            <span class="placeholder">IDLE</span> <span class="placeholder">ANIMATION</span>
                                        </h2>
                                        <div class="gig-excerpt overflow-x-auto" style="height: 30vh;">
                                            <p class="placeholder-glow">
                                                <span class="placeholder">zowie</span>
                                                <span class="placeholder">yowza upon so minor drat exhaust so yowza upon so</span>
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
                                                <span class="placeholder">yowza upon so minor drat exhaust so yowza upon so</span>
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
                                                <span class="placeholder">yowza upon so minor drat exhaust so yowza upon so</span>
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
                            </div>
                        </div>
                        <div class="card text-white bg-animashit-primary-trans mt-2">
                            <div class="card-body">
                                <div class="row row-cols-md-12 justify-content-between align-items-center g-2 my-2">
                                    <div class="col-12  p-2">
                                        <h2 class="gig-title">Our Gig Artists</h2>
                                    </div>
                                </div>
                                <div class="row justify-content-stretch align-items-stretch g-2 artists-list">
                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                                        <div class="card text-dark anim-shadow-hover anim-animate-heart h-100">
                                            <img class="card-img object-fit-cover h-100"
                                                src="{{ url('frontend/animashit/assets/images/Yukki.png') }}"
                                                alt="Title">
                                            <div class="card-img-overlay d-flex flex-column justify-content-end p-0 pb-2">
                                                <div class="anime-bg-secondary-trans1 px-2 py-1">
                                                    <h4 class="card-title">Artmalik</h4>
                                                    <p class="card-text">Lorem Ipsum Dolor Sit amet</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                                        <div
                                            class="card bg-dark anim-shadow-hover anim-animate-heart h-100 card-artist-item">
                                            <img class="card-img object-fit-cover h-100"
                                                src="{{ url('frontend/animashit/assets/images/dota2-pl.jpeg') }}"
                                                alt="Title">
                                            <div class="card-img-overlay d-flex flex-column justify-content-end p-0 pb-2">
                                                <div class="anime-bg-secondary-trans1 px-2 py-1">
                                                    <h4 class="card-title">Artmalik</h4>
                                                    <p class="card-text">Lorem Ipsum Dolor Sit amet</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                                        <div
                                            class="card bg-dark anim-shadow-hover anim-animate-heart h-100 card-artist-item">
                                            <img class="card-img object-fit-cover h-100"
                                                src="{{ url('frontend/animashit/assets/images/dota2-pa.jpeg') }}"
                                                alt="Title">
                                            <div class="card-img-overlay d-flex flex-column justify-content-end p-0 pb-2">
                                                <div class="anime-bg-secondary-trans1 px-2 py-1">
                                                    <h4 class="card-title">Artmalik</h4>
                                                    <p class="card-text">Lorem Ipsum Dolor Sit amet</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                                        <div
                                            class="card bg-dark anim-shadow-hover anim-animate-heart h-100 card-artist-item">
                                            <img class="card-img object-fit-cover h-100"
                                                src="{{ url('frontend/animashit/assets/images/dota2-bs.jpeg') }}"
                                                alt="Title">
                                            <div class="card-img-overlay d-flex flex-column justify-content-end p-0 pb-2">
                                                <div class="anime-bg-secondary-trans1 px-2 py-1">
                                                    <h4 class="card-title">Artmalik</h4>
                                                    <p class="card-text">Lorem Ipsum Dolor Sit amet</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                                        <div
                                            class="card bg-dark anim-shadow-hover anim-animate-heart h-100 card-artist-item">
                                            <img class="card-img object-fit-cover h-100"
                                                src="{{ url('frontend/animashit/assets/images/dota2-antimage.jpeg') }}"
                                                alt="Title">
                                            <div class="card-img-overlay d-flex flex-column justify-content-end p-0 pb-2">
                                                <div class="anime-bg-secondary-trans1 px-2 py-1">
                                                    <h4 class="card-title">Artmalik</h4>
                                                    <p class="card-text">Lorem Ipsum Dolor Sit amet</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                                        <div
                                            class="card bg-dark anim-shadow-hover anim-animate-heart h-100 card-artist-item">
                                            <img class="card-img object-fit-cover h-100"
                                                src="{{ url('frontend/animashit/assets/images/dota2-zeus.jpeg') }}"
                                                alt="Title">
                                            <div class="card-img-overlay d-flex flex-column justify-content-end p-0 pb-2">
                                                <div class="anime-bg-secondary-trans1 px-2 py-1">
                                                    <h4 class="card-title">Artmalik</h4>
                                                    <p class="card-text">Lorem Ipsum Dolor Sit amet</p>
                                                </div>
                                            </div>
                                        </div>
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
                        <a class="nav-link ff-graphik fw-bold fs-5 ` + isActive + `" href="{{ url('page/') }}/` + v
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
                    let isActive = (currentGig == v.id || (currentGig == '' && i == 0)) ? 'active' : '';

                    $(output).append(`
                        <div data-gig-id="`+v.id+`" class="` + isActive + ` col-md-12 anime-bg-secondary-trans1 py-1 gig-items bg-animashit-primary-trans border-animashit-secondary text-light px-3 border-bottom border-3">
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

            $("body").on("click",".gig-items",function(){
                let id = $(this).data("gig-id");

                $(".gig-items").removeClass("active");
                $(this).addClass("active");
                $("#our-gig-content").html($(defaultGigContent).html());
                    
                let mainGig = getGigsDetail({id: id}, function(msg) {
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
        });
    </script>
@endsection

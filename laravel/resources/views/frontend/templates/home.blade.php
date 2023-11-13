@extends('../frontend.master')
@section('content')
    <section id="main-container" class="p-0 min-vh-100 container-fluid">
        <div class="container-xxxl video-container position-relative p-0 mx-auto">
            <div class="container-fluid container-main d-flex">
                <div class="row z-1">
                    <div class="col-12 p-0 my-auto">
                        <div class="owlcarousel-nav-container owl-nav container-xxxl"></div>
                        <div class="owlcarousel-dot-container owl-dots container-xxxl"></div>
                    </div>
                </div>
                <div class="video-foreground z-0">
                    {{-- <div class="overlay overlay2"></div> --}}
                    <div class="owl-carousel owl-theme">

                        <div class="item vw-100 vh-100 d-block">
                            <div class="overlay overlay1 z-2"></div>
                            <video class="vw-100 vh-100 object-fit-cover" autoplay loop muted>
                                <source src="{{ url('frontend/animashit/assets/videos/000 velorina v2 .mp4') }}">
                            </video>
                            <div class="w-100 h-100 overlay-content justify-content-center flex-row d-flex">
                                <div class="d-flex justify-content-stretch align-items-center container-xxxl">
                                    <div class="col-lg-6 offset-lg-6">
                                        <span class="owlcarousel-subtitle">Shape your body</span>
                                        <h1 class="owlcarousel-title">Be <strong>strong</strong> traning hard</h1>
                                        <a href="#"
                                            class="btn btn-warning btn-lg rounded-0 zindex11 position-absolute">Get info</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item vw-100 vh-100 d-block">
                            <div class="overlay overlay1 z-2"></div>
                            <video class="vw-100 vh-100 object-fit-cover" autoplay loop muted>
                                <source src="{{ url('frontend/animashit/assets/videos/001 omis v2.mp4') }}">
                            </video>
                            <div class="w-100 h-100 overlay-content justify-content-center flex-row d-flex">
                                <div class="d-flex justify-content-stretch align-items-center container-xxxl">
                                    <div class="col-lg-6 offset-lg-6">
                                        <span class="owlcarousel-subtitle">Shape your body</span>
                                        <h1 class="owlcarousel-title">Be <strong>strong</strong> traning hard</h1>
                                        <a href="#"
                                            class="btn btn-warning btn-lg rounded-0 zindex11 position-absolute">Get info</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item vw-100 vh-100 d-block">
                            <div class="overlay overlay1 z-2"></div>
                            <video class="vw-100 vh-100 object-fit-cover" autoplay loop muted>
                                <source src="{{ url('frontend/animashit/assets/videos/002 brighter-.mp4') }}">
                            </video>
                            <div class="w-100 h-100 overlay-content justify-content-center flex-row d-flex">
                                <div class="d-flex justify-content-stretch align-items-center container-xxxl">
                                    <div class="col-lg-6 offset-lg-6">
                                        <span class="owlcarousel-subtitle">Shape your body</span>
                                        <h1 class="owlcarousel-title">Be <strong>strong</strong> traning hard</h1>
                                        <a href="#"
                                            class="btn btn-warning btn-lg rounded-0 zindex11 position-absolute">Get info</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item vw-100 vh-100 d-block">
                            <div class="overlay overlay1 z-2"></div>
                            <video class="vw-100 vh-100 object-fit-cover" autoplay loop muted>
                                <source src="{{ url('frontend/animashit/assets/videos/003 bad queen.mp4') }}">
                            </video>
                            <div class="w-100 h-100 overlay-content justify-content-center flex-row d-flex">
                                <div class="d-flex justify-content-stretch align-items-center container-xxxl">
                                    <div class="col-lg-6 offset-lg-6">
                                        <span class="owlcarousel-subtitle">Shape your body</span>
                                        <h1 class="owlcarousel-title">Be <strong>strong</strong> traning hard</h1>
                                        <a href="#"
                                            class="btn btn-warning btn-lg rounded-0 zindex11 position-absolute">Get info</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item vw-100 vh-100 d-block">
                            <div class="overlay overlay1 z-2"></div>
                            <video class="vw-100 vh-100 object-fit-cover" autoplay loop muted>
                                <source src="{{ url('frontend/animashit/assets/videos/004 denzio.mp4') }}">
                            </video>
                            <div class="w-100 h-100 overlay-content justify-content-center flex-row d-flex">
                                <div class="d-flex justify-content-stretch align-items-center container-xxxl">
                                    <div class="col-lg-6 offset-lg-6">
                                        <span class="owlcarousel-subtitle">Shape your body</span>
                                        <h1 class="owlcarousel-title">Be <strong>strong</strong> traning hard</h1>
                                        <a href="#"
                                            class="btn btn-warning btn-lg rounded-0 zindex11 position-absolute">Get info</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <video class="w-100 h-100vh" autoplay loop muted>
                <source src="{{ url('frontend/animashit/assets/videos/video1.mp4') }}" type="video/mp4" class="w-100">
            </video> --}}
                {{-- <div class="video-foreground">
                <img src="{{ url('frontend/animashit/assets/images/Screenshot 2023-08-03 112336.jpg')}}"
                    class="w-100" />
            </div> --}}
                {{-- <div class="video-foreground">
                <iframe
                    src="https://www.youtube.com/embed/ZM49KKZ5xfo?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&mute=1"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen autoplay></iframe>
            </div> --}}
                {{-- <div class="row justify-content-center align-items-center g-2 flex-row w-100">
                <div class="col-sm-12 mx-auto text-center" id="maincontent">
                    <h1 class="text1 text-dark text-outline2 mb-0 pb-0 size1 placeholder-glow">
                        <span class="placeholder col-5"></span>
                        <span class="placeholder col-5"></span>
                    </h1>
                    <h2 class="text1 text-dark text-outline2 mb-0 pb-0 placeholder-glow">
                        <span class="placeholder col-3"></span>
                        <span class="placeholder col-2"></span>
                        <span class="placeholder col-5"></span>
                    </h2>
                    <p class="text-dark text-outline2 placeholder-glow">
                        <span class="placeholder col-2"></span>
                        <span class="placeholder col-2"></span>
                        <span class="placeholder col-3"></span>
                        <span class="placeholder col-3"></span>
                    </p>
                    <p class="text-dark text-outline2 placeholder-glow">
                        <span class="placeholder col-3"></span>
                        <span class="placeholder col-2"></span>
                        <span class="placeholder col-2"></span>
                        <span class="placeholder col-3"></span>
                    </p>
                </div>
            </div> --}}
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        var baseUrl = "{{ url('/') }}";
        var currentPage = "{{ $page?->slug }}"

        $(document).ready(function() {
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
        });

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
    </script>
@endsection

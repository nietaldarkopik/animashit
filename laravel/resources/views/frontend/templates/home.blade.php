@extends('../frontend.master')
@section('content')
    <section id="main-container" class="p-0 min-vh-100 container-fluid">
        <div class="container-xxxl video-container position-relative p-0 mx-auto">
            @include('frontend.widgets.slider')
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

@extends('../frontend.master')
@section('content')
    <section id="main-container" class="p-0 min-vh-100 container-fluid">
        <div class="container-xxxl video-container position-relative p-0 mx-auto">
            @include('frontend.widgets.slider')
        </div>
    </section>
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
        var bsOffcanvas = new bootstrap.Offcanvas('.offcanvas-bottom-gigs');

        $("body").on('show.bs.offcanvas',bsOffcanvas,function(){
            $(".toggle-offcanvas").hide();
        });

        $("body").on('hidden.bs.offcanvas',bsOffcanvas, function(){
            $(".toggle-offcanvas").show();
        });
        
        $("body").on("click", ".card-gig", function() {
            var gig_id = $(this).data("gig_id");
            var url = "{{ route("modal.gig.detail",["id" => "__yy__"])}}";
            url = url.replace('__yy__',gig_id);

            $("#modalPage .modal-body").html(`
            <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <button class="btn btn-primary" type="button" disabled>
                    <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                    Loading...
                </button>
            </div>
            </div>
                `);
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

        $("body").on("hidden.bs.modal","#modalPagePortfolio",function(){
            $("#modalPagePortfolio .modal-body").html("");
        });

        $("body").on("hidden.bs.modal","#modalPage",function(){
            $("#modalPage .modal-body").html("");
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
            
            bsOffcanvas.show();
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

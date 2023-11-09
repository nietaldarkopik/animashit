@extends('../frontend.master')
@section('content')

<section id="main-banner" class="p-0 min-vh-100">
    <div class="container-fluid video-container position-relative p-0">
        {{-- <video class="w-100 h-100vh" autoplay loop muted>
            <source src="{{ url('frontend/animashit/assets/videos/video1.mp4')}}" type="video/mp4" class="w-100">
        </video> --}}
        <div class="video-foreground">
            <iframe src="https://www.youtube.com/embed/ZM49KKZ5xfo?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen autoplay></iframe>
        </div>
        <div class="container-fluid container-main d-flex">
            <div class="row justify-content-center align-items-center g-2 flex-row w-100">
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
            </div>
        </div>
    </div>
</section>

@endsection

@section('script')
<script>
    var baseUrl = "{{ url('/') }}";
    var currentPage = "{{ $page?->slug }}"

    $(document).ready(function(){
        let mainMenu = getPagesList([],function(msg)
        {
            let output = $("<div/>");
            let data = msg.data;
            
            $.each(data,function(i,v){
                let isActive = currentPage == v.slug ? 'active' : '';
                let visually = currentPage == v.slug ? '<span class="visually-hidden">(current)</span>' : '';

                $(output).append(`
                    <li class="nav-item">
                        <a class="nav-link ff-graphik fw-bold fs-5 `+isActive+`" href="{{ url("page/") }}/`+v.slug+`" aria-current="page" >` + v.title +  visually + `</a>
                    </li>
                `);
            });
            $("#mainmenu").html($(output).html());
        });

        let currentDetailPage = getPagesDetail({slug: "{{ $page?->slug }}"},function(msg)
        {
            let data = msg.data;
            //let title = $(`<div><h1 class="text1 text-dark text-outline2 mb-0 pb-0 size1 animate__animated animate__bounceIn">`+data.title+`</h1></div>`);
            let description = $(`<div><div class="animate__animated animate__slideInDown">`+data.description+`</div></div>`);
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
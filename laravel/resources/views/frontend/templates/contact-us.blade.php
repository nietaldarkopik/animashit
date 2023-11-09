@extends('../frontend.master')
@section('content')

<section id="main-banner" class="p-0 min-vh-100">
    <div class="container-fluid video-container position-relative p-0">
        <video class="w-100 h-100vh" autoplay loop muted>
            <source src="./assets/videos/video1.mp4" type="video/mp4" class="w-100">
        </video>
        <div class="container-fluid container-main d-flex">
            <div class="row justify-content-center align-items-center g-2 flex-row w-100">
                <div class="col-sm-12 mx-auto text-center">
                    <h1 class="text1 size1">WELCOME TO</h1>
                    <h2 class="text1">ANIMASHIT CREATIVE STUDIO</h2>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
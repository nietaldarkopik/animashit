@extends('../frontend.master')
@section('content')
@php

$socmeds = \App\Models\SettingModel::where('value','!=','')->where('type','contact')->get();

@endphp
<section id="main-container" class="p-0 min-vh-100 container-fluid">
    <div class="container-xxxl video-container position-relative p-0 mx-auto">
        <video class="w-100 h-100 object-fit-cover p-0 m-0" autoplay loop muted>
            <source src="{{ asset('frontend/animashit/assets/videos/004 denzio.mp4') }}">
        </video>
        <div class="overlay overlay1"></div>
        <div class="w-100 h-100 overlay-content p-0 m-0">
            <div class="row justify-content-center align-items-center h-100 m-0">
                <div class="col-12 col-sm-10 align-self-center my-5 m-sm-auto">
                    <div class="card-group flex-row my-5 m-sm-auto">
                        <div class="card bg-animashit-primary-trans text-light">
                            <div class="card-body text-center d-flex flex-column justify-content-center">
                                <h2 class="card-title ff-oswald align-self-center">
                                    {{ $page?->title ?? ''}}
                                </h2>
                                <div class="page-description text-center py-3">
                                    {{ $page?->description ?? '' }}
                                </div>
                                <div class="row justify-content-center align-items-center g-2 mt-2 flex-wrap">
                                    <div class="col">
                                        <div class="ratio ratio-21x9">
                                            <iframe class="" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4966.37177308354!2d107.74389977594424!3d-6.924002367773733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c34ca36f5e03%3A0x5b78627d9376cdb1!2sANIMASHIT%20STUDIO!5e1!3m2!1sid!2sid!4v1701076193929!5m2!1sid!2sid" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-animashit-primary-trans text-light">
                            <div class="card-body text-center d-flex flex-column justify-content-center">
                                <h2 class="card-title ff-oswald align-self-center"><strong>You Can</strong> Find Us on</h2>
                                <div class="row justify-content-center align-items-center g-2 flex-wrap">
                                    @foreach($socmeds as $i => $s)
                                        <div class="col">
                                            {!! $s->socialLink($s->id) !!}
                                        </div>
                                    @endforeach
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
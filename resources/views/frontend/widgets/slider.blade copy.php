@php
$sliders = \App\Models\SliderModel::where('status','=', 1)->get();
@endphp
<div class="container-fluid container-main d-flex">
    <div class="row z-1">
        <div class="col-12 p-0 my-auto">
            <div class="owlcarousel-nav-container owl-nav container-xxxl"></div>
            <div class="owlcarousel-dot-container owl-dots container-xxxl"></div>
        </div>
    </div>
    <div class="video-foreground z-0">
        
        <div class="owl-carousel owl-theme">
        @foreach($sliders as $i => $s)
            <div class="item vw-100 vh-100 d-block">
                <div class="overlay overlay1 z-2"></div>
                <video class="vw-100 vh-100 object-fit-cover" autoplay loop muted>
                    <source src="{!! url($s->media) !!}">
                </video>
                <div class="w-100 h-100 overlay-content justify-content-center flex-row d-flex">
                    <div class="d-flex justify-content-stretch align-items-center container-xxxl">
                        <div class="col-lg-6 offset-lg-6">
                            <span class="owlcarousel-subtitle">{{$s->subtitle}}</span>
                            <h1 class="owlcarousel-title">{{$s->title}}</h1>
                            @if($s->button_url != '')
                            <a href="{{$s->button_url}}"
                                class="btn ff-ibmplexmono-bold btn-warning btn-lg rounded-0 zindex11 position-absolute">
                                @if($s->button_text == '')
                                Read More ...
                                @else
                                {{$s->button_text}}
                                @endif
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
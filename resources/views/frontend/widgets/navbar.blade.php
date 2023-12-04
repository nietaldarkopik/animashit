@php
$pages = \App\Models\PageModel::where('status','=','publish')->orderBy('sort','ASC')->get();
$current_page = $page?->slug ?? '';
@endphp
<header class="container-fluid fixed-top mx-auto main-navbar">
    <div class="row">
        <div class="col-md-12 p-0">
            <nav class="navbar navbar-expand-md px-4 zindex11 fixed-topx container-xxxl mx-auto">
                <a class="navbar-brand" href="#">
                    <img src="{{ url('frontend/animashit/assets/images/logo.png') }}" class="navbar-logo img-fluidx"
                        height="40" style="display:none;" />
                    <img src="{{ url('frontend/animashit/assets/images/logolight.png') }}"
                        class="navbar-logolight img-fluidx" height="40" />
                </a>
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation"></button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav ms-auto text-light mt-2 mt-lg-0" id="mainmenu">
                        @foreach($pages as $i => $p)

                        <li class="nav-item">
                            <a class="nav-link ff-oswald fw-bold fs-5 @if($current_page == $p->slug || $current_page = "") active @endif" href="{{ url('page/'.$p->slug) }}"
                                aria-current="page">{{$p->title}} <span class="visually-hidden">(current)</span></a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>

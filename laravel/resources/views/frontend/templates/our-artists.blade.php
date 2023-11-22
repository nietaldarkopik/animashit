@extends('../frontend.master')
@section('content')
@php
    $gigs = App\Models\GigModel::get();
    $artists = App\Models\ProfileModel::where('user_type',4)->get();
@endphp
    <div class="overlay overlay1"></div>
    <section id="main-container" class="container-fluid">
        <div class="container-xxxl container-main mx-auto">
            <div class="row justify-content-center align-items-center align-self-center pt-5">
                <div class="col-md-12 pt-5 text-center">
                    <h2 class="page-title">Our <strong>Artists</strong></h2>
                    <p class="page-description size3">
                        yowza upon so minor drat exhaust so whether gosh pfft ack zowie linear via ack
                        dashboard usher
                        practical drat excerpt
                    </p>
                </div>
                <div class="col-md-12 p-0 align-self-center align-items-center align-content-stretch my-auto">
                    <div class="container-xxxl">
                        <div class="row justify-content-stretch align-items-baseline w-100">
                            <div class="col-12">
                                <form class="justify-content-center align-items-center row py-5">
                                    <div class="col-12 col-sm-4 px-0 text-center">
                                        <h3 class="ff-oswald">Filter By Gig</h3>
                                        <select name="filter-gig" id="filter-gig" class="text-center rounded-0 form-control" placeholder="filter-gig" aria-describedby="helpId">
                                            <option value="">All Gigs ...</option>
                                            @foreach($gigs as $i => $g)
                                            <option value="{{$g->id}}">{{ $g->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row justify-content-center align-items-center our-artist-list owl-carousel w-100">
                            @foreach($artists as $i => $a)
                            <div class="card-group anime-bg-primary-trans p-2 rounded-3">
                                <div class="card border-0 rounded-start-3 rounded-3">
                                    <img class="card-img-top border-0 rounded-start-3 w-100 h-100 object-fit-cover" src="{{ url($a->avatar) }}"
                                        alt="Title">
                                    <div class="card-img-overlay rounded-start-3 d-flex p-0">
                                        <div class="col-12 bg-animashit-secondary-trans p-2 mt-auto">
                                            <h4 class="card-title ff-oswald fw-bolder mix-blend-differencex text-strokex text-dark size5">{{ $a->nickname}}</h4>
                                            <p class="card-text ff-sriracha fw-bolder mix-blend-differencex text-warning text-dark size5">
                                                @foreach($a->packages as $ip => $p)
                                                <strong class="fw-bold ff-oswald">{{ $p->gig->title}}</strong>
                                                @endforeach
                                            Artist</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card p-0 border-0 rounded-end-3">
                                    <div class="card-body h-100  rounded-end-3">
                                        <ul class="list-group list-group-flush p-0  rounded-end-3">
                                            <li class="list-group-item p-1">
                                                <span class="ff-oswald">Gig</span>
                                                @foreach($a->packages as $ip => $p)
                                                <span class="float-end fw-bold ff-oswald">{{ $p->gig->title}}</span>
                                                @endforeach
                                            </li>
                                            <li class="list-group-item p-1">
                                                <span class="ff-oswald">On Hold </span>
                                                <span class="float-end fw-bold ff-satisfy">20</span>
                                            </li>
                                            <li class="list-group-item p-1">
                                                <span class="ff-oswald">On Going </span>
                                                <span class="float-end fw-bold ff-satisfy">20</span>
                                            </li>
                                            <li class="list-group-item p-1">
                                                <span class="ff-oswald">Completed </span>
                                                <span class="float-end fw-bold ff-satisfy">20</span>
                                            </li>
                                            <li class="list-group-item p-1">
                                                <span class="ff-oswald">Range Price </span>
                                                <span class="float-end fw-bold ff-satisfy">$20 - $100</span>
                                            </li>
                                            <li class="list-group-item text-center d-flex py-1 px-0">
                                                <a class="col-6 btn btn-sm btn-outline-warning btn-block py-1 px-2 ff-poppins-regular rounded-0 " href="#" role="button">
                                                    <i class="m-1 fa fa-calendar-alt" aria-hidden="true"></i>Schedules
                                                </a>
                                                <a class="col-6 btn btn-sm btn-outline-warning btn-block py-1 px-2 ff-poppins-regular rounded-0 " href="#" role="button">
                                                    <i class="m-1 fa fa-user-alt" aria-hidden="true"></i>Portfolios
                                                </a>
                                            </li>
                                            <li class="list-group-item text-center">
                                                <span class="ff-caveat size4 fw-bold text-success">Available Now!</span>
                                            </li>
                                            <li class="list-group-item text-center">
                                                <a class="btn btn-sm p-1 btn-primary ff-poppins-regular anime-bg-success rounded-0 px-3" href="#" role="button">
                                                    <i class="m-1 fa fa-check-circle" aria-hidden="true"></i>Hire Him!
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            @endforeach
                        </div>
                    </div>
                    <div class="col-12 our-artist-list-nav justify-content-center align-items-center d-flex">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            jQuery(".our-artist-list").owlCarousel({
                items: 2,
                merge: false,
                loop: false,
                margin: 5,
                video: true,
                lazyLoad: true,
                nav: true,
                stagePadding: 5,
                navContainer: '.our-artist-list-nav',
                //dotsContainer: '.owlcarousel-dot-container',
                navText: ['<span class="fa fa-caret-left"></span>',
                    '<span class="fa fa-caret-right"></span>'
                ],
                center: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    576: {
                        items: 2
                    },
                    768: {
                        items: 2
                    },
                    992: {
                        items: 1
                    },
                    1200: {
                        items: 3
                    },
                    1400: {
                        items: 3
                    },
                }
            });
        });
    </script>
@endsection

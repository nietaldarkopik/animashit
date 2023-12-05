                    <div class="row justify-content-end align-items-center m-0 mt-5">
                        <div class="row top-0 left-0 p-0 m-0 gap-1">
                            <div class="col-12 z-2 col-xxl-3 col-sm-3 px-1 ms-auto">
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    <div class="accordion-item bg-animashit-primary-trans">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                            <a href="javascript:void(0);"
                                                class="accordion-button collapsed text-decoration-none"
                                                data-bs-toggle="collapse" 
                                                data-bs-target="#flush-collapseOne"
                                                data-bs-parent="#flush-collapseOne"
                                                aria-expanded="true" aria-controls="flush-collapseOne">
                                                <span class="ff-oswald fw-bold">Artist</span>
                                            </a>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="flush-headingOne">
                                            <div class="accordion-body">
                                                <div class="card anime-card1 bg-animashit-primary-trans">
                                                    <div class="row g-0">
                                                        <div class="col-md-4">
                                                            <img src="{{ url('uploads/artists/'.$artist->avatar) }}"
                                                                class="img-fluid w-100 h-100 object-fit-cover"
                                                                alt="Card title">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="card-body">
                                                                <h3
                                                                    class="text-light card-title ff-oswald text-decoration-underline fw-bold placeholder-artist-name">
                                                                    {{ $artist->nickname }}
                                                                </h3>
                                                                <h4
                                                                    class="text-light card-title ff-oswald placeholder-artist-job">
                                                                    <strong>{{ $gig->title }}</strong> ARTIST
                                                                </h4>
                                                                <p
                                                                    class="text-light card-text placeholder-artist-description">
                                                                    {{ $artist->description ?? '' }}
                                                                </p>
                                                                <p class="card-text placeholder-artist-status">
                                                                    <small class="text-light">Last updated 3 mins
                                                                        ago</small>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item bg-animashit-primary-trans">
                                        <h2 class="accordion-header" id="flush-headingTwo">
                                            <a href="javascript:void(0);"
                                                class="accordion-button collapsed text-decoration-none"
                                                data-bs-toggle="collapse" 
                                                data-bs-target="#flush-collapseTwo"
                                                data-bs-parent="#flush-collapseTwo"
                                                aria-expanded="true" aria-controls="flush-collapseTwo">
                                                <span class="ff-oswald fw-bold">Package</span>
                                            </a>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse show"
                                            aria-labelledby="flush-headingTwo">
                                            <div class="accordion-body">
                                                <div class="row justify-content-center align-items-center">
                                                    <div
                                                        class="col-12 col-md-12 justify-content-center align-content-center flex-column d-flex mt-3">
                                                        <div class="card anime-card1 bg-animashit-primary-trans">
                                                            <div class="card-header">
                                                                <ul class="nav nav-pills card-header-tabs"
                                                                    id="myTab" role="tablist">

                                                                    @foreach ($package_heads as $i => $ph)
                                                                        @foreach ($ph->packages as $ip => $p)
                                                                            <li class="nav-item" role="presentation">
                                                                                <a href="#"
                                                                                    class="nav-link text-light @if ($ip == 0) active @endif"
                                                                                    id="package-{{ $p->id }}"
                                                                                    data-bs-toggle="tab"
                                                                                    data-bs-target="#target-{{ $p->id }}"
                                                                                    role="tab"
                                                                                    aria-controls="target-{{ $p->id }}"
                                                                                    aria-selected="true">{{ $p->package->title }}</a>
                                                                            </li>
                                                                        @endforeach
                                                                    @endforeach

                                                                </ul>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="tab-content">
                                                                    @foreach ($package_heads as $i => $ph)
                                                                        @foreach ($ph->packages as $ip => $p)
                                                                            <div class="tab-pane  @if ($ip == 0) active @endif"
                                                                                id="target-{{ $p->id }}"
                                                                                role="tabpanel"
                                                                                aria-labelledby="package-{{ $p->id }}">
                                                                                <div class="row">
                                                                                    <div class="col-9">
                                                                                        <h5
                                                                                            class="text-outline1 text-white">
                                                                                            {{ $p->title }}
                                                                                        </h5>
                                                                                    </div>
                                                                                    <div class="col-3">
                                                                                        <h6
                                                                                            class="text-outline1 text-white">
                                                                                            {{ $p->price }}
                                                                                        </h6>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-12">
                                                                                        <p
                                                                                            class="text-outline1 text-white">
                                                                                            {!! $p->description !!}
                                                                                        </p>
                                                                                        <ul
                                                                                            class="list-group list-group-flush">
                                                                                            @php
                                                                                                $extrafeatures = [];
                                                                                            @endphp
                                                                                            @foreach ($p->features as $if => $f)
                                                                                                @if ($f->feature->type == 'default')
                                                                                                    <li
                                                                                                        class="list-group-item ff-oswald">
                                                                                                        @if ($f->feature->input_type == 'text')
                                                                                                            @if ($f->feature->unit !== '')
                                                                                                                {{ $f->feature->unit }}
                                                                                                            @else
                                                                                                                {{ $f->feature->title }}
                                                                                                            @endif
                                                                                                        @else
                                                                                                            @if ($f->value == '1')
                                                                                                                <i
                                                                                                                    class="fas fa-check text-success"></i>
                                                                                                            @elseif($f->value == '0')
                                                                                                                <i
                                                                                                                    class="fas fa-close text-danger"></i>
                                                                                                            @else
                                                                                                                {{ $f->value }}
                                                                                                            @endif
                                                                                                            @if ($f->feature->unit !== '')
                                                                                                                {{ $f->feature->unit }}
                                                                                                            @else
                                                                                                                {{ $f->feature->title }}
                                                                                                            @endif
                                                                                                        @endif
                                                                                                    </li>
                                                                                                @else
                                                                                                    @php $extrafeatures[] = $f; @endphp
                                                                                                @endif
                                                                                            @endforeach
                                                                                        </ul>
                                                                                        @if (is_array($extrafeatures) and count($extrafeatures) > 0)
                                                                                            <h6
                                                                                                class="text-outline1 text-white my-3">
                                                                                                Extra Features</h6>
                                                                                            <ul
                                                                                                class="list-group list-group-flush mt-1">
                                                                                                @foreach ($extrafeatures as $if => $f)
                                                                                                    @if ($f->feature->type != 'default')
                                                                                                        <li
                                                                                                            class="list-group-item ff-oswald">
                                                                                                            @if ($f->feature->input_type == 'text')
                                                                                                                @if ($f->feature->unit !== '')
                                                                                                                    {{ $f->feature->unit }}
                                                                                                                @else
                                                                                                                    {{ $f->feature->title }}
                                                                                                                @endif
                                                                                                                <span
                                                                                                                    class="badge badge-info float-end">
                                                                                                                    {{ $f->price }}
                                                                                                                </span>
                                                                                                            @else
                                                                                                                @if ($f->value == '1')
                                                                                                                    <i
                                                                                                                        class="fas fa-check text-success"></i>
                                                                                                                @elseif($f->value == '0')
                                                                                                                    <i
                                                                                                                        class="fas fa-close text-danger"></i>
                                                                                                                @else
                                                                                                                    {{ $f->value }}
                                                                                                                @endif
                                                                                                                @if ($f->feature->unit !== '')
                                                                                                                    {{ $f->feature->unit }}
                                                                                                                @else
                                                                                                                    {{ $f->feature->title }}
                                                                                                                @endif
                                                                                                                <span
                                                                                                                    class="badge badge-info float-end">
                                                                                                                    {{ $f->price }}
                                                                                                                </span>
                                                                                                            @endif
                                                                                                        </li>
                                                                                                    @endif
                                                                                                @endforeach
                                                                                            </ul>
                                                                                        @endif
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endforeach
                                                                    @endforeach
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
                            <div class="col-12 z-3 col-xxl-9 col-sm-9 z-2 bottom-0 left-0 p-0 position-fixed">
                                <div class="row bg-animashit-primary-trans mx-0">
                                    <div class="col-1">
                                        <button class="bg-animashit-secondary carousel-control-prev" type="button"
                                            data-bs-target="#carouselArtistDetail" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                    </div>
                                    <div class="col-10">
                                        <h3 class="ff-oswald fw-bold px-2 text-center text-light">Portfolios</h3>
                                        <ol
                                            class="carousel-indicators zindex11 overflow-x-auto position-relative m-0 d-flex justify-content-center">
                                            @foreach ($porfolios as $ip => $p)
                                                <li data-bs-target="#carouselArtistDetail"
                                                    data-bs-slide-to="{{ $ip }}"
                                                    class="@if ($ip == 0) active @endif"
                                                    aria-current="true" aria-label="First slide">
                                                    @if(isset($p->media[0])) <img src="{!! url('uploads/portfolios/'.$p->media[0]->media ?? '') !!}" /> @endif
                                                </li>
                                            @endforeach
                                        </ol>
                                    </div>
                                    <div class="col-1">
                                        <button class="bg-animashit-secondary carousel-control-next" type="button"
                                            data-bs-target="#carouselArtistDetail" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 z-1 top-0 left-0 p-0 position-fixed carousel-modal">
                                <a class="btn btn-lg z-3 btn-warning position-fixed top-0 left-0 m-5" href="javascript:void(0);"
                                    data-bs-dismiss="modal" data-bs-placement="bottom" data-bs-toggle="popover"
                                    title="Close" data-bs-title="Close" data-bs-content="Close">
                                    <i class="fas fa-caret-left"></i> Back
                                </a>
                                <div id="carouselArtistDetail"
                                    class="carousel slide vh-sm-100  z-1 top-0 left-0 p-3 p-sm-0"
                                    data-bs-ride="carousel">
                                    <div class="carousel-inner m-0 p-0" role="listbox">
                                        @foreach ($porfolios as $ip => $p)
                                            <div
                                                class="carousel-item @if ($ip == 0) active @endif">
                                                @php
                                                    $m = $p->media->first();
                                                @endphp
                                                @if(!empty($m))
                                                    <img src="{{ url('uploads/portfolios/'.$m->media) }}" class="w-100 d-block min-vw-100 min-vh-100x object-fit-fill"
                                                    alt="First slide">
                                                @endif
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h3>{{ $p->title }}</h3>
                                                    <p>{{ $p->description }}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

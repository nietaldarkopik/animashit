@php
    $socmeds = \App\Models\SettingModel::where('value', '!=', '')
        ->where('type', 'contact')
        ->get();
    $countries = \App\Models\CountryModel::orderBy('name', 'asc')->get();
    $summary = [];
    $summary[0] = $artist->packages[0]?->scheduleSummary($artist->id, 1);
    $summary[1] = $artist->packages[0]?->scheduleSummary($artist->id, 2);
    $summary[2] = $artist->packages[0]?->scheduleSummary($artist->id, 3);
@endphp
<section class="p-0 min-vh-100 container-fluid mt-5">
    <form method="post" action="{{ route('modal.order.artist.do')}}" enctype="multipart/form-data">
        @csrf
        <div class="container-xxxl video-container position-relative p-0 mx-auto">
            <video class="w-100 h-100 object-fit-cover p-0 m-0" autoplay loop muted>
                <source src="{{ asset('frontend/animashit/assets/videos/004 denzio.mp4') }}">
            </video>
            <div class="overlay overlay1"></div>
            <div class="w-100 h-100 overlay-content p-0 m-0 py-5">
                <div class="row flex-row justify-content-center align-items-start h-100 gap-0 g-3">
                    <div class="col-12 col-sm-3">
                        <div class="row flex-column justify-content-center align-items-center h-100">
                            <div class="card rounded-0 col bg-transparent text-light border-0 pt-0">
                                <div class="card-body pt-0">
            
                                    <div class="card border-0 rounded-0 bg-transparent">
                                        <img class="card-img-top border-0 rounded-0 w-100 h-100 object-fit-cover"
                                            src="{{ asset(resizeImage('uploads/artists/' . $artist->avatar, 'thumbnail-500x300', false)) }}"
                                            alt="Title">
                                        <div class="card-img-overlay d-flex p-0">
                                            <div class="col-12 bg-animashit-secondary-trans p-2 mt-auto">
                                                <h4
                                                    class="card-title ff-oswald fw-bolder mix-blend-differencex text-strokex text-dark size5">
                                                    {{ $artist->nickname }}
                                                </h4>
                                                <p
                                                    class="card-text ff-sriracha fw-bolder mix-blend-differencex text-warning text-dark size5">
                                                    <strong class="fw-bold ff-oswald"> {{ $gig->title }}</strong>
                                                    Artist
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card p-0 border-0 rounded-0 bg-animashit-light-trans">
                                        <div class="card-body h-100 rounded-0 bg-transparent">
                                            <ul class="list-group list-group-flush p-0  bg-transparent rounded-end-0">
                                                <li class="list-group-item bg-transparent p-1">
                                                    <span class="ff-oswald">Gig</span>
                                                    <span class="float-end fw-bold ff-oswald"> {{ $gig->title }} </span>
                                                </li>
                                                <li class="list-group-item bg-transparent p-1">
                                                    <span class="ff-oswald">On Hold </span>
                                                    <span class="float-end fw-bold ff-satisfy"> {{ $summary[0] }} </span>
                                                </li>
                                                <li class="list-group-item bg-transparent p-1">
                                                    <span class="ff-oswald">On Going </span>
                                                    <span class="float-end fw-bold ff-satisfy"> {{ $summary[1] }} </span>
                                                </li>
                                                <li class="list-group-item bg-transparent p-1">
                                                    <span class="ff-oswald">Completed </span>
                                                    <span class="float-end fw-bold ff-satisfy"> {{ $summary[2] }} </span>
                                                </li>
                                                <li class="list-group-item bg-transparent text-center">
                                                    @if ($artist->packages[0]?->status == 'Open')
                                                        <span class="ff-caveat size4 fw-bold text-success">Available!</span>
                                                    @else
                                                        <span class="ff-caveat size4 fw-bold text-muted">Closed</span>
                                                    @endif
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card rounded-0 col p-2 bg-transparent border-0">
                                <div class="card-body text-center d-flex flex-column justify-content-center">
                                    <h2 class="card-title ff-oswald align-self-center"><strong>You Can</strong> Find Us on
                                    </h2>
                                    <div class="row justify-content-center align-items-center g-2 flex-wrap">
                                        @foreach ($socmeds as $i => $s)
                                            <div class="col">
                                                {!! $s->socialLink($s->id) !!}
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="row flex-column justify-content-center align-items-center h-100 gap-0 g-3">
                            <div class="card rounded-0 p-2 anime-card1 bg-animashit-primary-trans">
                                <div class="card-header">
                                    <h3 class="ff-oswald page-title text-center text-white">Choose Package</h3>
                                </div>
                                <div class="card-header">
                                    <ul class="nav nav-pills card-header-tabs" id="myTab"
                                        role="tablist">

                                        @foreach ($package_heads as $i => $ph)
                                            @foreach ($ph->packages as $ip => $p)
                                                <li class="nav-item" role="presentation">
                                                    <a href="#"
                                                        class="nav-link text-light @if ($ip == 0) active @endif link-order-gig_package_id"
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
                                                <div class="tab-pane  @if ($ip == 0) active show @endif tab-order-gig_package_id"
                                                    id="target-{{ $p->id }}"
                                                    role="tabpanel"
                                                    aria-labelledby="package-{{ $p->id }}">
                                                    <div class="row">
                                                        <div class="col-9">
                                                            <h5 class="text-outline1 text-white">
                                                                {{ $p->title }}
                                                            </h5>
                                                        </div>
                                                        <div class="col-3">
                                                            <h6 class="text-outline1 text-white">
                                                                USD {{ $p->price }}
                                                            </h6>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <input type="radio" name="gig_package_id" value="{{ $p->id }}" class="input-order-gig_package_id d-none" id="input-order-gig_package_id-{{ $p->id }}" checked="checked"/>
                                                            <p class="text-outline1 text-white">
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
                            <div class="card rounded-0 p-2 bg-animashit-primary-trans text-light">
                                <div class="card-header">
                                    <h3 class="ff-oswald page-title text-center text-white">{{ $page?->title ?? '' }}</h3>
                                </div>
                                <div class="card-body">
                                    <form method="post" action="{{ route('contact.send') }}">
                                        @csrf

                                        <div class="row justify-content-center align-items-center g-2">
                                            <div class="col">
                                                <div class="page-description text-center py-3">
                                                    {{ $page?->description ?? '' }}
                                                </div>
                                                @error('g-recaptcha-response')
                                                    <div class="text-danger p-2 ff-golos-text size6 mb-0">{{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="row justify-content-start align-items-start g-2 mb-2">
                                            
                                            
                                            <div class="col-12 col-md-6">
                                                <div class="form-floatingx">
                                                    <label for="input-name">Name</label>
                                                    <input type="text"
                                                        class="form-control bg-animashit-light-trans border-dark" name="name" id="input-name" placeholder="Name" >
                                                </div>

                                                @error('name')
                                                    <div class="text-danger p-2 ff-golos-text size6 mb-0">{{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            
                                            <div class="col-12 col-md-6">
                                                <div class="form-floatingx">
                                                    <label for="input-name">Nickname</label>
                                                    <input type="text"
                                                        class="form-control bg-animashit-light-trans border-dark" name="nickname" id="input-name" placeholder="Nickname">
                                                </div>

                                                @error('nickname')
                                                    <div class="text-danger p-2 ff-golos-text size6 mb-0">{{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            
                                            <div class="col-12 col-md-6">

                                                <div class="form-floatingx">
                                                    <label for="input-country">Country</label>
                                                    <select class="form-control bg-animashit-light-trans border-dark" name="country" id="input-country" placeholder="Country">
                                                        <option value="">Choose Your Country ...</option>
                                                        @foreach ($countries as $i => $c)
                                                            <option value="{{ $c->code }}">{{ $c->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                @error('country')
                                                    <div class="text-danger p-2 ff-golos-text size6 mb-0">{{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            
                                            <div class="col-12 col-md-6">
                                                <div class="form-floatingx">
                                                    <label for="input-name">Email</label>
                                                    <input type="text"
                                                        class="form-control bg-animashit-light-trans border-dark" name="email" id="input-name" placeholder="Email">
                                                </div>

                                                @error('email')
                                                    <div class="text-danger p-2 ff-golos-text size6 mb-0">{{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            
                                            {{-- <div class="col-12 col-md-6">
                                                <div class="form-floatingx">
                                                    <label for="input-name">Phone</label>
                                                    <input type="text"
                                                        class="form-control bg-animashit-light-trans border-dark" name="phone" id="input-name" placeholder="Phone (optional)">
                                                </div>

                                                @error('phone')
                                                    <div class="text-danger p-2 ff-golos-text size6 mb-0">{{ $message }}
                                                    </div>
                                                @enderror
                                            </div> --}}
                                            
                                            <div class="col-12 col-md-6">
                                                <div class="form-floatingx">
                                                    <label for="input-name">Twitter</label>
                                                    <input type="text"
                                                        class="form-control bg-animashit-light-trans border-dark" name="twitter" id="input-name" placeholder="Twitter (Optional)">
                                                </div>

                                                @error('twitter')
                                                    <div class="text-danger p-2 ff-golos-text size6 mb-0">{{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            
                                            <div class="col-12 col-md-6">
                                                <div class="form-floatingx">
                                                    <label for="input-name">Instagram</label>
                                                    <input type="text"
                                                        class="form-control bg-animashit-light-trans border-dark" name="ig" id="input-name" placeholder="Instagram (Optional)">
                                                </div>

                                                @error('ig')
                                                    <div class="text-danger p-2 ff-golos-text size6 mb-0">{{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            
                                            <div class="col-12 col-md-6">
                                                <div class="form-floatingx">
                                                    <label for="input-name">Youtube</label>
                                                    <input type="text"
                                                        class="form-control bg-animashit-light-trans border-dark" name="youtube" id="input-youtube" placeholder="Youtube (Optional)">
                                                </div>

                                                @error('ig')
                                                    <div class="text-danger p-2 ff-golos-text size6 mb-0">{{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            
                                            <div class="col-12 col-md-6">
                                                <div class="form-floatingx">
                                                    <label for="input-name">Facebook</label>
                                                    <input type="text"
                                                        class="form-control bg-animashit-light-trans border-dark" name="facebook" id="input-facebook" placeholder="Facebook (Optional)">
                                                </div>

                                                @error('facebook')
                                                    <div class="text-danger p-2 ff-golos-text size6 mb-0">{{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                            
                                        <div class="row g-2">
                                            <div class="col-12 col-md-6">
                                                <div class="form-floatingx">
                                                    <label for="input-name">Avatar / Logo</label>
                                                    <input type="file"
                                                        class="form-control bg-animashit-light-trans border-dark" name="avatar" id="input-name" placeholder="Avatar">
                                                </div>

                                                @error('avatar')
                                                    <div class="text-danger p-2 ff-golos-text size6 mb-0">{{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="col-12 col-md-6">
                                                <div class="form-floatingx">
                                                    <label for="input-message" class="form-label">Message</label>
                                                    <textarea class="form-control bg-animashit-light-trans border-dark" name="message" id="input-message" rows="5"
                                                        style="height: 150px;" placeholder="Message"></textarea>
                                                </div>

                                                @error('message')
                                                    <div class="text-danger p-2 ff-golos-text size6 mb-0">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row g-2 justify-content-center py-3">
                                            <div class="col-12 col-md-12">
                                                <div class="form-floatingx">
                                                    <div class="d-grid gap-2">
                                                        <button type="submit" name="do_send" id="btn-action"
                                                            class="btn btn-primary">Send</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="biscolab-recaptcha-invisible-form"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>

{{-- {!! htmlScriptTagJsApi([
    'action' => 'homepage',
    'xcallback_then' => 'callbackThen',
    'xcallback_catch' => 'callbackCatch',
]) !!}
 --}}
<script>
    $(document).ready(function(){
        $("body").on("shown.bs.tab",".link-order-gig_package_id",function(event){
            //event.target
            //event.relatedTarget
            var target = event.target;
            var relatedTarget = event.relatedTarget;
            var relatedTarget = event.relatedTarget;
            $(".input-order-gig_package_id").prop("checked",false);
            $(".tab-order-gig_package_id.show").find(".input-order-gig_package_id").prop("checked",true);
        });
    });
</script>
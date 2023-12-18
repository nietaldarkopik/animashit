@php
    $socmeds = \App\Models\SettingModel::where('value', '!=', '')
        ->where('type', 'contact')
        ->get();
    $countries = \App\Models\CountryModel::orderBy('name', 'asc')->get();

@endphp
<section class="p-0 min-vh-100 container-fluid">
    <div class="container-xxxl video-container position-relative p-0 mx-auto">
        <video class="w-100 h-100 object-fit-cover p-0 m-0" autoplay loop muted>
            <source src="{{ url('frontend/animashit/assets/videos/004 denzio.mp4') }}">
        </video>
        <div class="overlay overlay1"></div>
        <div class="w-100 h-100 overlay-content p-0 m-0 py-5">
            <div class="row justify-content-center align-items-center h-100 m-0">
                <div class="col-12 col-sm-10 align-self-center my-5 m-sm-auto">
                    <div class="card-group flex-row my-auto m-sm-auto">
                        <div class="card bg-animashit-primary-trans text-light">
                            <div class="card-body">
                                <form method="post" action="{{ route('contact.send') }}">
                                    @csrf

                                    <div class="row justify-content-center align-items-center g-2">
                                        <div class="col">
                                            <h1 class="ff-oswald page-title text-center">{{ $page?->title ?? '' }}</h1>
                                            <div class="page-description text-center py-3">
                                                {{ $page?->description ?? '' }}
                                            </div>
                                            @error('g-recaptcha-response')
                                                <div class="text-danger p-2 ff-golos-text size6 mb-0">{{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="row justify-content-center align-items-center g-2 mb-2">
                                        <div class="col">

                                            <div class="form-floatingx">
                                                <label for="input-name">Name</label>
                                                <input type="text"
                                                    class="form-control bg-animashit-light-trans border-dark"
                                                    name="name" id="input-name" placeholder="Name">
                                            </div>

                                            @error('name')
                                                <div class="text-danger p-2 ff-golos-text size6 mb-0">{{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col">
                                            <div class="form-floatingx">
                                                <label for="input-email">Email</label>
                                                <input type="text"
                                                    class="form-control bg-animashit-light-trans border-dark"
                                                    name="email" id="input-email" placeholder="Email">
                                            </div>

                                            @error('email')
                                                <div class="text-danger p-2 ff-golos-text size6 mb-0">{{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row justify-content-center align-items-center g-2 mb-2">
                                        <div class="col">

                                            <div class="form-floatingx">
                                                <label for="input-country">Country</label>
                                                <select class="form-control bg-animashit-light-trans border-dark"
                                                    name="country" id="input-country" placeholder="Country">
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
                                        <div class="col">
                                            <div class="form-floatingx">
                                                <label for="input-subject">Subject</label>
                                                <input type="text"
                                                    class="form-control bg-animashit-light-trans border-dark"
                                                    name="subject" id="input-subject" placeholder="Country">
                                            </div>

                                            @error('subject')
                                                <div class="text-danger p-2 ff-golos-text size6 mb-0">{{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-floatingx">
                                        <label for="input-message" class="form-label">Message</label>
                                        <textarea class="form-control bg-animashit-light-trans border-dark" name="message" id="input-message" rows="5"
                                            style="height: 150px;" placeholder="Message"></textarea>
                                    </div>

                                    @error('message')
                                        <div class="text-danger p-2 ff-golos-text size6 mb-0">{{ $message }}</div>
                                    @enderror
                                    <br />

                                    <div class="form-floatingx">
                                        <div class="d-grid gap-2">
                                            <button type="submit" name="do_send" id="btn-action"
                                                class="btn btn-primary">Send</button>
                                        </div>
                                    </div>
                                    <div id="biscolab-recaptcha-invisible-form"></div>
                                </form>
                            </div>
                        </div>
                        <div class="card bg-animashit-secondary-trans">
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
                                <div class="row justify-content-center align-items-center g-2 mt-3 flex-wrap">
                                    <div class="col">
                                        <div class="ratio ratio-21x9">
                                            <iframe class=""
                                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4966.37177308354!2d107.74389977594424!3d-6.924002367773733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c34ca36f5e03%3A0x5b78627d9376cdb1!2sANIMASHIT%20STUDIO!5e1!3m2!1sid!2sid!4v1701076193929!5m2!1sid!2sid"
                                                height="250" style="border:0;" allowfullscreen="" loading="lazy"
                                                referrerpolicy="no-referrer-when-downgrade"></iframe>
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
</section>

{!! htmlScriptTagJsApi([
    'action' => 'homepage',
    'xcallback_then' => 'callbackThen',
    'xcallback_catch' => 'callbackCatch',
]) !!}

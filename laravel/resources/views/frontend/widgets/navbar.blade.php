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
                            <li class="nav-item">
                                <a class="nav-link ff-oswald fw-bold fs-5 active" href="{{ url('/') }}"
                                    aria-current="page">Home <span class="visually-hidden">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link ff-oswald fw-bold fs-5" href="{{ url('page/our-gigs') }}">Our
                                    Gigs</a>
                            </li>
                            <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Our Gigs</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownId">
                            <li><a class="dropdown-item" href="#">ILLUSTRATION</a></li>
                            <li><a class="dropdown-item" href="#">CHARACTER DESIGN</a></li>
                            <li><a class="dropdown-item" href="#">RIGGING</a></li>
                            <li><a class="dropdown-item" href="#">VTUBER BUNDLE</a></li>
                            <li><a class="dropdown-item" href="#">VTUBER PREMIUM</a></li>
                            <li><a class="dropdown-item" href="#">OVERLAY</a></li>
                            <li><a class="dropdown-item" href="#">MUSIC</a></li>
                            <li><a class="dropdown-item" href="#">IDLE ANIMATION</a></li>
                        </ul>
                    </li> -->
                            <li class="nav-item">
                                <a class="nav-link ff-oswald fw-bold fs-5" href="{{ url('page/our-artists') }}">Our
                                    Artists</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link ff-oswald fw-bold fs-5"
                                    href="{{ url('page/schedules') }}">Schedules</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link ff-oswald fw-bold fs-5" href="{{ url('page/about-us') }}">About
                                    Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link ff-oswald fw-bold fs-5" href="{{ url('page/contact-us') }}">Contact
                                    Us</a>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>


    <div class="container-xxxl mx-auto position-relative p-0">
        {{-- <video class="w-100 z-0" autoplay loop muted>
            <source src="{{ url('frontend/animashit/assets/videos/video1.mp4') }}" type="video/mp4" class="w-100">
        </video> --}}
        <div class="overlay overlay1 z-1"></div>
        <div class="row justify-content-end align-items-stretch g-2 align-self-center my-auto position-relative z-2">
            <div class="col-md-2 p-2 leftbar gig-lists d-flex d-none position-absolute sticky-bottom start-0 top-0">
                <div class="row g-2 my-auto nav-gig-list" id="our-gig-list">
                    @for ($i = 0; $i < 7; $i++)
                        <div
                            class="col-md-12 w-100 anime-bg-secondary-trans1 py-1 gig-items bg-animashit-primary border-animashit-secondary text-light px-3 border-bottom border-3">
                            <h2 class="gig-title w-100 placeholder-glow">
                                <span class="placeholder col-3"></span> <span class="placeholder col-2"></span>
                                <span class="placeholder col-3"></span>
                            </h2>
                            <div class="gig-excerpt placeholder-glow">
                                <span class="placeholder col-3"></span>
                                <span class="placeholder col-3"></span>
                                <span class="placeholder col-3"></span>
                                <span class="placeholder col-3"></span>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
            <div class="align-self-start col-10 align-content-start flex-column justify-content-center p-2 rightbar d-none">
                        <div class="row row-cols-md-12 justify-content-between align-items-center g-2 my-2">
                            <div class="col-12 p-2" id="our-gig-content">
                                <h2 class="page-title placeholder-glow">
                                    <span class="placeholder">IDLE</span> <span class="placeholder">ANIMATION</span>
                                </h2>
                                <div class="gig-excerpt overflow-x-autox">
                                    <p class="placeholder-glow">
                                        <span class="placeholder">zowie</span>
                                        <span class="placeholder">yowza upon so minor drat exhaust so yowza upon
                                            so</span>
                                        <span class="placeholder">linear</span>
                                        <span class="placeholder">via</span>
                                        <span class="placeholder">via</span>
                                        <span class="placeholder">via</span>
                                        <span class="placeholder">minor drat exhaust so whether gosh pfft ack</span>
                                        <span class="placeholder">ack</span>
                                        <span class="placeholder">ack</span>
                                        <span class="placeholder">ack</span>
                                    </p>
                                    <p class="placeholder-glow">
                                        <span class="placeholder">zowie</span>
                                        <span class="placeholder">yowza upon so minor drat exhaust so yowza upon
                                            so</span>
                                        <span class="placeholder">linear</span>
                                        <span class="placeholder">via</span>
                                        <span class="placeholder">via</span>
                                        <span class="placeholder">via</span>
                                        <span class="placeholder">minor drat exhaust so whether gosh pfft ack</span>
                                        <span class="placeholder">ack</span>
                                        <span class="placeholder">ack</span>
                                        <span class="placeholder">ack</span>
                                    </p>
                                    <p class="placeholder-glow">
                                        <span class="placeholder">zowie</span>
                                        <span class="placeholder">yowza upon so minor drat exhaust so yowza upon
                                            so</span>
                                        <span class="placeholder">linear</span>
                                        <span class="placeholder">via</span>
                                        <span class="placeholder">via</span>
                                        <span class="placeholder">via</span>
                                        <span class="placeholder">minor drat exhaust so whether gosh pfft ack</span>
                                        <span class="placeholder">ack</span>
                                        <span class="placeholder">ack</span>
                                        <span class="placeholder">ack</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row row-cols-md-12 justify-content-between align-items-center g-2 my-2">
                            <div class="col-12  p-2">
                                <h2 class="gig-title">Our Gig Artists</h2>
                            </div>
                        </div>
                        <div class="row justify-content-stretch align-items-stretch g-2 artists-list"
                            id="our-gig-artists-list">
                            <div class="col-6 col-sm-4 col-md-3 col-lg-2 master-artist">
                                <div class="card text-dark h-100 placeholder-glow">
                                    <div class="placeholder">
                                        <img class="card-img object-fit-cover h-100"
                                            src="{{ url('frontend/animashit/assets/images/Yukki.png') }}"
                                            alt="Title">
                                    </div>
                                    <div class="card-img-overlay d-flex flex-column justify-content-end p-0 pb-2">
                                        <div class="anime-bg-secondary-trans1 px-1 py-1">
                                            <h4 class="card-title"><span class="placeholder">Art</span> <span
                                                    class="placeholder">malik</span></h4>
                                            <p class="card-text"><span class="placeholder">Lorem</span>
                                                <span class="placeholder">Ipsum</span>
                                                <span class="placeholder">Dolor</span>
                                                <span class="placeholder">Sit</span>
                                                <span class="placeholder">amet</span>
                                                <span class="placeholder">Ipsum</span>
                                                <span class="placeholder">Dolor</span>
                                                <span class="placeholder">Sit</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </div>

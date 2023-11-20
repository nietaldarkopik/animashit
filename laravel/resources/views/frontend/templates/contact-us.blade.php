@extends('../frontend.master')
@section('content')

<section id="main-container" class="p-0 min-vh-100 container-fluid">
    <div class="container-xxxl video-container position-relative p-0 mx-auto">
        <video class="w-100 h-100 object-fit-cover p-0 m-0" autoplay loop muted>
            <source src="{{ url('frontend/animashit/assets/videos/004 denzio.mp4') }}">
        </video>
        <div class="overlay overlay1"></div>
        <div class="w-100 h-100 overlay-content p-0 m-0">
            <div class="row justify-content-center align-items-center h-100 m-0">
                <div class="col-12 col-sm-10 align-self-center my-5 m-sm-auto">
                    <div class="card-group flex-row my-5 m-sm-auto">
                        <div class="card bg-animashit-primary-trans text-light">
                            <div class="card-body">
                                <h1 class="ff-oswald page-title text-center">Contact Us</h1>
                                <p class="page-description text-center">
                                    We're open for any suggestion or just to have a chat
                                </p>
                                <div class="form-floating mb-3">
                                  <input
                                    type="text"
                                    class="form-control" name="formId1" id="formId1" placeholder="">
                                  <label for="formId1">Name</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input
                                    type="text"
                                    class="form-control" name="formId1" id="formId1" placeholder="">
                                  <label for="formId1">Email</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input
                                    type="text"
                                    class="form-control" name="formId1" id="formId1" placeholder="">
                                  <label for="formId1">Country</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" name="message" id="input" rows="5" style="height: 150px;"></textarea>
                                    <label for="message" class="form-label">Message</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="d-grid gap-2">
                                      <button type="button" name="" id="" class="btn btn-primary">Send</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body text-center d-flex flex-column">
                                <!-- Hover added -->
                                <div class="list-group my-auto">
                                    <div class="list-group-item border-0">
                                        <h2 class="card-title ff-oswald align-self-center"><strong>You Can</strong> Find Us on</h2>
                                    </div>
                                    <div class="list-group-item border-0">
                                        <a class="rounded-4 btn btn-lg btn-primary" style="background-color: #1877F2; border-color: #1877F2;">
                                            <i class="fab fa-facebook"></i> @AnimashitCreativeStudio
                                        </a>
                                    </div>
                                    <div class="list-group-item border-0">
                                        <a class="rounded-4 btn btn-lg btn-primary" style="background-color: #1DA1F2; border-color: #1DA1F2;">
                                            <i class="fab fa-twitter"></i> @AnimashitCreativeStudio
                                        </a>
                                    </div>
                                    <div class="list-group-item border-0">
                                        <a class="rounded-4 btn btn-lg btn-primary" style="background-color: #E4405F; border-color: #E4405F;">
                                            <i class="fab fa-instagram"></i> @AnimashitCreativeStudio
                                        </a>
                                    </div>
                                    <div class="list-group-item border-0">
                                        <a class="rounded-4 btn btn-lg btn-primary" style="background-color: #CD201F; border-color: #CD201F;">
                                            <i class="fab fa-youtube"></i> @AnimashitCreativeStudio
                                        </a>
                                    </div>
                                    <div class="list-group-item border-0">
                                        <a class="rounded-4 btn btn-lg btn-primary" style="background-color: var(--bs-purple); border-color: var(--bs-purple);">
                                            <i class="fab fa-discord"></i> @AnimashitCreativeStudio
                                        </a>
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
@endsection
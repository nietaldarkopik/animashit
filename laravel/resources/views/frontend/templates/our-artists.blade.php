@extends('../frontend.master')
@section('content')

<div class="overlay overlay1"></div>
<section id="main-container" class="min-vh-100 container-fluid">
    <div class="container-xxxl container-main min-vh-100xx mx-auto">
        <div class="row justify-content-center align-items-center align-self-center  min-vh-100 pt-5">
            <div class="col-md-12 pt-5 text-center">
                <h2 class="page-title">Our <strong>Artists</strong></h2>
                <p class="page-description">
                    yowza upon so minor drat exhaust so whether gosh pfft ack zowie linear via ack
                    dashboard usher
                    practical drat excerpt
                </p>
            </div>
            <!-- 
            <div class="col-md-12 p-0 align-self-stretch align-items-center align-content-stretch my-auto">
                <div class="row">
                    <?php
                    for ($i = 0; $i < 10; $i++) {
                        ?>
                            <div class="col-3">
                            <div class="card">
                                <img src="https://images.unsplash.com/photo-1561154464-82e9adf32764?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <h6 class="card-subtitle mb-2 text-muted ">Card subtitle</h6>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    b5
                                </div>
                            </div>
                            </div>
                    <?php } ?>
                </div>
            </div>
             -->
            <div class="col-md-12 p-0 align-self-center align-items-center align-content-stretch my-auto">
                <div class="container mx-auto">
                <div class="row justify-content-center align-items-center our-artist-list owl-carousel w-100">
                    <?php
                    for ($i = 0; $i < 30; $i++) {
                        ?>
                           <div class="card-group">
                            <div class="card">
                              <img class="card-img-top w-100 h-100 object-fit-cover" src="holder.js/500x400/" alt="Title">
                              <div class="card-img-overlay">
                                <h4 class="card-title">Title</h4>
                                <p class="card-text">Text</p>
                              </div>
                            </div>
                            <div class="card">
                                <img class="card-img-top w-100 h-100 object-fit-cover" src="holder.js/400x380/?text=Image cap" alt="Card image cap">
                                <div class="card-body h-100">
                                    <h4 class="card-title">Title</h4>
                                    <p class="card-text">Text</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Item 1</li>
                                    <li class="list-group-item">Item 2</li>
                                    <li class="list-group-item">Item 3</li>
                                </ul>
                            </div>
                           </div>
                           
                    <?php } ?>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
<script>
    $(document).ready(function(){
        jQuery(".our-artist-list").owlCarousel({
                items: 2,
                merge: false,
                loop: true,
                margin: 20,
                video: true,
                lazyLoad: true,
                nav: true,
                stagePadding: 0,
                //navContainer: '.owlcarousel-nav-container',
                //dotsContainer: '.owlcarousel-dot-container',
                navText: ['<span class="fa fa-caret-left"></span>',
                    '<span class="fa fa-caret-right"></span>'
                ],
                center: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    576: {
                        items: 3
                    },
                    768: {
                        items: 3
                    },
                    992: {
                        items: 3
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
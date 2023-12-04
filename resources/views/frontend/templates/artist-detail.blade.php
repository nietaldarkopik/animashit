@extends('../frontend.master')
@section('content')

<section id="main-gigs2" class="p-0 bg-light schema-1 min-vh-100xx">
    <div class="container-fluid video-containerx position-relative p-0">
        <!-- <video class="w-100" autoplay loop muted>
            <source src="{{ url('frontend/animashit/assets/videos/video1.mp4') }}" type="video/mp4" class="w-100">
        </video> -->
        <div class="container-fluid container-main min-vh-100xx py-2">
            <div class="row justify-content-between align-items-stretch align-self-scretch  min-vh-100xx">
                <div class="col-12 col-sm-12 col-lg-9 col-sm-8">
                    <div class="row justify-content-start flex-column h-100x">
                        <div class="col-md-12 bg-warning placeholder-glow">
                            <h2><span class="placeholder">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> <span class="placeholder">&nbsp;&nbsp;&nbsp;</span></h2>
                            <p>
                                yowza upon so minor drat exhaust so whether gosh pfft ack zowie linear via ack
                                dashboard
                                usher
                                practical drat excerpt
                            </p>
                        </div>
                        <div class="col-md-12 p-0">
                            <div class="row justify-content-center align-items-center">
                                <!-- <div class="col-12 mt-3">
                                    <h2 class="text-center text1 text-outline2">Portfolio</h2>
                                </div> -->
                                <div class="col-12">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-12 video-container-block">
                                            <video class="w-100" autoplay loop muted>
                                                <source src="{{ url('frontend/animashit/assets/videos/008 Project Beyond-.mp4') }}" type="video/mp4"
                                                    class="w-50">
                                            </video>
                                            <div class="portfolio-list col-12 anime-bg-primary-trans1">
                                                <ul class="flip-items">
                                                    <?php
                                                    for ($i = 0; $i < 30; $i++) {
                                                        ?>
                                                        <li data-flip-title="Title <?php echo $i; ?>"
                                                            data-flip-category="Category <?php echo ($i % 2) ? '2' : (($i % 3) ? 3 : 1); ?>">
                                                            <div
                                                                class="card text-dark anim-shadow-hoverx anim-animate-heart portfolio-itemx h-100">
                                                                <img class="card-img object-fit-cover" src="{{ url('frontend/animashit/assets/images/Yukki.png') }}"
                                                                    height="150">
                                                                <div
                                                                    class="card-img-overlay d-flex flex-column justify-content-end p-0 pb-2">
                                                                    <div class="bg-warning px-2 py-1">
                                                                        <p class="card-text">Lorem Ipsum Dolor Sit amet</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <?php
                                                    }
                                                    ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-lg-3 col-sm-4 flex-column justify-content-center d-flex">
                    <div class="row justify-content-center align-items-center py-3">
                        <div class="col-4 col-md-4">
                            <img class="rounded-0 rounded-circle image-avatar1" src="{{ url('frontend/animashit/assets/images/Yukki.png') }}"
                                alt="Title">
                        </div>
                        <div class="col-8 col-md-8 justify-content-center align-content-center flex-column d-flex">
                            <h3>Eart Malik</h3>
                            <H4>ILLUSTRATION ARTIST</H4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card anime-card1">
                                <div class="card-header">
                                    <ul class="nav nav-pills card-header-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a href="#" class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                                data-bs-target="#home" role="tab" aria-controls="home"
                                                aria-selected="true">Basic</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a href="#" class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                                data-bs-target="#profile" role="tab" aria-controls="profile"
                                                aria-selected="false">Standard</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a href="#" class="nav-link" id="messages-tab" data-bs-toggle="tab"
                                                data-bs-target="#messages" role="tab" aria-controls="messages"
                                                aria-selected="false">Premium</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="home" role="tabpanel"
                                            aria-labelledby="home-tab">
                                            <div class="row">
                                                <div class="col-9">
                                                    <h5 class="text-outline1 text-white">Basic Package</h5>
                                                </div>
                                                <div class="col-3">
                                                    <h6 class="text-outline1 text-white">US$60</h6>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <p class="text-outline1 text-white">Composing, Producing and
                                                        recording background music up to 240
                                                        seconds! Free commercial use</p>
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">7 Days Delivery</li>
                                                        <li class="list-group-item">2 Revisions</li>
                                                        <li class="list-group-item">Up to 240 seconds</li>
                                                        <li class="list-group-item">Unlimited instruments</li>
                                                        <li class="list-group-item">Commercial use</li>
                                                        <li class="list-group-item">Split the recording into
                                                            separate files</li>
                                                        <li class="list-group-item">Mixing & mastering</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="profile" role="tabpanel"
                                            aria-labelledby="profile-tab">

                                            <div class="row">
                                                <div class="col-9">
                                                    <h5 class="text-outline1 text-white">Standard Package</h5>
                                                </div>
                                                <div class="col-3">
                                                    <h6 class="text-outline1 text-white">US$60</h6>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <p class="text-outline1 text-white">Composing, Producing and
                                                        recording background music up to 240
                                                        seconds! Free commercial use</p>
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">7 Days Delivery</li>
                                                        <li class="list-group-item">2 Revisions</li>
                                                        <li class="list-group-item">Up to 240 seconds</li>
                                                        <li class="list-group-item">Unlimited instruments</li>
                                                        <li class="list-group-item">Commercial use</li>
                                                        <li class="list-group-item">Split the recording into
                                                            separate files</li>
                                                        <li class="list-group-item">Mixing & mastering</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="messages" role="tabpanel"
                                            aria-labelledby="messages-tab">

                                            <div class="row">
                                                <div class="col-9">
                                                    <h5 class="text-outline1 text-white">Premium Package</h5>
                                                </div>
                                                <div class="col-3">
                                                    <h6 class="text-outline1 text-white">US$60</h6>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <p class="text-outline1 text-white">Composing, Producing and
                                                        recording background music up to 240
                                                        seconds! Free commercial use</p>
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">7 Days Delivery</li>
                                                        <li class="list-group-item">2 Revisions</li>
                                                        <li class="list-group-item">Up to 240 seconds</li>
                                                        <li class="list-group-item">Unlimited instruments</li>
                                                        <li class="list-group-item">Commercial use</li>
                                                        <li class="list-group-item">Split the recording into
                                                            separate files</li>
                                                        <li class="list-group-item">Mixing & mastering</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Nav tabs -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('style')
<!-- <link href="{{ url('frontend/animashit/assets/node_modules/jquery.flipster/dist/jquery.flipster.min.css') }}" rel="stylesheet" /> -->
@endsection

@section('script')
<!-- <script type="text/javascript" src="{{ url('frontend/animashit/assets/node_modules/jquery.flipster/dist/jquery.flipster.min.js') }}"></script> -->
<script type="text/javascript">
    $(document).ready(function(){
        jQuery(".portfolio-list").flipster({

            // Container for the flippin' items.
            itemContainer: 'ul',

            // Selector for children of itemContainer to flip
            itemSelector: 'li',

            // 'coverflow' or 'carousel' or 'flat' or 'wheel'
            style: 'flat',

            // Starting item. Set to 0 to start at the first, 'center' to start in the middle or the index of the item you want to start with.
            start: 'center',

            // Fading speed
            fadeIn: 400,

            // Infinite loop
            loop: true,

            // Enable autoplay
            autoplay: false,

            // Enable pause on hover
            pauseOnHover: true,

            // Space between items
            spacing: -0.3,

            // Switch between items with click
            click: true,

            // Enable left/right arrow navigation
            keyboard: true,

            // Enable scrollwheel navigation (up = left, down = right)
            scrollwheel: true,

            // Enable swipe navigation for touch devices
            touch: true,

            // If true, flipster will insert an unordered list of the slides
            nav: true,

            // If true, flipster will insert Previous / Next buttons
            buttons: true,

            // Changes the text for the Previous button
            buttonPrev: 'Previous',

            // Changes the text for the Next button
            buttonNext: 'next',

            // Callback function when items are switches
            onItemSwitch: $.noop

        });
    });
</script>
@endsection
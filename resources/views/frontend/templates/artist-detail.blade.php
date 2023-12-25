@extends('../frontend.master')
@section('content')

<section id="main-gigs2" class="p-0 bg-light schema-1 min-vh-100xx">
    <div class="container-fluid video-containerx position-relative p-0">
        <!-- <video class="w-100" autoplay loop muted>
            <source src="{{ asset('frontend/animashit/assets/videos/video1.mp4') }}" type="video/mp4" class="w-100">
        </video> -->
        <div class="container-fluid container-main min-vh-100xx py-2">
            @include('../modals/artist-detail')
        </div>
    </div>
</section>
@endsection
@section('style')
<!-- <link href="{{ asset('frontend/animashit/assets/node_modules/jquery.flipster/dist/jquery.flipster.min.css') }}" rel="stylesheet" /> -->
@endsection

@section('script')
<!-- <script type="text/javascript" src="{{ asset('frontend/animashit/assets/node_modules/jquery.flipster/dist/jquery.flipster.min.js') }}"></script> -->
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
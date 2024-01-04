@php
    $gigs = App\Models\GigModel::get();
    $artists = App\Models\ProfileModel::where('user_type', 4)->get();
@endphp
<div class="row mt-10 fixed-top">
    <div class="col-12">
        <button type="button" class="btn btn-warning position-relative zindex99" data-bs-dismiss="modal"
            aria-label="Close">
            <span class="fa fa-arrow-left"></span> Back
        </button>
    </div>
</div>
<div class="overlay overlay1"></div>
<div class="row justify-content-start align-items-center m-0 mt-10 h-100">
    <div class="col-lg-12">
        <div class="card border-0 bg-transparent w-100">
            <div class="card-body">
                <div class="row">
                    <div class="col-4 col-sm-2 px-1">
                        <h4 class="text-center ff-oswald">Date Schedule</h4>
                        <div id="schedule-items-artist"
                            class="d-flex flex-column schedule-items-artist-scrollspy text-center overflow-y-auto py-2"
                            style="max-height: 70vh;">
                            <div class="list-group bg-transparent rounded-0 p-0 pe-3">
                                @foreach ($schedules as $i => $s)
                                    <a class="list-group-item list-group-item-action bg-animashit-light-trans p-0 mb-1 py-2"
                                        href="#schedule-item-{{ strtotime($i) }}">{{ date('M d, Y', strtotime($i)) }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-8 col-sm-10">
                        <h4 class="ff-oswald">Tasks</h4>
                        <div data-bs-spy="scroll" data-bs-target="#schedule-items-artist" data-bs-offset="0"
                            data-bs-smooth-scroll="true" class="scrollspy-artist overflow-y-auto pe-3" data-bs-root-margin="0px 0px -40%" tabindex="0"
                            style="max-height: 70vh;">
                            @php
                                $no = 0;
                            @endphp
                            @foreach ($schedules as $i => $s)
                                <div class="card border-0 rounded-start-0 rounded-0 bg-animashit-light-trans w-100 my-5" id="schedule-item-{{ strtotime($i) }}">
                                    <div class="card-body h-100  rounded-end-0 bg-transparent">
                                        <h4 class="card-title">
                                            <img class="rounded float-left m-r-15" width="40" alt="user"
                                                src="https://bootdey.com/img/Content/avatar/avatar1.png"> 
                                                {{ $s->artist->nickname }}
                                        </h4>
                                        <h6 class="card-subtitle mb-2 text-body-secondary"><small>{{ date('F j, Y', strtotime($s->start_date)) . ' - ' . date('F j, Y', strtotime($s->end_date)) }}</small></h6>
                                        @if($s->statusSchedule) <strong class="btn short p-1 size6 ff-sriracha" style="background-color: {{ $s->statusSchedule?->bg }}; color: {{ $s->statusSchedule?->color }}; border: 1px {{ $s->statusSchedule?->color }} solid;"> {{ $s->statusSchedule?->title }} </strong> @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script></script>
{{-- <script src="{{ asset('frontend/animashit/assets/scripts/schedule.js')}}"></script>
<script>
var eventsMinDistance  = 60;
$(document).ready(function(){    
    var timelines = $('.cd-horizontal-timeline');

	(timelines.length > 0) && initTimeline(timelines);
})
</script> --}}

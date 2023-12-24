@extends('../frontend.master')
@section('content')

@php
//$start_date = date("Y-m-d", strtotime("2023-09-15"));
//$end_date = date("Y-m-d", strtotime("2023-12-01"));

$start_date = App\Models\ScheduleModel::whereIn('status',[1,2,3])->where('start_date','>=',date('Y-m-d',strtotime('-3 month')))->min('start_date');
$end_date = App\Models\ScheduleModel::whereIn('status',[1,2,3])->where('end_date','>=',date('Y-m-d'))->max('end_date');
//DB::enableQueryLog();

$schedule_items = App\Models\ScheduleItemModel::whereHas('schedule',function($query) {
    $query->where('start_date','>=',date('Y-m-d',strtotime('-3 month')));
    $query->where('end_date','>=',date('Y-m-d'));
    $query->whereIn('status',[1,2,3]);
    //$query->with(['statusSchedule']);
})->get();
//dd(DB::getQueryLog());

$schedule_item_list = [];

foreach($schedule_items as $i => $sc)
{
    $schedule_item_list[$sc->schedule->id] = (!isset($schedule_item_list[$sc->schedule->id]))?[]:$schedule_item_list[$sc->schedule->id];
    $schedule_item_list[$sc->schedule->id][$sc->start_date] = (!isset($schedule_item_list[$sc->schedule->gig_id][$sc->start_date]))?[]:$schedule_item_list[$sc->schedule->gig_id][$sc->start_date];
    $schedule_item_list[$sc->schedule->id][$sc->start_date][] = $sc;
}

$start_date_tmp = $start_date;
$end_date_tmp = $end_date;
$th_year = [];

while ($start_date_tmp <= $end_date_tmp) {
    $date_tmp_d = date("d", strtotime($start_date_tmp));
    $date_tmp_y = date("Y", strtotime($start_date_tmp));
    $date_tmp_w = date("W", strtotime($start_date_tmp));
    $date_tmp_M = date("M", strtotime($start_date_tmp));
    $date_tmp_m = date("m", strtotime($start_date_tmp));
    $date_tmp_day_name = date("l", strtotime($start_date_tmp));
    $total_days = cal_days_in_month(CAL_GREGORIAN, $date_tmp_m, $date_tmp_y);
    $total_weeks = floor($total_days / 7);
    $day_no = date("N", strtotime($start_date_tmp));
    $day_no2 = date("n", strtotime($start_date_tmp));

    $th_year[$date_tmp_y] = (isset($th_year[$date_tmp_y])) ? $th_year[$date_tmp_y] : [];
    $th_year[$date_tmp_y][$date_tmp_M] = (isset($th_year[$date_tmp_y][$date_tmp_M])) ? $th_year[$date_tmp_y][$date_tmp_M] : [];
    $th_year[$date_tmp_y][$date_tmp_M][$date_tmp_w] = (isset($th_year[$date_tmp_y][$date_tmp_M][$date_tmp_w])) ? $th_year[$date_tmp_y][$date_tmp_M][$date_tmp_w] : [];
    $th_year[$date_tmp_y][$date_tmp_M][$date_tmp_w][] = ['day_no2' => $day_no2, 'day_no' => $day_no, 'day_name' => $date_tmp_day_name, 'date' => $date_tmp_d, 'fulldate' => $start_date_tmp];
    $start_date_tmp = date("Y-m-d", strtotime($start_date_tmp . " +1 day"));
}

if(!function_exists('get_childs_number'))
{
    function get_childs_number($arr, $deep = 1, $curr_deep = 0, $curr_output = 0)
    {
        $output = (is_array($arr)) ? count($arr) : 0;
    
        if ($deep > $curr_deep) {
            $output = 0;
            foreach ($arr as $i => $v) {
                $output += get_childs_number($v, $deep, $curr_deep + 1, $output);
            }
        }
        return $output;
    }
}

$gigs = App\Models\GigModel::get();
$schedule_status = App\Models\ScheduleStatusModel::whereIn('id',[1,2,3])->orderBy('sorting','asc')->get();
$timeline_mode = "weekly";
$weekly_size = ($timeline_mode == 'weekly')?5:35;
$daily_size = 35;
@endphp
<div class="overlay overlay1"></div>
<section id="main-container" class="min-vh-100 container-fluid">
    <div class="container-xxxl container-main min-vh-100xx mx-auto">
        <div class="row justify-content-start align-items-start align-self-start  min-vh-100 pt-5">
            <div class="col-md-12 pt-5 text-center">
                <h2 class="page-title">{{ $page->title}}</h2>
                <div class="page-description size3">
                    {!! $page->description !!}
                </div>
                <div class="card bg-transparent border-0 card-schedule">
                    <div class="card-body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs border-0 ff-ibmplexmono-bold align-items-center justify-content-center" role="tablist">
                            <li class="nav-item rounded-0" role="presentation">
                                <button class="nav-link rounded-0 active" id="timeline-schedule-tab" data-bs-toggle="tab"
                                    data-bs-target="#timeline-schedule" type="button" role="tab" aria-controls="timeline-schedule"
                                    aria-selected="true">Timeline</button>
                            </li>
                            <li class="nav-item rounded-0" role="presentation">
                                <button class="nav-link rounded-0" id="board-schedule-tab" data-bs-toggle="tab"
                                    data-bs-target="#board-schedule" type="button" role="tab" aria-controls="board-schedule"
                                    aria-selected="false">Board</button>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane py-3 active" id="timeline-schedule" role="tabpanel" aria-labelledby="timeline-schedule-tab">
                                <div class="row">
                                    {{-- <div class="col-12 pt-5">
                                        <div class="btn-toolbar ff-ibmplexmono-bold float-start my-2" role="toolbar" aria-label="Toolbar">
                                            <div class="btn-group" role="group" aria-label="Button Group">
                                                <button type="button" class="btn btn-daily btn-warning rounded-0 me-2">Dayly</button>
                                                <button type="button" class="btn btn-weekly btn-warning rounded-0 me-2">Weekly</button>
                                                <button type="button" class="btn btn-monthly btn-warning rounded-0 me-2">Monthly</button>
                                            </div>
                                        </div>
                                        <div class="dropdown float-end ff-ibmplexmono-bold my-2">
                                            <button class="btn btn-secondary bg-animashit-primary rounded-0 dropdown-toggle" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside"
                                                    aria-expanded="false">
                                                Status
                                            </button>
                                            <div class="dropdown-menu rounded-0 p-0 bg-warning border-0" aria-labelledby="triggerId" data-bs-autoClose="outside">
                                                <div class="list-group bg-transparent py-2 border-0">
                                                    @foreach($schedule_status as $i => $st)
                                                    <label class="list-group-item bg-transparent ps-1 size6 border-dark border-0 ff-graphikregular border-top-0">
                                                        <input class="form-check-input" type="checkbox" value="{{ $st->id }}">
                                                        {{ $st->title }}
                                                    </label>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dropdown float-end ff-ibmplexmono-bold my-2">
                                            <button class="btn btn-secondary bg-animashit-primary rounded-0 dropdown-toggle" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside"
                                                    aria-expanded="false">
                                                Gigs
                                            </button>
                                            <div class="dropdown-menu rounded-0 p-0 bg-warning border-0" aria-labelledby="triggerId" data-bs-autoClose="outside">
                                                <div class="list-group bg-transparent py-2 border-0">
                                                    @foreach($gigs as $i => $gig)
                                                    <label class="list-group-item bg-transparent ps-1 size6 border-dark border-0 ff-graphikregular border-top-0">
                                                        <input class="form-check-input" type="checkbox" value="{{ $gig->id }}">
                                                        <span class="">{{ $gig->title }}</span>
                                                    </label>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}

                                    <div class="col-12">
                                        <div class="table-responsive">
                                            <table
                                                class="table ff-oswald table-schedule">
                                                <thead>
                                                    <tr class="tr-year">
                                                        <th rowspan="4" class="table-left row-span">
                                                            <span class="tiny">#</span>
                                                        </th>
                                                        <th rowspan="4" class="table-left row-span">
                                                            <span class="medium">Clients</span>
                                                        </th>
                                                        <th rowspan="4" class="table-left row-span table-left-border">
                                                            <span class="short">Status</span>
                                                        </th>
                                                        @php
                                                        foreach ($th_year as $i => $y) {
                                                            @endphp
                                                            <th class="schedule-year"
                                                                colspan="@php echo get_childs_number($th_year[$i], 2); @endphp">
                                                                @php echo $i; @endphp
                                                            </th>
                                                            @php
                                                        }
                                                        @endphp
                                                    </tr>
                                                    <tr class="tr-month">
                                                        @php
                                                        foreach ($th_year as $i => $y) {
                                                            foreach ($y as $i2 => $m) {
                                                                @endphp
                                                                <th class="schedule-month" colspan="@php echo get_childs_number($y[$i2], 1); @endphp">
                                                                    @php echo $i2; @endphp
                                                                </th>
                                                                @php
                                                            }
                                                        }
                                                        @endphp
                                                    </tr>
                                                    @if($timeline_mode == 'weekly')
                                                    <tr class="tr-week">
                                                        @php
                                                        $start_week = 0;
                                                        $weekbefore = 0;
                                                        foreach ($th_year as $i => $y) {
                                                            foreach ($y as $i2 => $m) {
                                                                foreach ($m as $i3 => $w) {
                                                                    $amount_days = get_childs_number($m[$i3], 0);
                                                                    $amount_days = ($start_week == 0)?$amount_days:7;
                                                                    $week_number = $i3;
                                                                    if($weekbefore !== $week_number)
                                                                    {

                                                                    @endphp
                                                                        <th colspan="@php echo $amount_days; @endphp">
                                                                            <span class="medium" style="width: @php echo (($amount_days * $weekly_size) + ($amount_days*10) - 10) . 'px'; @endphp ;">
                                                                                w @php echo $i3; @endphp
                                                                            </span>
                                                                        </th>
                                                                    @php
                                                                    }
                                                                    $weekbefore = $week_number;
                                                                    $start_week = 1;
                                                                }
                                                            }
                                                        }
                                                        @endphp
                                                    </tr>
                                                    @endif
                                                    {{-- <tr>
                                                        @php
                                                        foreach ($th_year as $i => $y) {
                                                            foreach ($y as $i2 => $m) {
                                                                foreach ($m as $i3 => $w) {
                                                                    @endphp
                                                                    <th colspan="@php echo get_childs_number($m[$i3], 0); @endphp">
                                                                        <span class="medium" style="width: @php echo ((get_childs_number($m[$i3], 0) * $weekly_size) + ((get_childs_number($m[$i3], 0) * 10) - 10)) . 'px'; @endphp ;">
                                                                            w @php echo $i3; @endphp
                                                                        </span>
                                                                    </th>
                                                                    @php
                                                                }
                                                            }
                                                        }
                                                        @endphp
                                                    </tr> --}}
                                                    @if($timeline_mode == "daily")
                                                    <tr class="tr-day">
                                                        @php
                                                        foreach ($th_year as $i => $y) {
                                                            foreach ($y as $i2 => $m) {
                                                                foreach ($m as $i3 => $w) {
                                                                    foreach ($w as $i3 => $d) {
                                                                        @endphp
                                                                        <th class="schedule-date">
                                                                            <span class="tiny">
                                                                                @php echo $d['date']; @endphp<br />
                                                                                @php echo substr($d['day_name'], 0, 3); @endphp
                                                                            </span>
                                                                        </th>
                                                                        @php
                                                                    }
                                                                }
                                                            }
                                                        }
                                                        @endphp
                                                    </tr>
                                                    @endif
                                                </thead>
                                                <tbody class="table-group-divider">
                                                    @php
                                                        $gigs = \App\Models\GigModel::all();
                                                        $status = \App\Models\ScheduleStatusModel::all();
                                                        $no = 0;
                                                    @endphp
                                                    @foreach($gigs as $i => $g)
                                                        @php
                                                        $schedules = \App\Models\ScheduleModel::whereIn('status',[1,2,3])->where('end_date','>=',date('Y-m-d'))->where('start_date','>=',date('Y-m-d',strtotime('-3 month')))->where('gig_id',$g->id)->get();
                                                        $no++;
                                                        @endphp
                                                        <tr class="tr-gigs">
                                                            <td class="text-start table-left">
                                                                <strong class="tiny">{{ $no }}</strong>
                                                            </td>
                                                            <td class="text-nowrap text-start table-left">
                                                                <p class="medium">
                                                                    <button type="button" class="btn btn-sm bg-animashit-secondary py-0 px-1 mb-1">
                                                                        <span class="fa fa-caret-right"></span>
                                                                    </button>
                                                                    <strong>{{ $g->title }}</strong>
                                                                </p>
                                                            </td>
                                                            <td class="text-nowrap text-start table-left table-left-border"><span class="tiny">&nbsp;</span></td>
                                                            @php
                                                                $start_week = 0;
                                                                $weekbefore = 0;
                                                            @endphp
                                                            @foreach ($th_year as $i => $y) 
                                                                @foreach ($y as $i2 => $m) 
                                                                    @if($timeline_mode == 'weekly')
                                                                        @foreach ($m as $i3 => $w)
                                                                        @php
                                                                            $amount_days = get_childs_number($m[$i3], 0);
                                                                            $amount_days = ($start_week == 0)?$amount_days:7;
                                                                            $week_number = $i3;
                                                                            if($weekbefore !== $week_number)
                                                                            {

                                                                            @endphp
                                                                                <td class="schedule-date position-relative" colspan="@php echo $amount_days; @endphp">
                                                                                    <span class="medium" style="width: @php echo (($amount_days * $weekly_size) + ($amount_days*10) - 10) . 'px'; @endphp ;">&nbsp;</span>
                                                                                </td>
                                                                            @php
                                                                            }
                                                                            $weekbefore = $week_number;
                                                                            $start_week = 1;
                                                                        @endphp
                                                                        @endforeach
                                                                    @endif
                                                                    @if($timeline_mode == 'daily')
                                                                        @foreach ($m as $i3 => $w)
                                                                            @foreach ($w as $i4 => $d) 
                                                                                <td class="schedule-date"><span class="tiny">&nbsp;</span></td>
                                                                            @endforeach
                                                                        @endforeach
                                                                    @endif
                                                                @endforeach
                                                            @endforeach
                                                        </tr>
                                                        @foreach($schedules as $i2 => $s)
                                                            <tr class="tr-tasks">
                                                                <td class="text-start table-left">
                                                                    <strong class="tiny">{{ $no }}.{{ $i2+1 }}</strong>
                                                                </td>
                                                                <td class="text-nowrap text-start table-left">
                                                                    <p class="medium">
                                                                        <button type="button" class="btn btn-sm py-0 px-1 mb-1">
                                                                            <span class="fa fa-minus"></span>
                                                                        </button>
                                                                        {{ $s->customer->nickname }}
                                                                    </p>
                                                                </td>
                                                                <td class="text-nowrap text-start border-right border-primary table-left table-left-border">
                                                                    @if($s->statusSchedule) <strong class="btn short p-1 size6 ff-sriracha" style="background-color: {{ $s->statusSchedule?->bg }}; color: {{ $s->statusSchedule?->color }}; border: 1px {{ $s->statusSchedule?->color }} solid;"> {{ $s->statusSchedule?->title }} </strong> @endif
                                                                </td>
                                                                
                                                                {{-- 
                                                                @for ($i = 0; $i < get_childs_number($th_year, 3); $i++)
                                                                    @php
                                                                        $curr_date = $th_year
                                                                        $scheduleItems = (isset($schedule_item_list[$s->gig_id]))?$schedule_item_list[$s->gig_id]:[];
                                                                    @endphp
                                                                    <td class="schedule-date"><span class="tiny">&nbsp;</span></td>
                                                                @endfor 
                                                                --}}

                                                                
                                                                @foreach ($th_year as $i => $y) 
                                                                    @foreach ($y as $i2 => $m) 
                                                                        @foreach ($m as $i3 => $w) 
                                                                            @if($timeline_mode == 'weekly')
                                                                                <td class="schedule-date position-relative" colspan="{{ count($w) }}">
                                                                                    @foreach ($w as $i4 => $d) 
                                                                                        @php
                                                                                            $scheduleItems = (isset($schedule_item_list[$s->id]))?$schedule_item_list[$s->id]:[];
                                                                                        @endphp
                                                                                        @if(isset($scheduleItems[$d['fulldate']]))
                                                                                            @foreach($scheduleItems[$d['fulldate']] as $isch => $sch)
                                                                                            @php
                                                                                                $start = new DateTime($sch->start_date);
                                                                                                $end = new DateTime($sch->end_date);
                                                                                                $duration = $end->diff($start);
                                                                                            @endphp
                                                                                            <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: {{ ((floor($duration->days) * $weekly_size) + (floor($duration->days)*10) - 10) }}px; position: absolute; left: 0px; z-index: 2; top: 0px; border: 1px {{ $s->statusSchedule?->bg }} solid; height: 25px;">
                                                                                                <div class="progress-bar py-1 overflow-visible text-dark progress-bar-striped progress-bar-animated size6 ff-sriracha overflow-visible text-dark d-flex flex-row" style="width: 100%; background-color: {{ $s->statusSchedule?->bg }}; color: {{ $s->statusSchedule?->color }};">
                                                                                                    <span class="bg-secondary text-light px-2 rounded-2 mx-2">{{ $sch->schedule->artist->nickname  }}</span> 
                                                                                                    <span class="bg-secondary text-light px-2 rounded-2 mx-2">{{ $sch->statusSchedule->title }}</span>
                                                                                                    {{-- {{$sch->start_date . '-' . $sch->end_date}} --}}
                                                                                                </div>
                                                                                            </div>
                                                                                            @endforeach
                                                                                        @endif
                                                                                    @endforeach
                                                                                </td>
                                                                            @endif
                                                                            @if($timeline_mode == 'daily')
                                                                                @foreach ($w as $i3 => $d) 
                                                                                    @php
                                                                                        $scheduleItems = (isset($schedule_item_list[$s->id]))?$schedule_item_list[$s->id]:[];
                                                                                    @endphp
                                                                                    <td class="schedule-date position-relative">
                                                                                        <span class="tiny">
                                                                                            @if(isset($scheduleItems[$d['fulldate']]))
                                                                                                @foreach($scheduleItems[$d['fulldate']] as $isch => $sch)
                                                                                                <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 400px; position: absolute; left: 0px; z-index: 2; top: 0px; margin-top: 5px !important; border: 1px {{ $s->statusSchedule?->color }} solid;">
                                                                                                    <div class="progress-bar progress-bar-striped progress-bar-animated size6 ff-sriracha" style="width: 100%; background-color: {{ $s->statusSchedule?->bg }}; color: {{ $s->statusSchedule?->color }};">{{ $sch->statusSchedule->title }}</div>
                                                                                                </div>
                                                                                                @endforeach
                                                                                            @endif
                                                                                        </span>
                                                                                    </td>
                                                                                @endforeach
                                                                            @endif
                                                                        @endforeach
                                                                    @endforeach
                                                                @endforeach
                                                            </tr>
                                                            {{--  @foreach($status as $i2 => $s)
                                                            <tr class="tr-tasks">
                                                                <td class="text-start table-left">
                                                                    <strong class="tiny">{{ $no }}.{{ $i2 }}</strong>
                                                                </td>
                                                                <td class="text-nowrap text-start table-left">
                                                                    <p class="short">
                                                                        <span class="fa fa-caret-right"></span>
                                                                        {{ $s->title }}
                                                                    </p>
                                                                </td>
                                                                <td class="text-nowrap text-start border-right border-primary table-left table-left-border">
                                                                    <strong class="btn btn-primary short p-1 size6 ff-poppins-regular">Waiting List</strong>
                                                                </td>
                                                                @for ($i = 0; $i < get_childs_number($th_year, 3); $i++)
                                                                    <td class="schedule-date"><span class="tiny">&nbsp;</span></td>
                                                                @endfor
                                                            </tr>
                                                            @endforeach --}}
                                                        @endforeach
                                                    @endforeach
                                                </tbody>
                                                <tfoot>

                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane py-3" id="board-schedule" role="tabpanel" aria-labelledby="board-schedule-tab">
                                <div class="row justify-content-start flex-nowrap align-items-start g-1">
                                    @foreach($schedule_status as $i => $st)
                                    <div class="col">
                                        <div class="card rounded-0 shadow-lg" style="background-color: {{ $st->bg}}; color: {{ $st->color }};">
                                            <div class="card-header">
                                                <h4 class="card-title size5 ff-sriracha">{{ $st->title }}</h4>
                                            </div>
                                            <div class="card-body py-1">
                                                <div class="accordion accordion-flush" id="accordianScheduleBoard{{ $st->id }}">
                                                    @foreach($gigs as $ig => $g)
                                                        @php
                                                            //$schedule_board = \App\Models\ScheduleModel::where('gig_id',$g->id)->get();
                                                            $schedule_board = \App\Models\ScheduleModel::whereIn('status',[1,2,3])->where('end_date','>=',date('Y-m-d'))->where('start_date','>=',date('Y-m-d',strtotime('-3 month')))->where('gig_id',$g->id)->get();
                                                        @endphp
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header ff-oswald" id="flush-heading{{$st->id}}-{{ $g->id }}">
                                                                <button href="javascript:void(0);" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{$st->id}}-{{ $g->id }}" aria-expanded="true" aria-controls="flush-collapse{{$st->id}}-{{ $g->id }}">
                                                                    {{$g->title}}
                                                                    <span class="mx-3 badge text-bg-info">{{ $schedule_board->count() }}</span>
                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapse{{$st->id}}-{{ $g->id }}" class="accordion-collapse collapse" aria-labelledby="flush-heading{{$st->id}}-{{ $g->id }}" data-bs-parent="#accordianScheduleBoard{{ $st->id }}">
                                                                <div class="accordion-body p-1">
                                                                    @foreach($schedule_board as $isc => $sc)
                                                                    <div class="card rounded-3 mt-2 bg-primary-subtle">
                                                                        <div class="card-header ff-ibmplexmono-bold">
                                                                            {{ $sc->customer->nickname }}
                                                                        </div>
                                                                        <div class="card-body p-1">
                                                                            <h4 class="card-title ff-caveat m-0">{{ $sc->artist->nickname }}</h4>
                                                                            <p class="card-text text-bg-secondary ff-dmsans-regular size6 rounded-3 py-1">
                                                                                <i class="fas fa-calendar-alt"></i> 
                                                                                {{ date('F j, Y', strtotime($sc->start_date)) . ' - ' . date('F j, Y', strtotime($sc->end_date)) }}
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
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
    </div>
</section>
@endsection

@section('script')
<script>
    $(document).ready(function(){
        $(".table-schedule tbody").on("scroll", function(e){
            var table = $(this).parents("table");
            var target = e.target;
            var top = target.scrollTop;
            var left = target.scrollLeft;
            $(table).find("thead").css("transform", `translateX(-${left}px)`);
            $(table).find(".table-left").css("transform", `translateX(${left}px)`);
            console.log(top, left);
        });
        $("body").on("click",".btn-daily", function(msg){
            $(".tr-day").show();
            $(".tr-week").show();
        });
        $("body").on("click",".btn-weekly", function(msg){
            $(".tr-day").hide();
            $(".tr-week").show();
        });
        $("body").on("click",".btn-monthly", function(msg){
            $(".tr-day").hide();
            $(".tr-week").hide();
            $(".schedule-month").each(function(i,v){
                var colspan = $(v).attr("colspan");
                //$(v).removeAttr("colspan");
                $(v).attr("data-colspan",colspan);
                $(v).css("width", (colspan * 600) + 'px');
                //$(v).css("display", 'block');
            });
            $(".row-span").
            $(".schedule-year").each(function(i,v){
                var colspan = $(v).attr("colspan");
                //$(v).removeAttr("colspan");
                $(v).attr("data-colspan",colspan);
                $(v).css("width", (colspan * 600) + 'px');
                //$(v).css("display", 'block');
            });
        });
    });
</script>
@endsection
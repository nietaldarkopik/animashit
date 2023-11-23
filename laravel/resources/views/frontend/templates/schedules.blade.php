@extends('../frontend.master')
@section('content')

@php
$start_date = date("Y-m-d", strtotime("2023-09-15"));
$end_date = date("Y-m-d", strtotime("2023-12-01"));

@endphp

@php
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
    $th_year[$date_tmp_y][$date_tmp_M][$date_tmp_w][] = ['day_no2' => $day_no2, 'day_no' => $day_no, 'day_name' => $date_tmp_day_name, 'date' => $date_tmp_d];

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

@endphp
<div class="overlay overlay1"></div>
<section id="main-container" class="min-vh-100 container-fluid">
    <div class="container-xxxl container-main min-vh-100xx mx-auto">
        <div class="row justify-content-start align-items-start align-self-start  min-vh-100 pt-5">
            <div class="col-md-12 pt-5 text-center">
                <h2 class="page-title">Our <strong>Schedules</strong></h2>
                <p class="page-description size3">
                    yowza upon so minor drat exhaust so whether gosh pfft ack zowie linear via ack
                    dashboard usher
                    practical drat excerpt
                </p>
                <div class="card bg-transparent border-0 card-schedule">
                    <div class="card-body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs border-0 ff-ibmplexmono-bold align-items-center justify-content-center" role="tablist">
                            <li class="nav-item rounded-0" role="presentation">
                                <button class="nav-link rounded-0 active" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                    aria-selected="true">Table</button>
                            </li>
                            <li class="nav-item rounded-0" role="presentation">
                                <button class="nav-link rounded-0" id="profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#profile" type="button" role="tab" aria-controls="profile"
                                    aria-selected="false">List</button>
                            </li>
                            <li class="nav-item rounded-0" role="presentation">
                                <button class="nav-link rounded-0" id="messages-tab" data-bs-toggle="tab"
                                    data-bs-target="#messages" type="button" role="tab" aria-controls="messages"
                                    aria-selected="false">Board</button>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-12 pt-5">
                                        <div class="btn-toolbar ff-ibmplexmono-bold float-start my-2" role="toolbar" aria-label="Toolbar">
                                            <div class="btn-group" role="group" aria-label="Button Group">
                                                <button type="button" class="btn btn-warning rounded-0 me-2">Dayly</button>
                                                <button type="button"
                                                    class="btn btn-warning rounded-0 me-2">Weekly</button>
                                                <button type="button"
                                                    class="btn btn-warning rounded-0 me-2">Monthly</button>
                                            </div>
                                        </div>
                                        <div class="dropdown float-end ff-ibmplexmono-bold my-2">
                                            <button class="btn btn-secondary bg-animashit-primary rounded-0 dropdown-toggle" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                Dropdown
                                            </button>
                                            <div class="dropdown-menu rounded-0 p-0 bg-warning border-0" aria-labelledby="triggerId">
                                                <div class="list-group bg-transparent px-0 py-2 border-0">
                                                    <label class="list-group-item bg-transparent ps-1 size6 border-dark border-0  border-top-0">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        First checkbox
                                                    </label>
                                                    <label class="list-group-item bg-transparent ps-1 size6 border-dark border-0 ">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        Second checkbox
                                                    </label>
                                                    <label class="list-group-item bg-transparent ps-1 size6 border-dark border-0 ">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        Third checkbox
                                                    </label>
                                                    <label class="list-group-item bg-transparent ps-1 size6 border-dark border-0 ">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        Fourth checkbox
                                                    </label>
                                                    <label class="list-group-item bg-transparent ps-1 size6 border-dark border-0  border-bottom-0">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        Fifth checkbox
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="table-responsive">
                                            <table
                                                class="table ff-oswald table-schedule">
                                                <thead>
                                                    <tr>
                                                        <th rowspan="4">#</th>
                                                        <th rowspan="4">Clients</th>
                                                        @php
                                                        foreach ($th_year as $i => $y) {
                                                            @endphp
                                                            <th
                                                                colspan="@php echo get_childs_number($th_year[$i], 2); @endphp">
                                                                @php echo $i; @endphp
                                                            </th>
                                                            @php
                                                        }
                                                        @endphp
                                                    </tr>
                                                    <tr>
                                                        @php
                                                        foreach ($th_year as $i => $y) {
                                                            foreach ($y as $i2 => $m) {
                                                                @endphp
                                                                <th colspan="@php echo get_childs_number($y[$i2], 1); @endphp">
                                                                    @php echo $i2; @endphp
                                                                </th>
                                                                @php
                                                            }
                                                        }
                                                        @endphp
                                                    </tr>
                                                    <!-- <tr>
                                                        @php
                                                        foreach ($th_year as $i => $y) {
                                                            foreach ($y as $i2 => $m) {
                                                                foreach ($m as $i3 => $w) {
                                                                    @endphp
                                                                    <th colspan="@php echo get_childs_number($m[$i3], 0); @endphp">
                                                                        w
                                                                        @php echo $i3; @endphp
                                                                    </th>
                                                                    @php
                                                                }
                                                            }
                                                        }
                                                        @endphp
                                                    </tr> -->
                                                    <tr>
                                                        @php
                                                        foreach ($th_year as $i => $y) {
                                                            foreach ($y as $i2 => $m) {
                                                                foreach ($m as $i3 => $w) {
                                                                    foreach ($w as $i3 => $d) {
                                                                        @endphp
                                                                        <th class="schedule-date">
                                                                            @php echo $d['date']; @endphp<br />
                                                                            @php echo substr($d['day_name'], 0, 3); @endphp
                                                                        </th>
                                                                        @php
                                                                    }
                                                                }
                                                            }
                                                        }
                                                        @endphp
                                                    </tr>
                                                </thead>
                                                <tbody class="table-group-divider">
                                                    @php
                                                        $gigs = \App\Models\GigModel::all();
                                                        $status = \App\Models\ScheduleStatusModel::all();
                                                        $no = 1;
                                                    @endphp
                                                    @foreach($gigs as $i => $g)
                                                    <tr class="tr-gigs">
                                                        <td class="text-start">
                                                            <strong>{{ $no++ }}</strong>
                                                        </td>
                                                        <td class="text-nowrap text-start">
                                                            <span class="fa fa-caret-right"></span>
                                                            <strong>{{ $g->title }}</strong>
                                                        </td>
                                                        @for ($i = 0; $i < get_childs_number($th_year, 3); $i++)
                                                            <td class="schedule-date">&nbsp;</td>
                                                        @endfor
                                                    </tr>
                                                    @foreach($status as $i2 => $s)
                                                    <tr class="tr-tasks">
                                                        <td class="text-start">
                                                            <strong>{{ $no }}.{{ $i2 }}</strong>
                                                        </td>
                                                        <td class="text-nowrap text-start">
                                                            <span class="fa fa-caret-right"></span>
                                                            {{ $s->title }}
                                                        </td>
                                                        @for ($i = 0; $i < get_childs_number($th_year, 3); $i++)
                                                            <td class="schedule-date">&nbsp;</td>
                                                        @endfor
                                                    </tr>
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
                            <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    @foreach($gigs as $i => $g)
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-heading{{$i}}">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{$i}}" aria-expanded="true" aria-controls="flush-collapse{{$i}}"  data-bs-parent="#flush-collapse{{$i}}">
                                                {{ $g->title }}
                                            </button>
                                            </h2>
                                            <div id="flush-collapse{{$i}}" class="accordion-collapse collapse" aria-labelledby="flush-heading{{$i}}" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">
                                                    <div class="card text-start">
                                                      <img class="card-img-top" src="holder.js/100px180/" alt="Title">
                                                      <div class="card-body">
                                                        <h4 class="card-title">Title</h4>
                                                        <p class="card-text">Body</p>
                                                      </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
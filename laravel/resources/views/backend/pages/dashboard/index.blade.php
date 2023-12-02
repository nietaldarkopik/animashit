@extends('backend.master')

@section('content')
    <div class="content-wrapper">
        {{-- <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card corona-gradient-card">
                    <div class="card-body py-0 px-0 px-sm-3">
                        <div class="row align-items-center">
                            <div class="col-4 col-sm-3 col-xl-2">
                                <img src="{{ url('backend/corona/assets/images/dashboard/Group126@2x.png') }}"
                                    class="gradient-corona-img img-fluid" alt="">
                            </div>
                            <div class="col-5 col-sm-7 col-xl-8 p-0">
                                <h4 class="mb-1 mb-sm-0">Want even more features?</h4>
                                <p class="mb-0 font-weight-normal d-none d-sm-block">Check out our Pro version with 5 unique
                                    layouts!</p>
                            </div>
                            <div class="col-3 col-sm-2 col-xl-2 ps-0 text-center">
                                <span>
                                    <a href="https://www.bootstrapdash.com/product/corona-admin-template/" target="_blank"
                                        class="btn btn-outline-light btn-rounded get-started-btn">Upgrade to PRO</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="row">
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <div class="d-flex align-items-center align-self-start">
                                    <h3 class="mb-0">
                                       {{ $open_project->count() }}
                                    </h3>
                                    {{-- <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p> --}}
                                </div>
                            </div>
                            <div class="col-3 d-none">
                                <div class="icon icon-box-success ">
                                    {{-- <span class="mdi mdi-arrow-top-right icon-item"></span> --}}
                                </div>
                            </div>
                        </div>
                        <h6 class="text-muted font-weight-normal">Project Open</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <div class="d-flex align-items-center align-self-start">
                                    <h3 class="mb-0">${{ $open_value }}</h3>
                                    {{-- <p class="text-success ms-2 mb-0 font-weight-medium">+11%</p> --}}
                                </div>
                            </div>
                            <div class="col-3 d-none">
                                <div class="icon icon-box-success">
                                    {{-- <span class="mdi mdi-arrow-top-right icon-item"></span> --}}
                                </div>
                            </div>
                        </div>
                        <h6 class="text-muted font-weight-normal">Project Value</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <div class="d-flex align-items-center align-self-start">
                                    <h3 class="mb-0">{{ $done_project->count() }}</h3>
                                    {{-- <p class="text-danger ms-2 mb-0 font-weight-medium">-2.4%</p> --}}
                                </div>
                            </div>
                            <div class="col-3 d-none">
                                <div class="icon icon-box-danger">
                                    <span class="mdi mdi-arrow-bottom-left icon-item"></span>
                                </div>
                            </div>
                        </div>
                        <h6 class="text-muted font-weight-normal">Project Done</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <div class="d-flex align-items-center align-self-start">
                                    <h3 class="mb-0">${{ $paid_value }}</h3>
                                    {{-- <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p> --}}
                                </div>
                            </div>
                            <div class="col-3 d-none">
                                <div class="icon icon-box-success ">
                                    {{-- <span class="mdi mdi-arrow-top-right icon-item"></span> --}}
                                </div>
                            </div>
                        </div>
                        <h6 class="text-muted font-weight-normal">Paid Project</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Successfull Project Percentage</h4>
                        <canvas id="transaction-history" class="transaction-chart"></canvas>
                        <div
                            class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-2 px-md-1 px-xl-2 rounded mt-3">
                            <div class="text-md-center text-xl-left">
                                <h6 class="mb-1">Overall Project</h6>
                                {{-- <p class="text-muted mb-0">07 Jan 2019, 09:12AM</p> --}}
                            </div>
                            <div
                                class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                                <h6 class="font-weight-bold text-right mb-0">$236</h6>
                            </div>
                        </div>
                        <div
                            class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-2 px-md-1 px-xl-2 rounded mt-3">
                            <div class="text-md-center text-xl-left">
                                <h6 class="mb-1">Unfinished Project</h6>
                                {{-- <p class="text-muted mb-0">07 Jan 2019, 09:12AM</p> --}}
                            </div>
                            <div
                                class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                                <h6 class="font-weight-bold text-right mb-0">$593</h6>
                            </div>
                        </div>
                        <div
                            class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-2 px-md-1 px-xl-2 rounded mt-3">
                            <div class="text-md-center text-xl-left">
                                <h6 class="mb-1">Finished Project</h6>
                                {{-- <p class="text-muted mb-0">07 Jan 2019, 09:12AM</p> --}}
                            </div>
                            <div
                                class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                                <h6 class="font-weight-bold text-right mb-0">$593</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-row justify-content-between">
                            <h4 class="card-title mb-1">Open Projects</h4>
                            <p class="text-muted mb-1">Your data status</p>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="preview-list overflow-auto" style="height: 450px;">
                                    @foreach($open_project as $i => $p)
                                    <div class="preview-item border-bottom d-flex">
                                        <div class="preview-thumbnail col-1">
                                            <div class="preview-icon bg-primary">
                                                <i class="mdi mdi-file-document"></i>
                                            </div>
                                        </div>
                                        <div class="preview-item-content d-sm-flex flex-grow">
                                            <div class="flex-grow">
                                                <h6 class="preview-subject">
                                                    {{ $p->customer->nickname }}
                                                </h6>
                                                {{-- <p class="text-muted mb-0"> --}}
                                                    {{ $p->gigPackage->gig->title }} / 
                                                    {{ $p->gigPackage->title }}
                                                </p>
                                            </div>
                                            <div class="me-auto text-right pt-2 pt-sm-0 col-12 col-sm-4">
                                                <p class="text-muted text-right">{{ date("F j, Y", strtotime($p->date)) }}</p>
                                                <p class="text-muted text-right mb-0">${{ $p->price }}</p>
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
        {{-- 
        <div class="row">
            <div class="col-sm-4 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h5>Revenue</h5>
                        <div class="row">
                            <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                <div class="d-flex d-sm-block d-md-flex align-items-center">
                                    <h2 class="mb-0">$32123</h2>
                                    <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p>
                                </div>
                                <h6 class="text-muted font-weight-normal">11.38% Since last month</h6>
                            </div>
                            <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                <i class="icon-lg mdi mdi-codepen text-primary ms-auto"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h5>Sales</h5>
                        <div class="row">
                            <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                <div class="d-flex d-sm-block d-md-flex align-items-center">
                                    <h2 class="mb-0">$45850</h2>
                                    <p class="text-success ms-2 mb-0 font-weight-medium">+8.3%</p>
                                </div>
                                <h6 class="text-muted font-weight-normal"> 9.61% Since last month</h6>
                            </div>
                            <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                <i class="icon-lg mdi mdi-wallet-travel text-danger ms-auto"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h5>Purchase</h5>
                        <div class="row">
                            <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                <div class="d-flex d-sm-block d-md-flex align-items-center">
                                    <h2 class="mb-0">$2039</h2>
                                    <p class="text-danger ms-2 mb-0 font-weight-medium">-2.1% </p>
                                </div>
                                <h6 class="text-muted font-weight-normal">2.27% Since last month</h6>
                            </div>
                            <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                <i class="icon-lg mdi mdi-monitor text-success ms-auto"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         --}}
       {{--  <div class="row ">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Order Status</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="form-check form-check-muted m-0">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input">
                                                </label>
                                            </div>
                                        </th>
                                        <th> Client Name </th>
                                        <th> Order No </th>
                                        <th> Product Cost </th>
                                        <th> Project </th>
                                        <th> Payment Mode </th>
                                        <th> Start Date </th>
                                        <th> Payment Status </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-muted m-0">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input">
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <img src="{{ url('backend/corona/assets/images/faces/face1.jpg') }}"
                                                alt="image" />
                                            <span class="ps-2">Henry Klein</span>
                                        </td>
                                        <td> 02312 </td>
                                        <td> $14,500 </td>
                                        <td> Dashboard </td>
                                        <td> Credit card </td>
                                        <td> 04 Dec 2019 </td>
                                        <td>
                                            <div class="badge badge-outline-success">Approved</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-muted m-0">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input">
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <img src="{{ url('backend/corona/assets/images/faces/face2.jpg') }}"
                                                alt="image" />
                                            <span class="ps-2">Estella Bryan</span>
                                        </td>
                                        <td> 02312 </td>
                                        <td> $14,500 </td>
                                        <td> Website </td>
                                        <td> Cash on delivered </td>
                                        <td> 04 Dec 2019 </td>
                                        <td>
                                            <div class="badge badge-outline-warning">Pending</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-muted m-0">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input">
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <img src="{{ url('backend/corona/assets/images/faces/face5.jpg') }}"
                                                alt="image" />
                                            <span class="ps-2">Lucy Abbott</span>
                                        </td>
                                        <td> 02312 </td>
                                        <td> $14,500 </td>
                                        <td> App design </td>
                                        <td> Credit card </td>
                                        <td> 04 Dec 2019 </td>
                                        <td>
                                            <div class="badge badge-outline-danger">Rejected</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-muted m-0">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input">
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <img src="{{ url('backend/corona/assets/images/faces/face3.jpg') }}"
                                                alt="image" />
                                            <span class="ps-2">Peter Gill</span>
                                        </td>
                                        <td> 02312 </td>
                                        <td> $14,500 </td>
                                        <td> Development </td>
                                        <td> Online Payment </td>
                                        <td> 04 Dec 2019 </td>
                                        <td>
                                            <div class="badge badge-outline-success">Approved</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-muted m-0">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input">
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <img src="{{ url('backend/corona/assets/images/faces/face4.jpg') }}"
                                                alt="image" />
                                            <span class="ps-2">Sallie Reyes</span>
                                        </td>
                                        <td> 02312 </td>
                                        <td> $14,500 </td>
                                        <td> Website </td>
                                        <td> Credit card </td>
                                        <td> 04 Dec 2019 </td>
                                        <td>
                                            <div class="badge badge-outline-success">Approved</div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="row">
            <div class="col-md-6 col-xl-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-row justify-content-between">
                            <h4 class="card-title">Messages</h4>
                            <p class="text-muted mb-1 small">View all</p>
                        </div>
                        <div class="preview-list">

                            @php
                            $contact = \App\Models\ContactModel::orderBy('id','desc')->limit(5)->get();
                            @endphp

                            @foreach($contact as $i => $c)
                            <div class="preview-item border-bottom">
                                <div class="preview-thumbnail">
                                    <img src="{{ url('backend/corona/assets/images/faces-clipart/pic-2.png') }}" alt="image"
                                        class="rounded-circle" />
                                </div>
                                <div class="preview-item-content d-flex flex-grow">
                                    <div class="flex-grow">
                                        <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                            <h6 class="preview-subject">{{ $c->name }}</h6>
                                            <p class="text-muted text-small">{{ date("F j, Y", strtotime($c->created_at)) }}</p>
                                        </div>
                                        <p class="text-muted">{{ $c->subject }}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
            {{-- 
            <div class="col-md-6 col-xl-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Portfolio Slide</h4>
                        <div class="owl-carousel owl-theme full-width owl-carousel-dash portfolio-carousel"
                            id="owl-carousel-basic">
                            <div class="item">
                                <img src="{{ url('backend/corona/assets/images/dashboard/Rectangle.jpg') }}"
                                    alt="">
                            </div>
                            <div class="item">
                                <img src="{{ url('backend/corona/assets/images/dashboard/Img_5.jpg') }}"
                                    alt="">
                            </div>
                            <div class="item">
                                <img src="{{ url('backend/corona/assets/images/dashboard/img_6.jpg') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="d-flex py-4">
                            <div class="preview-list w-100">
                                <div class="preview-item p-0">
                                    <div class="preview-thumbnail">
                                        <img src="{{ url('backend/corona/assets/images/faces/face12.jpg') }}"
                                            class="rounded-circle" alt="">
                                    </div>
                                    <div class="preview-item-content d-flex flex-grow">
                                        <div class="flex-grow">
                                            <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                                <h6 class="preview-subject">CeeCee Bass</h6>
                                                <p class="text-muted text-small">4 Hours Ago</p>
                                            </div>
                                            <p class="text-muted">Well, it seems to be working now.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="text-muted">Well, it seems to be working now. </p>
                        <div class="progress progress-md portfolio-progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 50%"
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
             --}}
            {{-- <div class="col-md-6 col-xl-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">To do list</h4>
                        <div class="add-items d-flex">
                            <input type="text" class="form-control todo-list-input" placeholder="enter task..">
                            <button class="add btn btn-primary todo-list-add-btn">Add</button>
                        </div>
                        <div class="list-wrapper">
                            <ul class="d-flex flex-column-reverse text-white todo-list todo-list-custom">
                                <li>
                                    <div class="form-check form-check-primary">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox"> Create invoice </label>
                                    </div>
                                    <i class="remove mdi mdi-close-box"></i>
                                </li>
                                <li>
                                    <div class="form-check form-check-primary">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox"> Meeting with Alita </label>
                                    </div>
                                    <i class="remove mdi mdi-close-box"></i>
                                </li>
                                <li class="completed">
                                    <div class="form-check form-check-primary">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox" checked> Prepare for presentation
                                        </label>
                                    </div>
                                    <i class="remove mdi mdi-close-box"></i>
                                </li>
                                <li>
                                    <div class="form-check form-check-primary">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox"> Plan weekend outing </label>
                                    </div>
                                    <i class="remove mdi mdi-close-box"></i>
                                </li>
                                <li>
                                    <div class="form-check form-check-primary">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox"> Pick up kids from school </label>
                                    </div>
                                    <i class="remove mdi mdi-close-box"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="col-md-6 col-xl-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Schedules</h4>
                        <!-- Some borders are removed -->
                        <div class="list-wrapper">
                            <ul class="list-group list-group-flush bg-transparent" style="height: 400px; overflow: auto;">
                                <li class="list-group-item bg-transparent text-light"></li>
                                @php
                                     $schedules = \App\Models\ScheduleModel::where('status','!=',3)->orderBy('start_date','desc')->orderBy('end_date','asc')->get();
                                @endphp 
                                @foreach($schedules as $i => $sc)
                                <li class="list-group-item bg-transparent text-light">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">{{ $sc->gig->title }} | {{ $sc->order->gigPackage->title }}</div>
                                        <div>Artist : <strong>{{ $sc->artist->nickname }}</strong></div>
                                        <div>Customer : <strong>{{ $sc->customer->nickname }}</strong></div>
                                        <i><small class="ff-caveat">{{ date("F j, Y", strtotime($sc->start_date)) }} - {{ date("F j, Y", strtotime($sc->end_date)) }}</small></i>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        {{-- 
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Visitors by Countries</h4>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <i class="flag-icon flag-icon-us"></i>
                                                </td>
                                                <td>USA</td>
                                                <td class="text-right"> 1500 </td>
                                                <td class="text-right font-weight-medium"> 56.35% </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="flag-icon flag-icon-de"></i>
                                                </td>
                                                <td>Germany</td>
                                                <td class="text-right"> 800 </td>
                                                <td class="text-right font-weight-medium"> 33.25% </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="flag-icon flag-icon-au"></i>
                                                </td>
                                                <td>Australia</td>
                                                <td class="text-right"> 760 </td>
                                                <td class="text-right font-weight-medium"> 15.45% </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="flag-icon flag-icon-gb"></i>
                                                </td>
                                                <td>United Kingdom</td>
                                                <td class="text-right"> 450 </td>
                                                <td class="text-right font-weight-medium"> 25.00% </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="flag-icon flag-icon-ro"></i>
                                                </td>
                                                <td>Romania</td>
                                                <td class="text-right"> 620 </td>
                                                <td class="text-right font-weight-medium"> 10.25% </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="flag-icon flag-icon-br"></i>
                                                </td>
                                                <td>Brasil</td>
                                                <td class="text-right"> 230 </td>
                                                <td class="text-right font-weight-medium"> 75.00% </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div id="audience-map" class="vector-map"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        --}}
    </div>
@endsection

@extends('backend.master')

@section('content')
    <div class="content-wrapper">
        <div class="card border-yellow">
            <div class="card-body">
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
                                    <a href="https://www.bootstrapdash.com/order/corona-admin-template/" target="_blank"
                                        class="btn btn-outline-light
        btn-rounded get-started-btn">Upgrade to PRO</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
                <div class="row">
                    <div class="col-lg-12 margin-tb mb-4">
                        <div class="pull-left">
                            <h2>Schedule Management
                                <div class="float-end">
                                    @can('admin.orders.create')
                                        <a class="btn btn-success" href="{{ route('admin.schedules.create') }}"> Create New
                                            Schedule</a>
                                    @endcan
                                </div>
                            </h2>
                        </div>
                    </div>
                </div>

                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif

                <div class="table-responsive-lg">
                    <table class="table table-hover table-striped table-animashit d-flex d-sm-table">
                        <thead>
                            <tr class="d-none d-sm-table-row">
                                <th class="col-sm" width="50">No</th>
                                <th class="col-sm">Order</th>
                                <th class="col-sm">Gig</th>
                                <th class="col-sm">Artist</th>
                                <th class="col-sm">Customer</th>
                                <th class="col-sm">Start Date</th>
                                <th class="col-sm">End Date</th>
                                <th class="col-sm text-end">Status</th>
                                <th class="col-sm" width="100">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = ($schedules->currentPage() - 1) * $schedules->perPage() + 1;
                            @endphp

                            @foreach ($schedules as $key => $schedule)
                                <tr class="d-flex d-sm-table-row flex-sm-column row mb-2 m-0">
                                    <td class="d-none d-sm-table-cell col-12 col-sm-auto">
                                        <h4>{{ $no++ }}</h4>
                                    </td>
                                    <td class="d-sm-table-cell col-6 col-sm-auto">
                                        #{{ str_pad($schedule->order_id, 6, 0, STR_PAD_LEFT) }}
                                    </td>
                                    <td class="d-sm-table-cell col-6 col-sm-auto">
                                        {{ $schedule->gig->title }}
                                    </td>
                                    <td class="d-sm-table-cell col-6 col-sm-auto">
                                        {{ $schedule->artist->nickname }}
                                    </td>
                                    <td class="d-sm-table-cell col-6 col-sm-auto">
                                        {{ $schedule->customer->nickname }}
                                    </td>
                                    <td class="d-sm-table-cell col-6 col-sm-auto">
                                        {{ $schedule->start_date }}
                                    </td>
                                    <td class="d-sm-table-cell col-6 col-sm-auto">
                                        {{ $schedule->end_date }}
                                    </td>
                                    <td class="d-sm-table-cell col-12 text-end">
                                        <span class="badge"
                                            style="background-color: {{ $schedule->statusSchedule->bg ?? '' }}; color: {{ $schedule->statusSchedule->color ?? '' }};">{{ $schedule->statusSchedule->title ?? '' }}</span>
                                    </td>
                                    <td>
                                        <form action="{{ route('admin.schedules.destroy', $schedule->id) }}"
                                            method="POST">
                                            <a class="btn btn-info"
                                                href="{{ route('admin.schedules.show', $schedule->id) }}">Show</a>
                                            @can('admin.orders.edit')
                                                <a class="btn btn-primary"
                                                    href="{{ route('admin.schedules.edit', $schedule->id) }}">Edit</a>
                                            @endcan


                                            @csrf
                                            @method('DELETE')
                                            @can('admin.orders.destroy')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            @endcan
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                {!! $schedules->render() !!}
            </div>
        </div>
    </div>
@endsection

@extends('backend.master')


@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-12 mb-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="pull-left">
                                        <h2> Show Schedule
                                            <div class="float-end">
                                                <a class="btn btn-primary" href="{{ route('admin.schedules.index') }}">
                                                    Back</a>
                                            </div>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 mb-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="float-start">
                                        <h2>#{{ str_pad($schedule->order->id,6,0,STR_PAD_LEFT)}}</h2>
                                        <h4>{{ $schedule->gig->title }}</h4>
                                        <h4>{{ $schedule->order->gigPackage->title }}</h4>
                                        <span>Note:</span><br/>
                                        <p>{{ $schedule->note }}</p>
                                    </div>
                                    <div class="float-end text-end">
                                        <h2>$ {{ number_format($schedule->price) }}</h2>
                                        <p>{{ $schedule->date }}</p>
                                        <span class="badge" style="background-color: {{ $schedule->statusSchedule->bg }}; color: {{ $schedule->statusSchedule->color }};">
                                            {{ $schedule->statusSchedule->title }}
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex flex-row justify-content-between align-items-stretch g-2">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="card h-100">
                        <div class="card-header">
                            <span class="card-title">Customer</span>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                    <img class="img-thumbnail" src="{{ url('uploads/customers/'.$schedule->customer->avatar)}}" width="100"/>
                                </div>
                                <div class="col-8">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                {{ $schedule->customer->name }}
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                ({{ $schedule->customer->nickname }})
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex">
                                <div class="col-4">
                                    Avatar
                                </div>
                                <div class="col">
                                    {{ $schedule->customer->avatar }}
                                </div>
                            </li>
                            <li class="list-group-item d-flex">
                                <div class="col-4">
                                    Country
                                </div>
                                <div class="col">
                                    {{ $schedule->customer->country }}
                                </div>
                            </li>
                            <li class="list-group-item d-flex">
                                <div class="col-4">
                                    Email
                                </div>
                                <div class="col">
                                    {{ $schedule->customer->email }}
                                </div>
                            </li>
                            <li class="list-group-item d-flex">
                                <div class="col-4">
                                    Phone
                                </div>
                                <div class="col">
                                    {{ $schedule->customer->phone }}
                                </div>
                            </li>
                            <li class="list-group-item d-flex">
                                <div class="col-4">
                                    Twitter
                                </div>
                                <div class="col">
                                    {{ $schedule->customer->twitter }}
                                </div>
                            </li>
                            <li class="list-group-item d-flex">
                                <div class="col-4">
                                    Ig
                                </div>
                                <div class="col">
                                    {{ $schedule->customer->ig }}
                                </div>
                            </li>
                            <li class="list-group-item d-flex">
                                <div class="col-4">
                                    Facebook
                                </div>
                                <div class="col">
                                    {{ $schedule->customer->facebook }}
                                </div>
                            </li>
                            <li class="list-group-item d-flex">
                                <div class="col-4">
                                    Youtube
                                </div>
                                <div class="col">
                                    {{ $schedule->customer->youtube }}
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="card h-100">
                        <div class="card-header">
                            <span class="card-title">Artist</span>
                        </div>
                        <div class="card-body">
                            <div class="row d-flex">
                                <div class="col-4 ">
                                    <img class="img-fluid" src="{{ url('uploads/artists/'.$schedule->artist->avatar)}}" width="100"/>
                                </div>
                                <div class="col-8 ">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                {{ $schedule->artist->name }}
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                ({{ $schedule->artist->nickname }})
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex">
                                <div class="col-4">
                                    Avatar
                                </div>
                                <div class="col">
                                    {{ $schedule->artist->avatar }}
                                </div>
                            </li>
                            <li class="list-group-item d-flex">
                                <div class="col-4">
                                    Country
                                </div>
                                <div class="col">
                                    {{ $schedule->artist->country }}
                                </div>
                            </li>
                            <li class="list-group-item d-flex">
                                <div class="col-4">
                                    Email
                                </div>
                                <div class="col">
                                    {{ $schedule->artist->email }}
                                </div>
                            </li>
                            <li class="list-group-item d-flex">
                                <div class="col-4">
                                    Phone
                                </div>
                                <div class="col">
                                    {{ $schedule->artist->phone }}
                                </div>
                            </li>
                            <li class="list-group-item d-flex">
                                <div class="col-4">
                                    Twitter
                                </div>
                                <div class="col">
                                    {{ $schedule->artist->twitter }}
                                </div>
                            </li>
                            <li class="list-group-item d-flex">
                                <div class="col-4">
                                    Ig
                                </div>
                                <div class="col">
                                    {{ $schedule->artist->ig }}
                                </div>
                            </li>
                            <li class="list-group-item d-flex">
                                <div class="col-4">
                                    Facebook
                                </div>
                                <div class="col">
                                    {{ $schedule->artist->facebook }}
                                </div>
                            </li>
                            <li class="list-group-item d-flex">
                                <div class="col-4">
                                    Youtube
                                </div>
                                <div class="col">
                                    {{ $schedule->artist->youtube }}
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

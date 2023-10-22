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
                                        <h2> Show Order
                                            <div class="float-end">
                                                <a class="btn btn-primary" href="{{ route('admin.orders.index') }}">
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
                                        <h2>#{{ str_pad($order->id,6,0,STR_PAD_LEFT)}}</h2>
                                        <h4>{{ $order->gigPackage->gig->title }}</h4>
                                        <h4>{{ $order->gigPackage->title }}</h4>
                                        <span>Note:</span><br/>
                                        <p>{{ $order->note }}</p>
                                    </div>
                                    <div class="float-end text-end">
                                        <h2>$ {{ number_format($order->price) }}</h2>
                                        <p>{{ $order->date }}</p>
                                        <span class="badge" style="background-color: {{ $order->orderStatus->bg }}; color: {{ $order->orderStatus->color }};">
                                            {{ $order->orderStatus->title }}
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
                                    <img class="img-thumbnail" src="{{ asset('uploads/customers/'.$order->customer->avatar)}}" width="100"/>
                                </div>
                                <div class="col-8">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                {{ $order->customer->name }}
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                ({{ $order->customer->nickname }})
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
                                    {{ $order->customer->avatar }}
                                </div>
                            </li>
                            <li class="list-group-item d-flex">
                                <div class="col-4">
                                    Country
                                </div>
                                <div class="col">
                                    {{ $order->customer->country }}
                                </div>
                            </li>
                            <li class="list-group-item d-flex">
                                <div class="col-4">
                                    Email
                                </div>
                                <div class="col">
                                    {{ $order->customer->email }}
                                </div>
                            </li>
                            <li class="list-group-item d-flex">
                                <div class="col-4">
                                    Phone
                                </div>
                                <div class="col">
                                    {{ $order->customer->phone }}
                                </div>
                            </li>
                            <li class="list-group-item d-flex">
                                <div class="col-4">
                                    Twitter
                                </div>
                                <div class="col">
                                    {{ $order->customer->twitter }}
                                </div>
                            </li>
                            <li class="list-group-item d-flex">
                                <div class="col-4">
                                    Ig
                                </div>
                                <div class="col">
                                    {{ $order->customer->ig }}
                                </div>
                            </li>
                            <li class="list-group-item d-flex">
                                <div class="col-4">
                                    Facebook
                                </div>
                                <div class="col">
                                    {{ $order->customer->facebook }}
                                </div>
                            </li>
                            <li class="list-group-item d-flex">
                                <div class="col-4">
                                    Youtube
                                </div>
                                <div class="col">
                                    {{ $order->customer->youtube }}
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
                                    <img class="img-fluid" src="{{ asset('uploads/artists/'.$order->gigPackage->artist->avatar)}}" width="100"/>
                                </div>
                                <div class="col-8 ">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                {{ $order->gigPackage->artist->name }}
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                ({{ $order->gigPackage->artist->nickname }})
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
                                    {{ $order->gigPackage->artist->avatar }}
                                </div>
                            </li>
                            <li class="list-group-item d-flex">
                                <div class="col-4">
                                    Country
                                </div>
                                <div class="col">
                                    {{ $order->gigPackage->artist->country }}
                                </div>
                            </li>
                            <li class="list-group-item d-flex">
                                <div class="col-4">
                                    Email
                                </div>
                                <div class="col">
                                    {{ $order->gigPackage->artist->email }}
                                </div>
                            </li>
                            <li class="list-group-item d-flex">
                                <div class="col-4">
                                    Phone
                                </div>
                                <div class="col">
                                    {{ $order->gigPackage->artist->phone }}
                                </div>
                            </li>
                            <li class="list-group-item d-flex">
                                <div class="col-4">
                                    Twitter
                                </div>
                                <div class="col">
                                    {{ $order->gigPackage->artist->twitter }}
                                </div>
                            </li>
                            <li class="list-group-item d-flex">
                                <div class="col-4">
                                    Ig
                                </div>
                                <div class="col">
                                    {{ $order->gigPackage->artist->ig }}
                                </div>
                            </li>
                            <li class="list-group-item d-flex">
                                <div class="col-4">
                                    Facebook
                                </div>
                                <div class="col">
                                    {{ $order->gigPackage->artist->facebook }}
                                </div>
                            </li>
                            <li class="list-group-item d-flex">
                                <div class="col-4">
                                    Youtube
                                </div>
                                <div class="col">
                                    {{ $order->gigPackage->artist->youtube }}
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

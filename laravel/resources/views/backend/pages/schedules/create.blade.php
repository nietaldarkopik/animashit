@extends('backend.master')

@section('content')
    <div class="content-wrapper">
        <div class="card border-yellow">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 margin-tb mb-4">
                        <div class="pull-left">
                            <h2>Create New Schedule
                                <div class="float-end">
                                    <a class="btn btn-primary" href="{{ route('admin.schedules.index') }}"> Back</a>
                                </div>
                            </h2>
                        </div>
                    </div>
                </div>

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('admin.schedules.store') }}" method="POST">
                    @csrf
                    @method('post')
                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Order:</strong>
                                <select name="order_id" class="form-control" placeholder="Order">
                                    <option value="0">Choose Order...</option>
                                    @foreach($orders as $i => $order)
                                    <option value="{{ $order->id }}" 
                                        data-package="{{ $order->gigPackage->id}}" 
                                        data-gig="{{ $order->gigPackage->gig->id}}" 
                                        data-artist="{{ $order->gigPackage->artist->id}}" 
                                        data-customer="{{ $order->customer->id}}">#{{ str_pad($order->id,6,0,STR_PAD_LEFT) }} / {{ $order->gigPackage?->gig?->title }} / {{ $order->gigPackage?->title }} / {{ $order->customer->nickname }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Package:</strong>
                                <select name="gig_id" class="form-control" placeholder="Package">
                                    <option value="0">Choose Gig...</option>
                                    @foreach($gigs as $i => $gig)
                                    <option value="{{ $gig->id }}">{{ $gig->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Artist:</strong>
                                <select name="artist_id" class="form-control" placeholder="Artist">
                                    <option value="0">Choose Artist...</option>
                                    @foreach($artists as $i => $artist)
                                    <option value="{{ $artist->id }}">{{ $artist->name }} / {{ $artist->nickname }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Customer:</strong>
                                <select name="customer_id" class="form-control" placeholder="Customer">
                                    <option value="0">Choose Customer...</option>
                                    @foreach($customers as $i => $customer)
                                    <option value="{{ $customer->id }}">{{ $customer->name }} / {{ $customer->nickname }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Start Date:</strong>
                                <input type="date" name="start_date" class="form-control" placeholder="Start Date">
                            </div>
                        </div>
                        
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>End Date:</strong>
                                <input type="date" name="end_date" class="form-control" placeholder="End Date">
                            </div>
                        </div>
                        
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Status:</strong>
                                <select name="status" class="form-control" placeholder="Status">
                                    <option value="0">Choose Status...</option>
                                    @foreach($schedule_status as $i => $status)
                                    <option value="{{ $status->id }}" style="background-color: {{ $status->bg }}; color: {{ $status->color }}">{{ $status->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

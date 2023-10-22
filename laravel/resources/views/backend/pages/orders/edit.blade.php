@extends('backend.master')


@section('content')
    <div class="content-wrapper">
        <div class="card border-yellow">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2>Edit Order
                                <div class="float-end">
                                    <a class="btn btn-primary" href="{{ route('admin.orders.index') }}"> Back</a>
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

                <form action="{{ route('admin.orders.update', $order->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="row">

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Customer:</strong>
                                    <select name="customer_id" class="form-control" placeholder="Customer">
                                        <option value="0">Choose Customer...</option>
                                        @foreach ($customers as $i => $customer)
                                            <option value="{{ $customer->id }}" @if($customer->id == $order->customer_id) selected="selected" @endif>{{ $customer->name }} /
                                                {{ $customer->nickname }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Package:</strong>
                                    <select name="gig_package_id" class="form-control" placeholder="Package">
                                        @foreach ($packages as $i => $package)
                                            <option value="{{ $package->id }}"  @if($package->id == $order->gig_package_id) selected="selected" @endif>{{ $package->gig->title }} /
                                                {{ $package->title }} / {{ $package->artist->name }} /
                                                {{ $package->price }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Prices:</strong>
                                    <input value="{{$order->text}}" type="text" name="price" class="form-control" placeholder="Prices">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Date:</strong>
                                    <input value="{{$order->date}}" type="date" format name="date" class="form-control" placeholder="Date">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Status:</strong>
                                    <select name="status" class="form-control" placeholder="Status">
                                        <option value="0">Choose Status...</option>
                                        @foreach ($order_status as $i => $status)
                                            <option value="{{ $status->id }}" @if($status->id == $order->status) selected="selected" @endif
                                                style="background-color: {{ $status->bg }}; color: {{ $status->color }}">
                                                {{ $status->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Notes:</strong>
                                    <textarea name="note" class="form-control" placeholder="Notes">{{$order->note}}</textarea>
                                </div>
                            </div>
                            <div class="col-xs-12 mb-3 text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>

@endsection

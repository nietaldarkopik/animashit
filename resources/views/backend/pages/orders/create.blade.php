@extends('backend.master')

@section('content')
    <div class="content-wrapper">
        <div class="card border-yellow">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 margin-tb mb-4">
                        <div class="pull-left">
                            <h2>Create New Order
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

                <form action="{{ route('admin.orders.store') }}" method="POST">
                    @csrf
                    @method('post')
                    <div class="row">
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
                                <strong>Package:</strong>
                                <select name="gig_package_id" class="form-control" placeholder="Package">
                                    <option value="0">Choose Package...</option>
                                    @foreach($packages as $i => $package)
                                    <option value="{{ $package->id }}">{{ $package->gig->title }} / {{ $package->title }} / {{ $package->artist->name }} / {{ $package->price }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Prices:</strong>
                                <input type="text" name="price" class="form-control" placeholder="Prices">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Date:</strong>
                                <input type="date" format name="date" class="form-control" placeholder="Date">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Status:</strong>
                                <select name="status" class="form-control" placeholder="Status">
                                    <option value="0">Choose Status...</option>
                                    @foreach($order_status as $i => $status)
                                    <option value="{{ $status->id }}" style="background-color: {{ $status->bg }}; color: {{ $status->color }}">{{ $status->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Notes:</strong>
                                <textarea name="note" class="form-control" placeholder="Notes"></textarea>
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

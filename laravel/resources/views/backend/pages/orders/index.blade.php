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
                                <img src="{{ asset('backend/corona/assets/images/dashboard/Group126@2x.png') }}"
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
                            <h2>Order Management
                                <div class="float-end">
                                    @can('order-create')
                                        <a class="btn btn-success" href="{{ route('admin.orders.create') }}"> Create New Order</a>
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
                    <table class="table table-hover table-animashit d-flex d-sm-table">
                        <thead>
                            <tr class="d-none d-sm-table-row">
                                <th width="50">No</th>
                                <th>Order</th>
                                <th>Package</th>
                                <th>Customer</th>
                                <th>Artist</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th width="100">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = ($orders->currentPage() - 1) * $orders->perPage() + 1;
                            @endphp

                            @foreach ($orders as $key => $order)
                                <tr class="d-flex d-sm-table-row flex-sm-column row mb-2 m-0">
                                    <td class="d-none d-sm-table-cell col-12 col-sm-auto">{{ $no++ }}</td>
                                    <td class="d-sm-table-cell col-12 col-sm-auto">
                                        {{-- <strong>Order</strong><br/> --}}
                                        <h5>#{{ str_pad($order->id ?? 0, 6, 0, STR_PAD_LEFT) }}</h5>
                                        <small>{{ $order->date }}</small>
                                    </td>
                                    <td class="d-sm-table-cell col-12 col-sm-auto">
                                        {{-- <strong>Package</strong><br/> --}}
                                        <h5>{{ $order->gigPackage?->gig?->title }}</h5>
                                        <small>{{ $order->gigPackage?->title }}</small>
                                    </td>
                                    <td class="d-sm-table-cell col-12 col-sm-auto">
                                        {{-- <strong>Customer</strong><br/> --}}
                                        {{ $order->customer?->name ?? '' }}
                                    </td>
                                    <td class="d-sm-table-cell col-12 col-sm-auto">
                                        {{-- <strong>Artist</strong><br/> --}}
                                        {{ $order->gigPackage?->artist?->name }}
                                    </td>
                                    <td class="d-sm-table-cell col-6">
                                        {{-- <strong>Price</strong><br/> --}}
                                        {{ $order->price }}
                                    </td>
                                    <td class="d-sm-table-cell col-6 text-end text-sm-start">
                                        {{-- <strong>Status</strong><br/> --}}
                                        <span class="badge"
                                            style="background-color: {{ $order->orderStatus->bg ?? '' }}; color: {{ $order->orderStatus->color ?? '' }};">{{ $order->orderStatus->title ?? '' }}</span>
                                    </td>
                                    <td>
                                        <form action="{{ route('admin.orders.destroy', $order->id) }}" method="POST">
                                            <a class="btn btn-info"
                                                href="{{ route('admin.orders.show', $order->id) }}">Show</a>
                                            @can('order-edit')
                                                <a class="btn btn-primary"
                                                    href="{{ route('admin.orders.edit', $order->id) }}">Edit</a>
                                            @endcan


                                            @csrf
                                            @method('DELETE')
                                            @can('order-delete')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            @endcan
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                {!! $orders->render() !!}
            </div>
        </div>
    </div>
@endsection

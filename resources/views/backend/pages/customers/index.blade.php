@extends('backend.master')

@section('content')
    <div class="content-wrapper">
        <div class="card">
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
                                    <a href="https://www.bootstrapdash.com/customer/corona-admin-template/" target="_blank"
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
                            <h2>Customer Management
                                <div class="float-end">
                                    @can('admin.customers.create')
                                        <a class="btn btn-success" href="{{ route('admin.customers.create') }}"> Create New
                                            Customer</a>
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
                <div class="table-responsive">
                    <table class="table table-hover table-animashit">
                        <thead>
                        <tr>
                            <th width="50">No</th>
                            <th width="150">Avatar</th>
                            <th>Name</th>
                            <th width="100">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                        $no = (($customers->currentPage() - 1) * $customers->perPage()) + 1;
                        @endphp
                        @foreach ($customers as $key => $customer)
                            <tr>
                                <td class="text-light">{{ $no }}</td>
                                <td class="text-light">
                                    <img class="object-fit-cover object-position-center" src="{{ url('uploads/customers/' . $customer->avatar) }}" alt="Avatar" style="height: 100px; width: 100px;">
                                </td>
                                <td class="text-light">
                                    <h6 class="preview-subject">{{ $customer->name }}</h6>
                                    <p class="text-muted text-small">{{ $customer->nickname }}</p>
                                </td>
                                <td class="text-light">
                                    <form action="{{ route('admin.customers.destroy', $customer->id) }}" method="POST">
                                        <a class="btn btn-info"
                                            href="{{ route('admin.customers.show', $customer->id) }}">Show</a>
                                        @can('admin.customers.edit')
                                            <a class="btn btn-primary"
                                                href="{{ route('admin.customers.edit', $customer->id) }}">Edit</a>
                                            <a class="btn btn-primary"
                                                href="{{ route('admin.customers.edit', $customer->id) }}">Orders</a>
                                        @endcan

                                        @csrf
                                        @method('DELETE')
                                        @can('admin.customers.destroy')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        @endcan
                                    </form>
                                </td>
                            </tr>
                            @php ($no++)
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {!! $customers->links() !!}
            </div>
        </div>
    </div>
@endsection

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
                                        <img src="{{ asset('backend/corona/assets/images/dashboard/Group126@2x.png') }}"
                                            class="gradient-corona-img img-fluid" alt="">
                                    </div>
                                    <div class="col-5 col-sm-7 col-xl-8 p-0">
                                        <h4 class="mb-1 mb-sm-0">Want even more features?</h4>
                                        <p class="mb-0 font-weight-normal d-none d-sm-block">Check out our Pro version with
                                            5 unique
                                            layouts!</p>
                                    </div>
                                    <div class="col-3 col-sm-2 col-xl-2 ps-0 text-center">
                                        <span>
                                            <a href="https://www.bootstrapdash.com/product/corona-admin-template/"
                                                target="_blank"
                                                class="btn btn-outline-light
        btn-rounded get-started-btn">Upgrade to
                                                PRO</a>
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
                            <h2>Role Management
                                <div class="float-end">
                                    @can('role-create')
                                        <a class="btn btn-success" href="{{ route('admin.roles.create') }}"> Create New Role</a>
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

                <table class="table table-striped table-hover table-light text-dark">
                    <tr>
                        <th>Name</th>
                        <th width="280px">Action</th>
                    </tr>
                    @foreach ($roles as $key => $role)
                        <tr>
                            <td>{{ $role->name }}</td>
                            <td>
                                <form action="{{ route('admin.roles.destroy', $role->id) }}" method="POST">
                                    <a class="btn btn-info" href="{{ route('admin.roles.show', $role->id) }}">Show</a>
                                    @can('role-edit')
                                        <a class="btn btn-primary" href="{{ route('admin.roles.edit', $role->id) }}">Edit</a>
                                    @endcan


                                    @csrf
                                    @method('DELETE')
                                    @can('product-delete')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    @endcan
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>

                {!! $roles->render() !!}
            </div>
        </div>
    </div>
@endsection

@extends('backend.master')


@section('content')
    <div class="content-wrapper">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 margin-tb mb-4">
                        <div class="pull-left">
                            <h2>Users Management
                                <div class="float-end">
                                    <a class="btn btn-success" href="{{ route('admin.users.create') }}"> Create New User</a>
                                </div>
                            </h2>
                        </div>
                    </div>
                </div>


                @if ($message = Session::get('success'))
                    <div class="alert alert-success my-2">
                        <p>{{ $message }}</p>
                    </div>
                @endif


                <div class="table-responsive">
                    <table class="table table-hover table-striped table-light">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Roles</th>
                            <th width="280px">Action</th>
                        </tr>
                        @foreach ($data as $key => $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @if (!empty($user->getRoleNames()))
                                        @foreach ($user->getRoleNames() as $v)
                                            <label class="badge badge-secondary text-dark">{{ $v }}</label>
                                        @endforeach
                                    @endif
                                </td>
                                <td>
                                    <a class="btn btn-info" href="{{ route('admin.users.show', $user->id) }}">Show</a>
                                    <a class="btn btn-primary" href="{{ route('admin.users.edit', $user->id) }}">Edit</a>
                                    <a class="btn btn-success" href="{{ route('admin.users.destroy', $user->id) }}">
                                        Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    @endsection

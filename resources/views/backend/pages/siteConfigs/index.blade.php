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
                                    <a href="https://www.bootstrapdash.com/siteconfig/corona-admin-template/" target="_blank"
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
                            <h2>Config Management
                                <div class="float-end">
                                    @can('admin.siteconfigs.create')
                                        <a class="btn btn-success" href="{{ route('admin.siteconfigs.create') }}"> Create New
                                            Config</a>
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
                                <th>Type</th>
                                <th>Title</th>
                                <th>Keyword</th>
                                <th>Value</th>
                                <th>Description</th>
                                <th width="100">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($siteconfigs as $key => $siteconfig)
                                <tr>
                                    <td>{{ $siteconfig->type }}</td>
                                    <td>{{ $siteconfig->title }}</td>
                                    <td>{{ $siteconfig->keyword }}</td>
                                    <td>{{ $siteconfig->value }}</td>
                                    <td>{{ $siteconfig->description }}</td>
                                    <td>
                                        <form action="{{ route('admin.siteconfigs.destroy', $siteconfig->id) }}"
                                            method="POST">
                                            <a class="btn btn-info"
                                                href="{{ route('admin.siteconfigs.show', $siteconfig->id) }}">Show</a>
                                            @can('admin.siteconfigs.edit')
                                                <a class="btn btn-primary"
                                                    href="{{ route('admin.siteconfigs.edit', $siteconfig->id) }}">Edit</a>
                                            @endcan


                                            @csrf
                                            @method('DELETE')
                                            @can('admin.siteconfigs.destroy')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            @endcan
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                {!! $siteconfigs->render() !!}
            </div>
        </div>
    </div>
@endsection

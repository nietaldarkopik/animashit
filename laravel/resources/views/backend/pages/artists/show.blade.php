@extends('backend.master')


@section('content')
    <div class="content-wrapper">
        <div class="row justify-content-start align-items-start g-2">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 margin-tb mb-4">
                                <div class="pull-left">
                                    <h2> Show Artist
                                        <div class="float-end">
                                            <a class="btn btn-primary" href="{{ route('admin.artists.index') }}"> Back</a>
                                        </div>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card mh-100">
                    <img class="card-img-top w-100 object-fit-cover" src="{{ asset('uploads/artists/' . $profile->avatar) }}" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">{{ $profile->name }}</h4>
                        <p class="card-text">{{ $profile->nickname }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item row d-flex m-0">
                            <div class="col">
                                <strong>Country</strong>
                            </div>
                            <div class="col">
                            </div>
                        </li>
                        <li class="list-group-item row d-flex m-0">
                            <div class="col">
                                <strong>Email</strong>
                            </div>
                            <div class="col">
                                {{ $profile->email }}
                            </div>
                        </li>
                        <li class="list-group-item row d-flex m-0">
                            <div class="col">
                                <strong>Phone</strong>
                            </div>
                            <div class="col">
                                {{ $profile->phone }}
                            </div>
                        </li>
                        <li class="list-group-item row d-flex m-0">
                            <div class="col">
                                <strong>Twitter</strong>
                            </div>
                            <div class="col">
                                {{ $profile->twitter }}
                            </div>
                        </li>
                        <li class="list-group-item row d-flex m-0">
                            <div class="col">
                                <strong>Ig</strong>
                            </div>
                            <div class="col">
                                {{ $profile->ig }}
                            </div>
                        </li>
                        <li class="list-group-item row d-flex m-0">
                            <div class="col">
                                <strong>Facebook</strong>
                            </div>
                            <div class="col">
                                {{ $profile->facebook }}
                            </div>
                        </li>
                        <li class="list-group-item row d-flex m-0">
                            <div class="col">
                                <strong>Youtube</strong>
                            </div>
                            <div class="col">
                                {{ $profile->youtube }}
                            </div>
                        </li>
                        <li class="list-group-item row d-flex m-0">
                            <div class="col">
                                <strong>User</strong>
                            </div>
                            <div class="col">
                                {{ $profile->youtube }}
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 margin-tb mb-4">
                                <div class="pull-left">
                                    <h2>Portfolio</h2>
                                </div>
                            </div>
                            <div class="col-lg-12 margin-tb mb-4">
                                <div class="table-responsive">
                                    <table class="table table-striped
                                    table-hover	
                                    table-borderless
                                    table-primary
                                    align-middle">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Column 1</th>
                                                <th>Column 2</th>
                                                <th>Column 3</th>
                                            </tr>
                                            </thead>
                                            <tbody class="table-group-divider">
                                                <tr class="table-primary" >
                                                    <td scope="row">Item</td>
                                                    <td>Item</td>
                                                    <td>Item</td>
                                                </tr>
                                                <tr class="table-primary">
                                                    <td scope="row">Item</td>
                                                    <td>Item</td>
                                                    <td>Item</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                
                                            </tfoot>
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 margin-tb mb-4">
                                <div class="pull-left">
                                    <h2>Schedule</h2>
                                </div>
                            </div>
                            <div class="col-lg-12 margin-tb mb-4">
                                <div class="table-responsive">
                                    <table class="table table-primary">
                                        <thead>
                                            <tr>
                                                <th scope="col">Column 1</th>
                                                <th scope="col">Column 2</th>
                                                <th scope="col">Column 3</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="">
                                                <td scope="row">R1C1</td>
                                                <td>R1C2</td>
                                                <td>R1C3</td>
                                            </tr>
                                            <tr class="">
                                                <td scope="row">Item</td>
                                                <td>Item</td>
                                                <td>Item</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection

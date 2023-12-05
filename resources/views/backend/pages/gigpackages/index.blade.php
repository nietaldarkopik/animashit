@extends('backend.master')

@section('content')
    <div class="content-wrapper">
        <div class="card border-yellow">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 margin-tb mb-4">
                        <div class="pull-left">
                            <h2>Gig Package Management
                                <div class="float-end">
                                    @can('admin.gigs.create')
                                        <a class="btn btn-success" href="{{ route('admin.gigpackages.create') }}"> Create New Gig Package</a>
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
            </div>
            
            <div class="card-body">
                <form class="d-flex" action="{{ route('admin.gigpackages.post') }}" method="post">
                    @csrf
                    <div class="col-12 col-md-6 col-lg-4 ms-auto">
                        <div class="form-inline">
                            <div class="input-group">
                                <label class="input-group-text bg-light" for="input-gig_id">Choose Gig</label>
                                <select class="form-select" id="input-gig_id" name="filter[gig_id]">
                                    <option value="">All Gigs ...</option>
                                    @foreach ($gigs as $i => $g)
                                        <option value="{{ $g->id }}" @selected(isset($post_filter) and isset($post_filter['gig_id']) and $post_filter['gig_id'] == $g->id)>
                                            {{ $g->title }}</option>
                                    @endforeach
                                </select>
                                <select class="form-select" id="input-profile_id" name="filter[profile_id]">
                                    <option value="">All Artist ...</option>
                                    @foreach ($artists as $i => $g)
                                        <option value="{{ $g->id }}" @selected(isset($post_filter) and isset($post_filter['profile_id']) and $post_filter['profile_id'] == $g->id)>
                                            {{ $g->nickname }}</option>
                                    @endforeach
                                </select>
                                <div class="d-grid gap-2">
                                    <button type="submit" name="do_action" value="do_filter" class="btn btn-primary">Filter</button>
                                </div>
                                <div class="d-grid gap-2">
                                    <button type="submit" name="do_action" value="do_reset" class="btn btn-warning">Clear</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-hover table-animashit">
                    <thead>
                        <tr>
                            <th>Gig</th>
                            <th>Artist</th>
                            <th width="380px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($gigpackages as $key => $gigpackage)
                            <tr>
                                <td>{{ $gigpackage->gig?->title }}</td>
                                <td>{{ $gigpackage->artist?->nickname }}</td>
                                <td>
                                    <a class="btn btn-info" href="{{ route('admin.gigpackages.show', $gigpackage->id) }}">Show</a>
                                    {{-- @can('admin.portfolios.index')
                                    <form action="{{ route('admin.portfolios.filter') }}" method="POST" class="d-inline">
                                        @csrf
                                        <input type="hidden" name="gig_package_id" value="{{ $gigpackage->id}}" />
                                        <button name="do_action" value="do_filter" class="btn btn-primary">Portfolio</button>
                                    </form>
                                    @endcan --}}
                                            
                                    @can('admin.gigpackages.edit')
                                        <a class="btn btn-primary" href="{{ route('admin.gigpackages.edit', $gigpackage->id) }}">Edit</a>
                                    @endcan
                                        
                                        
                                    @can('admin.gigpackages.destroy')
                                        @method('DELETE')
                                        <form action="{{ route('admin.gigpackages.destroy', $gigpackage->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="card-body">
                {!! $gigpackages->render() !!}
            </div>
        </div>
    </div>
@endsection

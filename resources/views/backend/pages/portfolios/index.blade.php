@extends('backend.master')

@section('content')
    <div class="content-wrapper">
        <div class="card border-yellow">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="pull-left">
                            <h2>Portfolio Management
                                <div class="float-end">
                                    @can('admin.portfolios.create')
                                        <a class="btn btn-success" href="{{ route('admin.portfolios.create') }}"> Create New Portfolio</a>
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
                <form class="d-flex" action="{{ route('admin.portfolios.filter') }}" method="post">
                    @csrf
                    <div class="col-12 col-lg-12 ms-auto">
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
                                <select class="form-select" id="input-artist_id" name="filter[artist_id]">
                                    <option value="">All Artist ...</option>
                                    @foreach ($artists as $i => $g)
                                        <option value="{{ $g->id }}" @selected(isset($post_filter) and isset($post_filter['artist_id']) and $post_filter['artist_id'] == $g->id)>
                                            {{ $g->nickname }}</option>
                                    @endforeach
                                </select>
                                <select class="form-select" id="input-cusstomer_id" name="filter[cusstomer_id]">
                                    <option value="">All Customer ...</option>
                                    @foreach ($customers as $i => $g)
                                        <option value="{{ $g->id }}" @selected(isset($post_filter) and isset($post_filter['customer_id']) and $post_filter['customer_id'] == $g->id)>
                                            {{ $g->nickname }}
                                        </option>
                                    @endforeach
                                </select>
                                <select class="form-select" id="input-status" name="filter[status]">
                                    <option value="">All Status ...</option>
                                    <option value="publish" @selected(isset($post_filter) and isset($post_filter['status']) and $post_filter['status'] == 'publish')>Publish</option>
                                    <option value="private" @selected(isset($post_filter) and isset($post_filter['status']) and $post_filter['status'] == 'private')>Private</option>
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
                            <th>Customer</th>
                            <th>Price</th>
                            <th width="280px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($portfolios as $key => $portfolio)
                            <tr>
                                <td>
                                    <h5>
                                        {{ $portfolio->gig?->title }}<br/>
                                        <small>{{ $portfolio->gigpackage?->package->title }}</small>
                                    </h5>
                                </td>
                                <td>{{ $portfolio->profile?->nickname }}</td>
                                <td>{{ $portfolio->client?->nickname }}</td>
                                <td>${{ $portfolio->gigpackage?->price }}</td>
                                <td>
                                    <form action="{{ route('admin.portfolios.destroy', $portfolio->id) }}" method="POST">
                                        <a class="btn btn-info" href="{{ route('admin.portfolios.show', $portfolio->id) }}">Show</a>

                                        {{-- @can('admin.portfoliomediass.index')
                                            <a class="btn btn-primary" href="{{ route('admin.portfoliomediass.index', $portfolio->id) }}">Media</a>
                                        @endcan --}}

                                        @can('admin.portfolios.edit')
                                            <a class="btn btn-primary" href="{{ route('admin.portfolios.edit', $portfolio->id) }}">Edit</a>
                                        @endcan


                                        @csrf
                                        @method('DELETE')
                                        @can('admin.portfolios.destroy')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        @endcan
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-body">
                {!! $portfolios->render() !!}
            </div>
        </div>
    </div>
@endsection

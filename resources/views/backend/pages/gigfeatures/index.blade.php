@extends('backend.master')

@section('content')
    <div class="content-wrapper">
        <div class="card border-yellow">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="pull-left">
                            <h2>Gig Feature Management
                                <div class="float-end">
                                    @can('gig-create')
                                        <a class="btn btn-success" href="{{ route('admin.gigfeatures.create') }}"> Create New Gig
                                            Feature</a>
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
                <form class="d-flex" action="{{ route('admin.gigfeatures.post') }}" method="post">
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
                                <select class="form-select" id="input-type" name="filter[type]">
                                    <option value="">All Type ...</option>
                                    <option value="default" @selected(isset($post_filter) and isset($post_filter['type']) and $post_filter['type'] == "default")>
                                        Default
                                    </option>
                                    <option value="extra" @selected(isset($post_filter) and isset($post_filter['type']) and $post_filter['type'] == "extra")>
                                        Extra Feature
                                    </option>
                                </select>
                                <input type="text" name="filter[keyword]" value="{{ $post_filter['keyword'] ?? ''}}" class="border-light" placeholder="Keyword Feature" aria-describedby="helpId">
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
                            <th>Feature</th>
                            <th>Type</th>
                            <th width="280px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($features as $key => $feature)
                            <tr>
                                <td>{{ $feature->gig->title }}</td>
                                <td>{{ $feature->title }}</td>
                                <td>{{ $feature->type }}</td>
                                <td>
                                    <form action="{{ route('admin.gigfeatures.destroy', $feature->id) }}" method="POST">
                                        <a class="btn btn-info"
                                            href="{{ route('admin.gigfeatures.show', $feature->id) }}">Show</a>
                                        @can('gig-edit')
                                            <a class="btn btn-primary"
                                                href="{{ route('admin.gigfeatures.edit', $feature->id) }}">Edit</a>
                                        @endcan


                                        @csrf
                                        @method('DELETE')
                                        @can('gig-delete')
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
                {!! $features->render() !!}
            </div>
        </div>
    </div>
@endsection

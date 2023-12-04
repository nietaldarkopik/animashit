@extends('backend.master')


@section('content')
    <div class="content-wrapper">
        <div class="card border-yellow">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2>Edit Gig Feature
                                <div class="float-end">
                                    <a class="btn btn-primary" href="{{ route('admin.gigfeatures.index') }}"> Back</a>
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

                <form action="{{ route('admin.gigfeatures.update', $gigfeature->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Gig:</strong>
                                <select class="form-select form-control" name="gig_id">
                                    <option selected>Select one</option>
                                    @foreach ($gigs as $i => $gig)
                                        <option value={{ $gig->id }} @selected($gigfeature->gig_id == $gig->id)>{{ $gig->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Title:</strong>
                                <input type="text" name="title" value="{{ $gigfeature->title }}"  class="form-control" placeholder="Title">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Sorting:</strong>
                                <input type="number" name="sort" value="{{ $gigfeature->sort }}"  class="form-control" placeholder="Sort Order Listing">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Description:</strong>
                                <textarea name="description" class="form-control" rows="10">{{ $gigfeature->description }}</textarea>
                            </div>
                        </div>
                        <div class="col-xs-12 mb-3 text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

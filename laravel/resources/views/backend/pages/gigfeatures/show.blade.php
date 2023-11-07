@extends('backend.master')


@section('content')
    <div class="content-wrapper">
        <div class="card border-yellow">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 margin-tb mb-4">
                        <div class="pull-left">
                            <h2> Show Gig Feature
                                <div class="float-end">
                                    <a class="btn btn-primary" href="{{ route('admin.gigfeatures.index') }}"> Back</a>
                                </div>
                            </h2>
                        </div>
                    </div>
                </div>


                <div class="row">
                    
                    <div class="col-xs-12 mb-3">
                        <div class="form-group">
                            <strong>Gig:</strong>
                            {{ $gigfeature->gig->title }}
                        </div>
                    </div>
                    
                    <div class="col-xs-12 mb-3">
                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $gigfeature->title }}
                        </div>
                    </div>
                    
                    <div class="col-xs-12 mb-3">
                        <div class="form-group">
                            <strong>Sort:</strong>
                            {{ $gigfeature->sort }}
                        </div>
                    </div>
                    
                    <div class="col-xs-12 mb-3">
                        <div class="form-group">
                            <strong>Price:</strong>
                            {{ $gigfeature->price }}
                        </div>
                    </div>
                    
                    <div class="col-xs-12 mb-3">
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $gigfeature->description }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('backend.master')


@section('content')
    <div class="content-wrapper">
        <div class="card border-yellow">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 margin-tb mb-4">
                        <div class="pull-left">
                            <h2> Show Config
                                <div class="float-end">
                                    <a class="btn btn-primary" href="{{ route('admin.siteconfigs.index') }}"> Back</a>
                                </div>
                            </h2>
                        </div>
                    </div>
                </div>


                <div class="row">
                    
                    <div class="col-xs-12 mb-3">
                        <div class="form-group">
                            <strong>Type:</strong>
                            {{ $siteconfig->type }}
                        </div>
                    </div>
                    
                    <div class="col-xs-12 mb-3">
                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $siteconfig->title }}
                        </div>
                    </div>
                    
                    <div class="col-xs-12 mb-3">
                        <div class="form-group">
                            <strong>Keyword:</strong>
                            {{ $siteconfig->keyword }}
                        </div>
                    </div>
                    
                    <div class="col-xs-12 mb-3">
                        <div class="form-group">
                            <strong>Value:</strong>
                            {{ $siteconfig->value }}
                        </div>
                    </div>
                    
                    <div class="col-xs-12 mb-3">
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $siteconfig->description }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

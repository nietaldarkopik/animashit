@extends('backend.master')


@section('content')
    <div class="content-wrapper">
        <div class="card border-yellow">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2>Edit Config
                                <div class="float-end">
                                    <a class="btn btn-primary" href="{{ route('admin.siteconfigs.index') }}"> Back</a>
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

                <form action="{{ route('admin.siteconfigs.update', $siteconfig->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="row">

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Type:</strong>
                                    <select class="form-select form-control" name="type">
                                        <option selected>Choose Type...</option>
                                        @foreach ($types as $i => $t)
                                            <option value="{{ $t }}" @if($siteconfig->type == $t) selected="selected" @endif>{{ $t }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Title:</strong>
                                    <input type="text" name="title" value="{{ $siteconfig->title }}" class="form-control" placeholder="Title">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Keyword:</strong>
                                    <input type="text" name="keyword" value="{{ $siteconfig->keyword }}" class="form-control" placeholder="Keyword">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Value:</strong>
                                    <input type="text" name="value" value="{{ $siteconfig->value }}" class="form-control" placeholder="Value">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Description:</strong>
                                    <textarea name="description" class="form-control" rows="10">{{ $siteconfig->description }}</textarea>
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

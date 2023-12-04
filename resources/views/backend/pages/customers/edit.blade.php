@extends('backend.master')


@section('content')
    <div class="content-wrapper">
        <div class="card border-yellow">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2>Edit Customer
                                <div class="float-end">
                                    <a class="btn btn-primary" href="{{ route('admin.customers.index') }}"> Back</a>
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

                <form action="{{ route('admin.customers.update', $profile->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Name:</strong>
                                <input type="text" name="name" value="{{ $profile->name}}" class="form-control text-light" placeholder="Name">
                            </div>
                        </div>
                        
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Nickname:</strong>
                                <input type="text" name="nickname" value="{{ $profile->nickname}}" class="form-control text-light" placeholder="Nickname">
                            </div>
                        </div>
                        
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Country:</strong>
                                <select class="form-select form-control text-light" name="country" id="input-country">
                                    <option value="0" selected>Choose Country ...</option>
                                    @foreach($countries as $i => $r)
                                    <option value="">{{$r->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Email:</strong>
                                <input type="text" name="email" value="{{ $profile->email}}" class="form-control text-light" placeholder="Email">
                            </div>
                        </div>
                        
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Phone:</strong>
                                <input type="text" name="phone" value="{{ $profile->phone}}" class="form-control text-light" placeholder="Phone">
                            </div>
                        </div>
                        
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Twitter:</strong>
                                <input type="text" name="twitter" value="{{ $profile->twitter}}" class="form-control text-light" placeholder="Twitter">
                            </div>
                        </div>
                        
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Ig:</strong>
                                <input type="text" name="ig" value="{{ $profile->ig}}" class="form-control text-light" placeholder="Ig">
                            </div>
                        </div>
                        
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Facebook:</strong>
                                <input type="text" name="facebook" value="{{ $profile->facebook}}" class="form-control text-light" placeholder="Facebook">
                            </div>
                        </div>
                        
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Youtube:</strong>
                                <input type="text" name="youtube" value="{{ $profile->youtube}}" class="form-control text-light" placeholder="Youtube">
                            </div>
                        </div>
                        {{-- 
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>User Type:</strong>
                                <select class="form-select form-control text-light" name="user_type" id="input-user_type">
                                    <option selected>Select one</option>
                                    @foreach($roles as $i => $r)
                                    <option value="">{{$r->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                         --}}
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>User:</strong>
                                <select class="form-select form-control text-light" name="user_id" id="input-user_id">
                                    <option value="0" selected>No User</option>
                                    @foreach($users as $i => $r)
                                    <option value="">{{$r->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="form-group">
                                <strong>Avatar:</strong>
                                <img src="{{ url('uploads/customers/' . $profile->avatar) }}" alt="Avatar" class="img-thumbnail">
                                <input type="file" name="avatar" class="form-control text-light" placeholder="Avatar">
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

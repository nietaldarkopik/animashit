@extends('backend.master')

@section('content')
    <div class="content-wrapper">
        <div class="card border-yellow">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 margin-tb mb-4">
                        <div class="pull-left">
                            <h2>Create New Gig Package
                                <div class="float-end">
                                    <a class="btn btn-primary" href="{{ route('admin.gigpackages.index') }}"> Back</a>
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

                <form action="{{ route('admin.gigpackages.store') }}" method="POST">
                    @csrf
                    @method('post')
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Gig</label>
                                <select class="form-control form-select form-select-sm" name="head[gig_id]" id="input-gig_id">
                                    <option selected>Select one</option>
                                    @foreach($gigs as $i => $gig)
                                        <option value="{{ $gig->id }}">{{ $gig->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Artist</label>
                                <select class="form-control form-select form-select-sm" name="head[profile_id]" id="input-profile_id">
                                    <option selected>Select one</option>
                                    @foreach($artists as $i => $artist)
                                        <option value="{{ $artist->id }}">{{ $artist->nickname}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="row">
                                @foreach($packages as $i => $pack)
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <div class="card text-start bg-light text-dark bg-primary">
                                            <div class="card-header bg-warning">
                                                <h5 class="card-title mb-0 text-dark p-0 mx-0">{{$pack->title}}</h5>
                                            </div>
                                            <div class="card-body p-2">
                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="form-group">
                                                        <strong>Title:</strong>
                                                        <input type="text" name="package[{{ $pack->id }}][title]" class="form-control" placeholder="Title (Basic, Premium etc.)">
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="form-group">
                                                        <strong>Price:</strong>
                                                        <input type="text" name="package[{{ $pack->id }}][price]" class="form-control" placeholder="Price">
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="form-group">
                                                        <strong>Description:</strong>
                                                        <textarea name="package[{{ $pack->id }}][description]" class="form-control" rows="10"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="form-group">
                                                        <strong>Features:</strong>
                                                        <div class="list-group list-feature-gigs" data-package_id="{{ $pack->id }}">
                                                            {{-- <label class="list-group-item">
                                                                <div class="row">
                                                                    <div class="col-6">
                                                                        <span class="pt-2">First checkbox</span>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <input class="form-check-input m-0 me-2 float-end"
                                                                            type="checkbox" value="">
                                                                    </div>
                                                                </div>
                                                            </label>
                                                            <label class="list-group-item">
                                                                <div class="row">
                                                                    <div class="col-6">
                                                                        <span class="pt-2">First checkbox</span>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <input class="form-control m-0 me-2" type="text"
                                                                            value="">
                                                                    </div>
                                                                </div>
                                                            </label> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                            <div class="card">
                                <div class="card-header bg-warning text-dark">
                                    Extra Features
                                </div>
                                <div class="card-body bg-white list-extrafeature-gigs p-2">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            }
        });

        $("#input-gig_id").on("change",function(){
            let data = {
                gig_id: $(this).val(),
                type: 'default',
            };

            $.ajax({
                url: "{{ route('services.features') }}",
                type: "post",
                data: data,
                dataType: "json",
                success: function(msg)
                {
                    let data = msg.data;
                    let listitem = $("<div></div>");
                    $.each(data,function(i,v){
                        $(listitem).append(`<label class="list-group-item">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <span class="pt-2">`+v.title+`</span>
                                                    </div>
                                                    <div class="col-6">
                                                        `+ ((v.input_type == 'text') ? `<input class="form-control m-0 me-2" name="feature[#package_id#][`+v.id+`]" type="text" value="">`:
                                                        `<input class="form-check-input m-0 me-2 float-end" name="feature[#package_id#][`+v.id+`]" type="checkbox" value="1">`) + `
                                                    </div>
                                                </div>
                                            </label>`);
                    });
                    $(".list-feature-gigs").each(function(v){
                        let package_id = $(this).data("package_id");
                        $(this).html($(listitem).html().replace(/#package_id#/g,package_id));
                    });
                }
            });

            let dataextra = {
                gig_id: $(this).val(),
                type: 'extra',
            };
            $.ajax({
                url: "{{ route('services.features') }}",
                type: "post",
                data: dataextra,
                dataType: "json",
                success: function(msg)
                {
                    let data = msg.data;
                    let listitem = $("<div></div>");
                    $.each(data,function(i,v){
                        $(listitem).append(`<label class="list-group-item">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <span class="pt-2">`+v.title+`</span>
                                                    </div>
                                                    <div class="col-6">
                                                        `+ ((v.input_type == 'text') ? `<input class="form-control m-0 me-2" name="extra[`+v.id+`]" type="text" value="">`:
                                                        `<input class="form-check-input m-0 me-2 float-end" name="extra[`+v.id+`]" type="checkbox" value="1">`) + `
                                                    </div>
                                                </div>
                                            </label>`);
                    });
                    $(".list-extrafeature-gigs").each(function(v){
                        let package_id = $(this).data("package_id");
                        $(this).html($(listitem).html());
                    });
                }
            });
        })
    });
</script>
@endsection
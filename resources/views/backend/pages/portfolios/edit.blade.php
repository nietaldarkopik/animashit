@extends('backend.master')

@section('content')
    <div class="content-wrapper">
        <div class="card border-yellow">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 margin-tb mb-4">
                        <div class="pull-left">
                            <h2>Edit Portfolio
                                <div class="float-end">
                                    <a class="btn btn-primary" href="{{ route('admin.portfolios.index') }}"> Back</a>
                                </div>
                            </h2>
                        </div>
                    </div>
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

        <form action="{{ route('admin.portfolios.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="card border-yellow my-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Gig</label>
                                        <select class="form-control form-select form-select-sm" name="gig_id"
                                            id="input-gig_id">
                                            <option selected value="0">Select one</option>
                                            @foreach ($gigs as $i => $gig)
                                                <option value="{{ $gig->id }}" @selected($portfolio->gig_id == $gig->id)>{{ $gig->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Package</label>
                                        <select class="form-control form-select form-select-sm" name="gig_package_id"
                                            id="input-gig_package_id">
                                            <option selected value="0">Select one</option>
                                            @foreach ($gigpackages as $i => $gigpackage)
                                                <option value="{{ $gigpackage->id }}" @selected($portfolio->gig_package_id == $gigpackage->id)>
                                                    {{ $gigpackage->head->artist->nickname }} |
                                                    {{ $gigpackage->title }} | {{ $gigpackage->price }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Customer</label>
                                        <select class="form-control form-select form-select-sm" name="customer_id"
                                            id="input-customer_id">
                                            <option selected value="0">Select one</option>
                                            @foreach ($customers as $i => $customer)
                                                <option value="{{ $customer->id }}" @selected($portfolio->customer_id == $customer->id)>{{ $customer->nickname }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Title</label>
                                        <input type="text" class="form-control bg-animashit-dark text-light" name="title" value="{{ $portfolio->title }}">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Description</label>
                                        <textarea rows="5" class="w-100 bg-animashit-dark text-light p-3 richtext" name="description">{{ $portfolio->description }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-yellow my-3">
                <div class="card-body">
                    <strong>Media</strong>
                    <div class="row justify-content-stretch align-items-stretch g-2">
                        @if(Count($portfolioMedia) > 0)
                        @foreach($portfolioMedia as $ip => $p)
                            <div class="col-sm-3 @if($ip == 0) master-form-media @endif card-form-media">
                                <div class="card h-100 bg-light text-dark">
                                    {{-- <img class="card-img-top" src="holder.js/100x180/" alt="Title"> --}}
                                    <div class="card-header">
                                        <button class="btn btn-sm btn-danger btn-remove-media p-2 float-end">
                                            <i class="fas fa-trash m-0 p-0"></i>
                                        </button>
                                    </div>
                                    <div class="card-body p-2">
                                        <div class="mb-3">
                                            <label class="form-label">Title</label>
                                            <input type="text" class="form-control form-control-sm" name="media[title][]" value="{{ $p->title }}" aria-describedby="helpId" placeholder="Title">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Description</label>
                                            <textarea class="form-control" name="media[description][]" aria-describedby="helpId" placeholder="Description">{{ $p->description }}</textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Type</label>
                                            <select class="form-control form-select form-select-lg input-media-type"
                                                name="media[type][]">
                                                <option>Select one</option>
                                                <option value="upload_image" @selected($p->type == "upload_image")>Image</option>
                                                <option value="upload_video" @selected($p->type == "upload_video")>Video</option>
                                                <option value="url_image" @selected($p->type == "url_image")>URL Image</option>
                                                <option value="embed_video" @selected($p->type == "embed_video")>Embed Video</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="card-body p-0 card-media-preview">
                                        @if($p->type == "upload_image")
                                            <div class="ratio ratio-16x9">
                                                <a href="{{ asset($p->media)}}" target="_blank">
                                                    <img src="{{ asset($p->media)}}" class="img-fluid w-100 object-fit-cover" style="max-height: 300px;"/>
                                                </a>
                                            </div>
                                        @elseif($p->type == "upload_video")
                                            <div class="ratio ratio-16x9">
                                                <video src="{{ asset($p->media )}}" class="w-100 object-fit-cover" controls></video>
                                            </div>
                                        @elseif($p->type == "url_image")
                                            <div class="ratio ratio-16x9">
                                                <a href="{{ asset($p->media)}}" target="_blank">
                                                    <img src="{{ $p->media }}" class="img-fluid w-100 object-fit-cover" style="max-height: 300px;"/>
                                                </a>
                                            </div>
                                        @elseif($p->type == "embed_video")
                                            <div class="ratio ratio-16x9">
                                                {!! $p->media !!}
                                            </div>
                                        @endif
                                        <input type="hidden" name="media[id][]" value="{{ $p->id }}" class="portfolio-media-id"/>
                                    </div>
                                    <div class="card-body p-2 card-media-input">
                                        <textarea rows="5" name="media[media][]" class="form-control media-input-text  @if($p->type == "upload_image" || $p->type == "upload_video") d-none @endif">{{ $p->media }}</textarea>
                                        <div class="input-group mb-3 media-input-upload  @if($p->type != "upload_image" and $p->type != "upload_video") d-none @endif">
                                            <label class="btn btn-lg btn-warning w-100">
                                                <i class="fas fa-upload fa-xl my-2"></i>
                                                <span class="py-2 h6">Choose File</span>
                                                <input type="file" name="media_file[]" class="form-control d-none">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="card-body p-2 card-media-input">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        @else
                        <div class="col-sm-3 master-form-media card-form-media">
                            <div class="card h-100 bg-light text-dark">
                                {{-- <img class="card-img-top" src="holder.js/100x180/" alt="Title"> --}}
                                <div class="card-header">
                                    <button class="btn btn-sm btn-danger btn-remove-media p-2 float-end">
                                        <i class="fas fa-trash m-0 p-0"></i>
                                    </button>
                                </div>
                                <div class="card-body p-2">
                                    <div class="mb-3">
                                        <label class="form-label">Title</label>
                                        <input type="text" class="form-control form-control-sm" name="media[title][]"
                                            aria-describedby="helpId" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Description</label>
                                        <textarea class="form-control" name="media[description][]" aria-describedby="helpId" placeholder=""></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Type</label>
                                        <select class="form-control form-select form-select-lg input-media-type"
                                            name="media[type][]">
                                            <option>Select one</option>
                                            <option value="upload_image">Image</option>
                                            <option value="upload_video">Video</option>
                                            <option value="url_image">URL Image</option>
                                            <option value="embed_video">Embed Video</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="card-body p-2 card-media-input">
                                    <textarea rows="5" name="media[media][]" class="form-control media-input-text d-none"></textarea>
                                    <div class="input-group mb-3 media-input-upload d-none">
                                        <label class="btn btn-lg btn-warning w-100">
                                            <i class="fas fa-upload fa-xl my-2"></i>
                                            <span class="py-2 h6">Upload</span>
                                            <input type="file" name="media_file[]" class="form-control d-none">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        <div class="col-sm-3">
                            <div
                                class="card h-100 bg-light text-dark align-items-center align-content-center justify-content-center">
                                <a href="javascript:void(0);" class="btn btn-lg btn-warning btn-add-media">
                                    <i class="fas fa-plus-square" style="font-size: 50px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-yellow">
                <div class="card-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('style')
    <style>
        .master-form-media:first-child .btn-remove-media{
            visibility: hidden;
        } 
    </style>
@endsection
@section('script')
    <script type="text/javascript">
        var portfolio = {!! json_encode($portfolio) !!};
        
        $(document).ready(function() {

            function setMediaType(masterForm,inputType)
            {
                inputType = (typeof inputType == "undefined")?$(masterForm).find(".input-media-type").val():inputType;

                if(inputType == "upload_image" || inputType == "upload_video")
                {
                    $(masterForm).find(".media-input-upload").removeClass("d-none");
                    $(masterForm).find(".media-input-text").addClass("d-none");
                }else if(inputType == "url_image" || inputType == "embed_video")
                {
                    $(masterForm).find(".media-input-upload").addClass("d-none");
                    $(masterForm).find(".media-input-text").removeClass("d-none");
                }else{
                    $(masterForm).find(".media-input-upload").addClass("d-none");
                    $(masterForm).find(".media-input-text").addClass("d-none");
                }
                return masterForm;
            }
            $("body").on("click",".btn-add-media",function(e){
                let masterForm = $(".master-form-media").clone().removeClass('master-form-media');
                $(masterForm).find(":input").val("");
                $(masterForm).find(".card-media-preview").remove();
                $(masterForm).find(".portfolio-media-id").remove();
                masterForm = setMediaType(masterForm);
                $(this).parents(".col-sm-3").before(masterForm);
            });
            $("body").on("click",".btn-remove-media",function(e){
                $(this).closest(".col-sm-3").remove();
            });

            $("body").on("change",".input-media-type", function(e){
                let masterForm = $(this).parents(".card-form-media");
                let inputType = $(this).val();
                setMediaType(masterForm,inputType);
            });

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                }
            });

            $("#input-gig_id").on("change", function() {
                let data = {
                    gig_id: $(this).val()
                };

                $.ajax({
                    url: "{{ route('services.gigpackages') }}",
                    type: "post",
                    data: data,
                    dataType: "json",
                    success: function(msg) {
                        let data = msg.data;
                        let options = $("<div/>");
                        $.each(data, function(i, v) {
                            $(options).append('<option value="' + v.id + '" ' + ((v.id == portfolio.gig_package_id)?'selected':'') + '>' + v?.head
                                ?.artist?.nickname + ' | ' + v.title + ' | ' + v
                                .price + '</option>');
                        });

                        $("#input-gig_package_id").html($(options).html());
                    }
                });
            })
        });
    </script>
@endsection

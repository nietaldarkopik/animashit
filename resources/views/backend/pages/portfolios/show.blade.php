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

        <div class="card border-yellow my-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="mb-3">
                                    <label for="" class="form-label">Gig</label>
                                    <div class="form-control-plaintext text-light">
                                        {{$portfolio->gig->title}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="mb-3">
                                    <label for="" class="form-label">Package</label>
                                    <div class="form-control-plaintext text-light">
                                        @foreach ($gigpackages as $i => $gigpackage)
                                            @if($portfolio->gig_package_id == $gigpackage->id)
                                                {{ $gigpackage->head->artist->nickname }} / 
                                                {{ $gigpackage->title }} / 
                                                ${{ $gigpackage->price }}
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="mb-3">
                                    <label for="" class="form-label">Customer</label>
                                    <div class="form-control-plaintext text-light">
                                        {{
                                            $portfolio->client?->nickname
                                        }}
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="mb-3">
                                    <label for="" class="form-label">Title</label>
                                    <div class="form-control-plaintext bg-animashit-dark text-light">
                                        {{ $portfolio->title }}
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="mb-3">
                                    <label for="" class="form-label">Description</label>
                                    <div class="form-control-plaintext bg-animashit-dark text-light">
                                        {!! $portfolio->description !!}
                                    </div>
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
                <div class="row justify-content-stretch align-items-stretch gap-2">
                    @if(Count($portfolioMedia) > 0)
                    @foreach($portfolioMedia as $ip => $p)
                        <div class="col-sm-3 mb-2 @if($ip == 0) master-form-media @endif card-form-media">
                            <div class="card h-100 bg-light text-dark">
                                {{-- <img class="card-img-top" src="holder.js/100x180/" alt="Title"> --}}
                                <div class="card-body p-2">
                                    <div class="mb-3">
                                        <label class="form-label">Title</label>
                                        <div class="form-control-plaintext form-control-sm">
                                            {{ $p->title }}
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Description</label><div class="form-control-plaintext form-control-sm">
                                            {{ $p->description }}
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Type</label>
                                        <div class="form-control-plaintext form-control-sm">
                                            {{ $p->type }}
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-0 card-media-preview">
                                    @if($p->type == "upload_image")
                                        <div class="ratio ratio-16x9">
                                            <a href="{{ asset($p->media)}}" target="_blank">
                                                <img src="{{ asset($p->media)}}" class="img-fluid object-fit-cover" style="max-height: 300px;"/>
                                            </a>
                                        </div>
                                    @elseif($p->type == "upload_video")
                                        <div class="ratio ratio-16x9">
                                            <video src="{{ asset($p->media )}}" class="w-100 object-fit-cover" controls></video>
                                        </div>
                                    @elseif($p->type == "url_image")
                                        <div class="ratio ratio-16x9">
                                            <a href="{{ asset($p->media)}}" target="_blank">
                                                <img src="{{ $p->media }}" class="img-fluid object-fit-cover" style="max-height: 300px;"/>
                                            </a>
                                        </div>
                                    @elseif($p->type == "embed_video")
                                        <div class="ratio ratio-16x9">
                                            {!! $p->media !!}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
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

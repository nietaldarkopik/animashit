@extends('backend.master')

@section('content')
    <div class="content-wrapper">
        <div class="card border-yellow">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="pull-left">
                            <h2>Gig Media Management
                                <div class="float-end">
                                    {{-- @can('gig-create') --}}
                                    {{-- <a class="btn btn-success btn-add-media" href="{{ route('admin.gigmedias.create') }}"> Add Media</a> --}}
                                    <a class="btn btn-success btn-add-media" href="#"> Add Media</a>
                                    {{-- @endcan --}}
                                </div>
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="row">

                    <div class="col-lg-12 mb-4">
                        <div class="row">
                            <div class="col-4 ms-auto me-0">
                                <form method="post" action="{{ route('admin.gigmedias.bygigpost')}}">
                                    @csrf
                                    <div class="input-group mb-3">
                                        <label class="input-group-text bg-light" for="input-gig_id">Choose Gig</label>
                                        <select class="form-select" id="input-gig_id" name="gig_id">
                                            <option selected>All Gigs ...</option>
                                            @foreach ($gigs as $i => $g)
                                                <option value="{{ $g->id }}" @selected(isset($filter) and isset($filter['gig_id']) and $filter['gig_id'] == $g->id)>
                                                    {{ $g->title }}</option>
                                            @endforeach
                                        </select>
                                        <div class="d-grid gap-2">
                                            <input type="hidden" name="do_action" value="do_filter"/>
                                            <button type="submit" class="btn btn-primary">Filter</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    @foreach ($gigmedias as $key => $gigmedia)
                        <div class="col-12 col-md-6">
                            <div class="card mb-3 bg-light">
                                <div class="row gap-0">
                                    <div class="col-md-4">
                                        @if(!empty($gigmedia->media))
                                            {{-- @if (strpos($gigmedia->type,'image') !== false) --}}
                                            @if($gigmedia->type == 'upload_image')
                                                <img class="img-fluid rounded-start object-fit-cover"
                                                    style="height: 200px; width: 100%;" src="{{ url($gigmedia->media) }}"
                                                    alt="{{ $gigmedia->title }}">
                                            @elseif($gigmedia->type == 'url_image')
                                                <img class="img-fluid rounded-start object-fit-cover"
                                                    style="height: 200px; width: 100%;" src="{{ $gigmedia->media }}"
                                                    alt="{{ $gigmedia->title }}">
                                            @elseif(strpos('upload_video', $gigmedia->type) !== false)
                                                <video class="object-fit-cover w-100 h-100" controls src="{{ url($gigmedia->media) }}"></video>
                                            @else
                                                <div class="ratio ratio-16x9">
                                                    {!! $gigmedia->media !!}
                                                </div>
                                            @endif
                                        @endif
                                    </div>
                                    <div class="col-md-8 p-0">
                                        <div
                                            class="card-body d-flex justify-content-between align-items-lg-stretch flex-column">
                                            <h5 class="card-title text-dark mb-1">
                                                {{ $gigmedia->title }}
                                            </h5>
                                            <h5 class="card-title text-dark mb-1">
                                                <small class="my-0 badge badge-primary">{{ $gigmedia->type }}</small>
                                                <small class="my-0 badge badge-primary">{{ $gigmedia->display }}</small>
                                            </h5>
                                            <p class="card-text text-dark">{{ $gigmedia->description }} asdfas fas df</p>

                                            <form action="{{ route('admin.gigmedias.destroy', $gigmedia->id) }}"
                                                method="POST">
                                                @csrf
                                                <a class="btn btn-info" target="_blank" href="{{ url(htmlspecialchars($gigmedia->media)) }}">Show</a>
                                                @method('DELETE')
                                                {{-- @can('gig-delete') --}}
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                                {{-- @endcan --}}
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {!! $gigmedias->render() !!}
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="form-add-media" tabindex="-1" role="dialog" aria-labelledby="modalTitleId"
        aria-hidden="true">
        <form method="post" action="{{ route('admin.gigmedias.store') }}" enctype="multipart/form-data" id="form-media">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitleId">Add Media Form</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    </div>
                    <div class="modal-body">
                        <div class="row">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label fw-bold">Gig</label>
                                <select class="form-control form-select form-select-lg" name="gig_id">
                                    <option>Select one</option>
                                    @foreach ($gigs as $i => $g)
                                        <option value="{{ $g->id }}">{{ $g->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Title</label>
                                <input type="text" class="form-control form-control-sm" name="title"
                                    aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Description</label>
                                <textarea class="form-control" name="description" aria-describedby="helpId" placeholder=""></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Display</label>
                                <select class="form-control form-select form-select-lg input-media-display" name="display">
                                    <option>Select one</option>
                                    <option value="thumbnail">Thumbnail</option>
                                    <option value="background">Background</option>
                                    <option value="none">None</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Type</label>
                                <select class="form-control form-select form-select-lg input-media-type" name="type">
                                    <option>Select one</option>
                                    <option value="upload_image">Image</option>
                                    <option value="upload_video">Video</option>
                                    <option value="url_image">URL Image</option>
                                    <option value="embed_video">Embed Video</option>
                                </select>
                            </div>
                            <div class="mb-3 media-input-upload d-none">
                                <div class="input-group mb-3">
                                    <label class="btn btn-lg btn-warning w-100">
                                        <span class="py-2 h6">Upload</span>
                                        <input type="file" class="form-control" name="media_file">
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3  media-input-text d-none">
                                <textarea rows="5" name="media" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('style')
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            var html = $('.summernote').summernote('code');

            function setMediaType(masterForm, inputType) {
                inputType = (typeof inputType == "undefined") ? $(masterForm).find(".input-media-type").val() :
                    inputType;
                console.log(inputType);

                if (inputType == "upload_image" || inputType == "upload_video") {
                    $(masterForm).find(".media-input-upload").removeClass("d-none");
                    $(masterForm).find(".media-input-text").addClass("d-none");
                } else if (inputType == "url_image" || inputType == "embed_video") {
                    $(masterForm).find(".media-input-upload").addClass("d-none");
                    $(masterForm).find(".media-input-text").removeClass("d-none");
                } else {
                    $(masterForm).find(".media-input-upload").addClass("d-none");
                    $(masterForm).find(".media-input-text").addClass("d-none");
                }
                return masterForm;
            }

            $("body").on("click", ".btn-add-media-close", function(e) {
                $("#form-add-media").modal('hide');
            });

            $("body").on("click", ".btn-add-media", function(e) {
                var masterForm = $("#form-add-media");
                $(masterForm).modal('show');
            });
            $("body").on("change", ".input-media-type", function(e) {
                let masterForm = $("#form-add-media");
                let inputType = $(this).val();
                setMediaType(masterForm, inputType);
            });

            /* $("body").on("click",".btn-add-media",function(e){
                let masterForm = $(".master-form-media").clone().removeClass('master-form-media');
                $(masterForm).find(":input").val("");
                masterForm = setMediaType(masterForm);
                $(this).parents(".col-sm-3").before(masterForm);
            });
            $("body").on("click",".btn-remove-media",function(e){
                $(this).closest(".col-sm-3").remove();
            }); */

            $("body").on("change", ".input-media-type", function(e) {
                let masterForm = $(this).parents(".card-form-media");
                let inputType = $(this).val();
                setMediaType(masterForm, inputType);
            });

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                }
            });

        });
    </script>
@endsection

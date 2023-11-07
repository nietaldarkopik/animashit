@extends('backend.master')

@section('content')
    <div class="content-wrapper">
        <div class="card border-yellow mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 margin-tb mb-4">
                        <div class="pull-left">
                            <h2>Create New Portfolio
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

        <form action="{{ route('admin.portfolios.store') }}" method="POST">
            @csrf
            @method('post')
            <div class="card border-yellow">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Gig</label>
                                        <select class="form-control form-select form-select-sm" name="head[gig_id]"
                                            id="input-gig_id">
                                            <option selected value="0">Select one</option>
                                            @foreach ($gigs as $i => $gig)
                                                <option value="{{ $gig->id }}">{{ $gig->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Package</label>
                                        <select class="form-control form-select form-select-sm" name="head[gig_package_id]"
                                            id="input-gig_package_id">
                                            <option selected value="0">Select one</option>
                                            @foreach ($gigpackages as $i => $gigpackage)
                                                <option value="{{ $gigpackage->id }}">
                                                    {{ $gigpackage->head->artist->nickname }} |
                                                    {{ $gigpackage->title }} | {{ $gigpackage->price }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Customer</label>
                                        <select class="form-control form-select form-select-sm" name="head[gig_package_id]"
                                            id="input-gig_package_id">
                                            <option selected value="0">Select one</option>
                                            @foreach ($customers as $i => $customer)
                                                <option value="{{ $customer->id }}">{{ $customer->nickname }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Description</label>
                                        <textarea rows="5" class="w-100 bg-animashit-dark text-light" name="head[description]"></textarea>
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
                        <div class="col-sm-3">
                            <div class="card h-100 bg-light text-dark">
                                {{-- <img class="card-img-top" src="holder.js/100x180/" alt="Title"> --}}
                                <div class="card-body p-2">
                                    <div class="mb-3">
                                        <label class="form-label">Title</label>
                                        <input type="text" class="form-control form-control-sm" name="media[title][]"
                                        aria-describedby="helpId" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Description</label>
                                        <textarea class="form-control form-control-sm" name="media[description][]" aria-describedby="helpId" placeholder=""></textarea>
                                    </div>
                                    
                                </div>
                                <div class="card-body p-2">
                                    <div class="input-group mb-3">
                                        <label class="btn btn-lg btn-warning w-100">
                                            <i class="fas fa-upload fa-xl my-2"></i>
                                            <span class="py-2 h6">Upload</span>
                                            <input type="file" class="form-control d-none">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div
                                class="card h-100 bg-light text-dark align-items-center align-content-center justify-content-center">
                                <a href="javascript:void(0);" class="btn btn-lg btn-warning">
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
@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
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
                            $(options).append('<option value="' + v.id + '">' + v?.head
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

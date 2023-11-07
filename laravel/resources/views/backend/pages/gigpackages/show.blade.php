@extends('backend.master')

@section('content')
    <div class="content-wrapper">
        <div class="card border-yellow">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 margin-tb mb-4">
                        <div class="pull-left">
                            <h2>Detail Gig Package
                                <div class="float-end">
                                    <a class="btn btn-primary" href="{{ route('admin.gigpackages.index') }}"> Back</a>
                                </div>
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="mb-3">
                            <strong class="form-label">Gig</strong>
                            <p class="form-control">{{ $gigpackage->gig->title }}</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="mb-3">
                            <strong class="form-label">Artist</strong>
                            <p class="form-control">{{ $gigpackage->artist->nickname }}</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="row">
                            @php
                                $datapack = [];
                                $datafeatvalues = [];
                                $dataextras = [];
                            @endphp

                            @foreach ($packages as $i => $pack)
                                @php
                                    $datapacktmp = $pack->gigPackages->where('gig_package_head_id', '=', $gigpackage->id)->first();
                                    $datapack[$i] = $datapacktmp;
                                @endphp

                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="card text-start bg-light text-dark bg-primary">
                                        <div class="card-header bg-warning">
                                            <h5 class="card-title mb-0 text-dark p-0 mx-0">{{ $pack->title }}</h5>
                                        </div>
                                        <div class="card-body p-2">
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>Title:</strong>
                                                    <p class="form-control">{{ $datapack[$i]?->title }}</p>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>Price:</strong>
                                                    <p class="form-control">{{ $datapack[$i]?->price }}</p>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>Description:</strong>
                                                    <p class="form-control">{{ $datapack[$i]?->description }}</p>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>Features:</strong>
                                                    <div class="list-group list-feature-gigs"
                                                        data-package_id="{{ $pack->id }}">
                                                        @foreach ($featureList as $a => $feat)
                                                            <label class="list-group-item">
                                                                <div class="row">
                                                                    <div
                                                                        class="@if ($feat->input_type == 'text') col-6 @else col-8 @endif">
                                                                        <span class="pt-2">{{ $feat->title }}</span>
                                                                    </div>
                                                                    <div
                                                                        class="@if ($feat->input_type == 'text') col-6 @else col-4 @endif">
                                                                        @if ($feat->input_type == 'text')
                                                                            <p class="form-control m-0 me-2 text-right">
                                                                                @if (isset($packageFeatureValues[$pack->id]) && isset($packageFeatureValues[$pack->id][$feat->id]))
                                                                                    {{ $packageFeatureValues[$pack->id][$feat->id] }}
                                                                                @endif
                                                                            </p>
                                                                        @else
                                                                            <p class="m-0 me-2 text-right">
                                                                                @if (isset($packageFeatureValues[$pack->id]) &&
                                                                                        isset($packageFeatureValues[$pack->id][$feat->id]) &&
                                                                                        $packageFeatureValues[$pack->id][$feat->id] == 1)
                                                                                    <span class="fas float-end fa-check fw-bold text-success"></span>
                                                                                @else
                                                                                    <span class="fas float-end fa-close fw-bold text-danger"></span>
                                                                                @endif
                                                                            </p>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </label>
                                                        @endforeach
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
                                @foreach ($extraFeatureList as $a => $feat)
                                    <label class="list-group-item">
                                        <div class="row">
                                            <div class="@if ($feat->input_type == 'text') col-6 @else col-8 @endif">
                                                <span class="pt-2">{{ $feat->title }}</span>
                                            </div>
                                            <div class="@if ($feat->input_type == 'text') col-6 @else col-4 @endif">
                                                @if ($feat->input_type == 'text')
                                                    <p class="form-control m-0 me-2">
                                                        @if (isset($extraFeatureValues[$feat->id]))
                                                            {{ $extraFeatureValues[$feat->id] }}
                                                        @endif
                                                    </p>
                                                @else
                                                    <p class="form-check-input m-0 me-2 float-end text-right">
                                                        @if (isset($extraFeatureValues[$feat->id]) && $extraFeatureValues[$feat->id] == 1)
                                                            <span class="fas float-end fa-check fw-bold text-success"></span>
                                                        @else
                                                            <span class="fas float-end fa-close fw-bold text-danger"></span>
                                                        @endif
                                                    </p>
                                                @endif
                                            </div>
                                        </div>
                                    </label>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

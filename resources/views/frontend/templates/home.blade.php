@extends('../frontend.master')
@php
    $gigs = \App\Models\GigModel::orderBy('sort', 'ASC')->get();
@endphp
@section('content')
    <section id="main-container" class="p-0 min-vh-100 container-fluid">
        <div class="container-xxxl video-container position-relative p-0 mx-auto">
            @include('frontend.widgets.slider')
        </div>
    </section>

@endsection

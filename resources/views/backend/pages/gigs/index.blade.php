@extends('backend.master')

@section('content')
    <div class="content-wrapper">
        <div class="card border-yellow">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 margin-tb mb-4">
                        <div class="pull-left">
                            <h2>Gig Management
                                <div class="float-end">
                                    @can('gig-create')
                                        <a class="btn btn-success" href="{{ route('admin.gigs.create') }}"> Create New Gig</a>
                                    @endcan
                                </div>
                            </h2>
                        </div>
                    </div>
                </div>

                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
            </div>

                <div class="card-body table-responsive">
                    <table class="table table-hover table-animashit">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th width="280px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($gigs as $key => $gig)
                                <tr>
                                    <td>{{ $gig->title }}</td>
                                    <td>
                                        <form action="{{ route('admin.gigs.destroy', $gig->id) }}" method="POST">
                                            <a class="btn btn-info" href="{{ route('admin.gigs.show', $gig->id) }}">Show</a>
                                            @can('gig-edit')
                                                <a class="btn btn-primary" href="{{ route('admin.gigs.edit', $gig->id) }}">Edit</a>
                                                <a class="btn btn-primary" href="{{ route('admin.gigmedias.bygig', $gig->id) }}">Media</a>
                                            @endcan


                                            @csrf
                                            @method('DELETE')
                                            @can('gig-delete')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            @endcan
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="card-body table-responsive">
                {!! $gigs->render() !!}
            </div>
        </div>
    </div>
@endsection

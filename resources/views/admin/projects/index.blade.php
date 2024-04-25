@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <ul class="list-group">
            @foreach ($projects as $project)
                <li class="list-group-item d-flex flex-column  text-center border text-uppercase fw-bold">
                    <a href="{{ route('admin.projects.show', ['project' => $project->id]) }}" class="py-2 text-decoration-none"> {{ $project->title }}</a>
                </li>
            @endforeach
        </ul>

        <div class="text-center">
            <a href="{{ route('admin.projects.create') }}" class="btn btn-sm btn-outline-success text-uppercase text-decoration-none mt-3 fw-bold">Create a new project</a>
        </div>
    </div>
@endsection

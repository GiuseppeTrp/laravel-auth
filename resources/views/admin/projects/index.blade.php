@extends('layouts.app')
@section('content')
    <div class="container py-5 text-center ">
        <ul>
            @foreach ($projects as $project)
        
            <li class="list-group-item d-flex flex-column ">
                <a href="{{ route('admin.projects.show', ['project' => $project->id]) }}" class="py-2">Project {{ $project->title }}</a>

        </ul>
      
        
            
        @endforeach
        <div>
            <a href="{{ route('admin.projects.create') }}" class="btn btn-sm btn-outline-success text-uppercase text-decoration-none">create a new project</a>


        </div>
    </div>
@endsection
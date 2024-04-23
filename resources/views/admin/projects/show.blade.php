@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1>{{ $project->title }}</h1>
        <p><strong>Description:</strong> {{ $project->description }}</p>
        <p><strong>Image:</strong> {{ $project->img }}</p>
        <p><strong>Type:</strong> {{ $project->types }}</p>
        <p><strong>Link:</strong> <a href="{{ $project->link }}">{{ $project->link }}</a></p>
    </div>
    
    <div class="text-center">
        <div class="btn btn-outline-primary text-uppercase fw-bold">
            <a href="{{ route('admin.projects.edit', $project->id) }}" class="text-white text-decoration-none">Edit Project</a>
        </div>
        
        <div class="btn btn-outline-danger text-uppercase fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <span class="text-white text-decoration-none">Delete Project</span>
        </div>
        
        <div class="btn btn-outline-warning text-uppercase fw-bold">
            <a href="{{ route('admin.projects.create') }}" class="text-white text-decoration-none">Add Project</a>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Project</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete "{{ $project->title }}"?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="container py-5 d-flex flex-column ">
        <h1 class="pb-5 text-center ">{{ $project->title }}</h1>
        <div class="bpb-4">
            <h5>Description:</h5>
            <p class="border rounded p-2 text-dark bg-light fw-bold">{{ $project->description }}</p>
        </div>
        <div class=" pb-4">
            <h5>Image:</h5>
            <div class="container w-50  ">
                <img src="{{asset('storage/'. $project->cover_image)}}" alt="Cover Image" class="container-fluid border rounded p-2 text-dark bg-light">


            </div>
        </div>
        <div class=" pb-4">
            <h5>Type:</h5>
            <p class="border rounded p-2 text-dark bg-light fw-bold">{{ $project->types }}</p>
        </div>
        <div class=" pb-4">
            <h5>Link:</h5>
            <p class="border rounded p-2  bg-light fw-bold"><a class="text-dark" href="{{ $project->link }}">{{ $project->link }}</a></p>
        </div>
    </div>
    
    <div class="text-center mt-5">
        <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-outline-primary text-uppercase fw-bold me-3">Edit Project</a>
        
        <button class="btn btn-outline-danger text-uppercase fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete Project</button>
        
        <a href="{{ route('admin.projects.index') }}" class="btn btn-outline-secondary text-uppercase fw-bold ms-3">Back to Projects</a>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Project</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete the project '{{ $project->title }}'? This action cannot be undone.
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

</div>
   
@endsection

@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1>Edit Project</h1>

    <form action="{{ route('admin.projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        {{-- title input --}}
        <div class="mb-4 pt-4">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') ?? $project->title }}">
            @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        {{-- description input --}}
        <div class="mb-4">
            <label for="description" class="form-label">Project description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3">{{ old('description') ?? $project->description }}</textarea>
            @error('description')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        {{-- cover image input --}}
        <div class="mb-4">
            <label for="cover_image" class="form-label">Cover image</label>
            <input type="file" class="form-control @error('cover_image') is-invalid @enderror" id="cover_image" name="cover_image">
            @error('cover_image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
            
        </div>

        {{-- Types input --}}
        <div class="mb-4">
            <label for="types" class="form-label">Project Types</label>
            <select class="form-select @error('types') is-invalid @enderror" id="types" name="types">
                <option value="">Select a type</option>
                <option value="laravel/vite" {{ old('types') == 'laravel/vite' ? 'selected' : '' }}>laravel/vite</option>
                <option value="vite" {{ old('types') == 'vite' ? 'selected' : '' }}>vite</option>
                <option value="vue" {{ old('types') == 'vue' ? 'selected' : '' }}>vue</option>
                <option value="php" {{ old('types') == 'php' ? 'selected' : '' }}>php</option>
                <option value="javascript" {{ old('types') == 'javascript' ? 'selected' : '' }}>javascript</option>
            </select>
            @error('types')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        {{-- Project url input --}}
        <div class="mb-4">
            <label for="link" class="form-label">Project link</label>
            <input type="text" class="form-control @error('link') is-invalid @enderror" id="link" name="link" value="{{ old('link') ?? $project->link }}">
            @error('link')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
<div class="text-center py-5" >
                    
    <a href="{{ route('admin.projects.index') }}" class="btn  btn-outline-success text-uppercase fw-bold px-3 ms-3">All project</a>
    <a href="{{ route('admin.projects.show', ['project' => $project->id]) }}" class="btn btn-outline-secondary text-uppercase fw-bold ms-3 px-5">Back</a>


</div>
@endsection

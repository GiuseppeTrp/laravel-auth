@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1>Edit Project</h1>

    <form action="{{ route('admin.projects.update', $project->id) }}" method="POST">
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
            <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') ?? $project->description }}</textarea>
            @error('description')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        {{-- img input --}}
        <div class="mb-4 pt-4">
            <label for="img" class="form-label">Project image</label>
            <input type="text" class="form-control" id="img" name="img" value="{{ old('img') ?? $project->img }}">
            @error('img')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        {{-- Types input --}}
        <div class="mb-4">
            <label for="types" class="form-label">Project Types</label>
            <select class="form-select" id="types" name="types">
                <option value="laravel/vite" {{ (old('types') ?? $project->types) == 'laravel/vite' ? 'selected' : '' }}>laravel/vite</option>
                <option value="vite" {{ (old('types') ?? $project->types) == 'vite' ? 'selected' : '' }}>vite</option>
                <option value="vue" {{ (old('types') ?? $project->types) == 'vue' ? 'selected' : '' }}>vue</option>
                <option value="php" {{ (old('types') ?? $project->types) == 'php' ? 'selected' : '' }}>php</option>
                <option value="javascript" {{ (old('types') ?? $project->types) == 'javascript' ? 'selected' : '' }}>javascript</option>
            </select>
            
        </div>

        {{-- Project url input --}}
        <div class="mb-4 pt-4">
            <label for="link" class="form-label">Project link</label>
            <input type="text" class="form-control" id="link" name="link" value="{{ old('link') ?? $project->link }}">
            @error('link')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection

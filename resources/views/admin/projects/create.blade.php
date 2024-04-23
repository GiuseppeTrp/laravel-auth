@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create a new project</h1>

        <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf
        
            {{-- title input --}}
            <div class="mb-4 pt-4">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="">
                @error('title')
                    <div class="invalid-feedback ">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        
            {{-- description input --}}
            <div class="mb-4">
                <label for="description" class="form-label">Project description</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
        
            {{-- img input --}}
            <div class="mb-4 pt-4">
                <label for="img" class="form-label">Project image</label>
                <input type="text" class="form-control" id="img" name="img" placeholder="">
            </div>
        
            {{-- Types input --}}
            <div class="mb-4">
                <label for="types" class="form-label">Project Types</label>
                <select class="form-select" id="types" name="types">
                    <option value="laravel/vite" {{ old('types') == 'laravel/vite' ? 'selected' : '' }}>laravel/vite</option>
                    <option value="vite" {{ old('types') == 'vite' ? 'selected' : '' }}>vite</option>
                    <option value="vue" {{ old('types') == 'vue' ? 'selected' : '' }}>vue</option>
                    <option value="php" {{ old('types') == 'php' ? 'selected' : '' }}>php</option>
                    <option value="javascript" {{ old('types') == 'javascript' ? 'selected' : '' }}>javascript</option>
                </select>
            </div>
        
            {{-- Project url input --}}
            <div class="mb-4 pt-4">
                <label for="link" class="form-label">Project link</label>
                <input type="text" class="form-control" id="link" name="link" placeholder="">
            </div>
        
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
        
    </div>
@endsection
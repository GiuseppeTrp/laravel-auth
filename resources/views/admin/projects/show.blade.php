@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1>{{ $project->title }}</h1>
        <p><strong>Description:</strong> {{ $project->description }}</p>
        <p><strong>Image:</strong> {{ $project->img }}</p>
        <p><strong>Type:</strong> {{ $project->type }}</p>
        <p><strong>Link:</strong> <a href="{{ $project->link }}">{{ $project->link }}</a></p>
    </div>
@endsection
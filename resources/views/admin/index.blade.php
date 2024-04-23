@extends('layouts.app')
@section('content')
    <div class=" container controller py-5 text-center">
        <h1 class="py-5">Admin Manager</h1>
        <h2>Welcome User <span class="text-success"> {{$user -> name}}</span>!</h2>
    </div>
   
@endsection
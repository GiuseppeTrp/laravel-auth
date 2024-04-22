@extends('layouts.app')
@section('content')
    <div class="controller py-5">
        <h1>Admin Manager</h1>
        <h2>Benvenuto Utente <span class="text-success"> {{$user -> name}}</span>!</h2>
    </div>
@endsection
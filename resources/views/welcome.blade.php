@extends('layouts.app')
@section('content')

<div class="jumbotron p-5 mb-4  rounded-3">
    <div class="container py-5">
        <div class="logo_laravel">
          
        </div>
        <h1 class="display-5 fw-bold pb-5 text-center">
            Home
        </h1>
        <div class="content text-center">
            <div class="container">
                <div class="btn btn-outline-light">
                    <a href="{{ url('dashboard') }}" class="text-uppercase text-decoration-none"> Dashboard</a>

                </div>
            </div>
        </div>

       
    </div>
</div>


@endsection
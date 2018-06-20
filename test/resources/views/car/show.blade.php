@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <h1>{{ $car->title }}</h1>
        </div>
        <div class="row">
            <p>{{ $car->model }}</p>
        </div>
    </div>

@endsection
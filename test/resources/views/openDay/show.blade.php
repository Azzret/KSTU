@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <h1>{{ $openDay->StartDate }}</h1>
        </div>
        <div class="row">
            <p>{{ $openDay->FinisDay }}</p>
        </div>
    </div>

@endsection
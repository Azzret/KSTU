@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <h1>{{ $applicant->FullName }}</h1>
        </div>
        <div class="row">
            <p>{{ $applicant->Address }}</p>
        </div>
        <div class="row">
            <p>{{ $applicant->Phone }}</p>
        </div>
        <div class="row">
            <p>{{ $applicant->Point }}</p>
        </div>
    </div>

@endsection
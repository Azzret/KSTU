@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <form action="/openDay/{{ $openDay->id }}" method="post" class="col-10">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Start</label>
                    <input type="date" class="form-control" name="StartDate" value="{{ $openDay->StartDate }}">
                </div>
                <div class="form-group">
                    <label>Finish</label>
                    <input type="date" class="form-control" name="FinisDay" value="{{ $openDay->FinisDay }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>


@endsection
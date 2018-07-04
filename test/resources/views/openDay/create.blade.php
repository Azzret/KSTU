@extends('layouts.app')

@section('styles')

    {{--<link rel="stylesheet" href="{{ asset('css/datepicker.min.css') }}">--}}

@endsection

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <form action="{{ route('openDay.store') }}" method="post" class="col-10">
                @csrf
                <div class="form-group">
                    <label>Дата открытия</label>
                    <input type="date" class="form-control" name="StartDate">
                </div>
                <div class="form-group">
                    <label>Дата закрытия</label>
                    <input type="date" class="form-control" name="FinisDay">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    {{--<script src="{{ asset('js/datepicker.min.js') }}"></script>--}}
    {{--<script src="{{ asset('js/datepicker-custom.js') }}"></script>--}}
@endsection
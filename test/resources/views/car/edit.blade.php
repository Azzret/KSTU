@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <form action="/car/{{ $car->id }}" method="post" class="col-10">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Марка</label>
                    <input type="text" class="form-control" name="title" value="{{ $car->title }}">
                </div>
                <div class="form-group">
                    <label>Модель</label>
                    <input type="text" class="form-control" name="model" value="{{ $car->model }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>


@endsection
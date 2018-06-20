@extends('layouts.app')

@section('content')

    <div class="container">
        @if(Auth::user() && Auth::user()->admin == 1)

            <div class="row justify-content-end">
                <a href="{{ route('car.create') }}" class="btn btn-success">Создать</a>
            </div>

        @endif
        <div class="row">
            @foreach($cars as $car)

                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $car->title }}</h5>
                            <p class="card-text">{{ $car->model }}</p>
                            <a href="/car/{{ $car->id }}" class="btn btn-primary">Показать</a>
                            @if(Auth::user())

                                <form action="/buy/{{ $car->id }}" method="post">
                                    @csrf
                                    <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                                    <button type="submit" class="btn btn-primary">Buy</button>
                                </form>

                            @endif
                            @if(Auth::user() && Auth::user()->admin == 1)

                                <a href="/car/{{ $car->id }}/edit" class="btn btn-warning">Редактировать</a>
                                <form action="/car/{{ $car->id }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Удалить</button>
                                </form>

                            @endif
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
    </div>

@endsection
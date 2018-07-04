@extends('layouts.app')

@section('content')

    <div class="container">
        @if(Auth::user() && Auth::user()->admin == 1)

            <div class="row justify-content-end">
                <a href="{{ route('openDay.create') }}" class="btn btn-success">Создать</a>
            </div>

        @endif
        <div class="row">
            @foreach($openDays as $openDay)

                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">День открытых дверей начинается</h5>
                            <p class="card-title">{{ $openDay->StartDate }}</p>
                            <h5 class="card-title">День открытых дверей закрывается</h5>
                            <p class="card-text">{{ $openDay->FinisDay }}</p>
                            <a href="/openDay/{{ $openDay->id }}" class="btn btn-primary">Показать</a>

                            @if(Auth::user() && Auth::user()->admin == 1)

                                <a href="/openDay/{{ $openDay->id }}/edit" class="btn btn-warning">Редактировать</a>
                                <form action="/openDay/{{ $openDay->id }}" method="post">
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
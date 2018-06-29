@extends('layouts.app')

@section('content')

    <div class="container">
        @if(Auth::user() && Auth::user()->admin == 1)

            <div class="row justify-content-end">
                <a href="{{ route('applicant.create') }}" class="btn btn-success">Создать</a>
            </div>

        @endif
        <div class="row">
            @foreach($applicants as $applicant)

                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $applicant->FullName }}</h5>
                            <p class="card-text">{{ $applicant->Address }}</p>
                            <p class="card-text">{{ $applicant->Phone }}</p>
                            <p class="card-text">{{ $applicant->Point }}</p>
                            <a href="/applicant/{{ $applicant->id }}" class="btn btn-primary">Показать</a>
                            @if(Auth::user() && Auth::user()->admin == 1)

                                <a href="/applicant/{{ $applicant->id }}/edit" class="btn btn-warning">Редактировать</a>
                                <form action="/applicant/{{ $applicant->id }}" method="post">
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
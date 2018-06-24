@extends('layouts.app')

@section('content')

    <div class="container">
        @if(Auth::user() && Auth::user()->admin == 1)

            <div class="row justify-content-end">
                <a href="{{ route('applicant.create') }}" class="btn btn-success">Создать</a>
            </div>

        @endif
        <div class="row">
            <table>
            <tr>
                <th>ФИО</th>
                <th>Адрес</th>
                <th>Телефон</th>
                <th>ОРТ балл</th>
            </tr>
            @foreach($applicants as $applicant)

                    <tr>
                        <td>{{$applicant->FullName}}</td>
                        <td>{{$applicant->Address}}</td>
                        <td>{{$applicant->Phone}}</td>
                        <td>{{$applicant->Point}}</td>

                        @if(Auth::user() && Auth::user()->admin == 1)
                        <td><a href="/car/{{ $applicant->id }}/edit" class="btn btn-warning">Редактировать</a></td>
                            <form action="/car/{{ $applicant->id }}" method="post">
                                @csrf
                                @method('DELETE')
                               <td> <button class="btn btn-danger">Удалить</button></td>
                            </form>

                        @endif

                    </tr>
                </table>


            @endforeach
        </div>
    </div>

@endsection
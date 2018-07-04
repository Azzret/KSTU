

@extends('layouts.app')

@section('styles')

    <style>
        .demotable {

            counter-reset: schetchik;  /* счётчик с названием "schetchik" работает в рамках класса .demotable */
        }
        .demotable tr {
            counter-increment: schetchik;  /* при встрече тега tr счётчик с названием "schetchik" увеличивается на единицу */
        }
        .demotable td,
        .demotable tr:before {
            padding: .1em .100em;
            border: 1px solid #E7D5C0;
        }
        .demotable tr:before {
            content: counter(schetchik);  /* значение счётчика с названием "schetchik" записывается в первую клетку строки */
            display: table-cell;
            vertical-align: inherit;
            color: #978777;
        }
    </style>


@endsection

@section('content')

    <div class="container">
        @if(Auth::user() && Auth::user()->admin == 1)

            <div class="row justify-content-end">
                <a href="{{ route('applicant.create') }}" class="btn btn-success">Создать</a>
            </div>

        @endif


            <div class="row">
                <table class="table">
                    <thead class="thead-inverse">
                    <th scope="col">#</th>
                    <th scope="col">Фамилия</th>
                    <th scope="col">Имя</th>
                    <th scope="col">ОРТ балл</th>
                    </thead>

                
                    @foreach($applicants as $applicant)

                        <tbody>
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$applicant->s_name}}</td>
                            <td>{{$applicant->f_name}}</td>
                            <td>{{$applicant->point}}</td>

                        </tr>
                        </tbody>

                    @endforeach


                </table>
            </div>


        </form>

    </div>


@endsection




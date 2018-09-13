

@extends('layouts.app')



@section('content')

    <div class="container">



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




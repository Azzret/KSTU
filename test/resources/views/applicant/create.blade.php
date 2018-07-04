@extends('layouts.app')

@section('styles')

    <link rel="stylesheet" href="{{ asset('css/datepicker.min.css') }}">

@endsection

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <form action="{{ route('applicant.store') }}" method="post" class="col-10">
                @csrf
                <div class="form-group">
                    <label>Имя</label>
                    <input type="text" class="form-control" name="f_name">
                </div>
                <div class="form-group">
                    <label>Фамилия</label>
                    <input type="text" class="form-control" name="s_name">
                </div>
                <div class="form-group">
                    <label>Дата рождения</label>
                    <input type="date" class="form-control" id="date_birth">
                </div>
                <div class="form-group">
                    <label>Место проживания</label>
                    <select class="form-control" name="place_id" id="place">

                        @foreach($places as $place)
                            <option value="{{$place->id}}">{{$place->name}}</option>
                        @endforeach

                    </select>
                </div>
                <div class="form-group">
                    <label>Адрес</label>
                    <input type="text" class="form-control" name="Address">
                </div>
                <div class="form-group">
                    <label>Законченное учебное заведение</label>
                    <select class="form-control" name="school_id" id="school">
                        @foreach($schools as $school)

                            <option value="{{ $school->id }}">{{ $school->name }}</option>

                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Факультет</label>
                    <select name="faculty_id" id="faculty" class="form-control">
                        <option value="" class="disabled" >Выберите факультет</option>
                        @foreach($faculties as $faculty)

                            <option value="{{ $faculty->id }}">{{ $faculty->name }}</option>

                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Специальность</label>
                    <select name="specialty_id" id="specialty" class="disabled form-control"></select>
                </div>
                <div class="form-group">
                    <label>Форма обучения</label>
                    <input type="text" class="form-control" name="type_of_study">
                </div>
                <div class="form-group">
                    <label>Телефон</label>
                    <input type="text" class="form-control" name="Phone">
                </div>
                <div class="form-group">
                    <label>ОРТ Балл</label>
                    <input type="text" class="form-control" name="Point">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

@endsection

@section('scripts')

    <script>
        $(document).ready(function () {
            $('#faculty').click(function () {
                var faculty_id = $('#faculty').val();
                $.ajax({
                    url: '/specialties',
                    method: 'GET',
                    dataType: 'json',
                    data: {
                        'faculty_id': faculty_id
                    },
                    success: function (data) {
                        console.log(data.specialties);
                        $('#specialty').removeClass('disabled');
                        $('#specialty').empty();
                        for (var specialty of data.specialties) {
                            $('#specialty').append(
                                '<option value="' + specialty.id + '">' + specialty.name + '</option>'
                            )
                        }
                    },
                    error: function (error) {
                        console.log('error');
                    }
                });
            });
        });
    </script>

    {{--    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>--}}

    <script src="{{ asset('js/datepicker.min.js') }}"></script>
    <script src="{{ asset('js/datepicker-custom.js') }}"></script>

@endsection
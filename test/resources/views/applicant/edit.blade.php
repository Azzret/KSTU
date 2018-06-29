@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <form action="/applicant/{{ $applicant->id }}" method="post" class="col-10">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>ФИО</label>
                    <input type="text" class="form-control" name="FullName" value="{{ $applicant->FullName }}">
                </div>
                <div class="form-group">
                    <label>Адрес</label>
                    <input type="text" class="form-control" name="Address" value="{{ $applicant->Address }}">
                </div>
                <div class="form-group">
                    <label>Телефон</label>
                    <input type="text" class="form-control" name="Phone" value="{{ $applicant->Phone }}">
                </div>
                <div class="form-group">
                    <label>Балл</label>
                    <input type="text" class="form-control" name="Point" value="{{ $applicant->Point }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>


@endsection
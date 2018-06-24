@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <form action="{{ route('applicant.store') }}" method="post" class="col-10">
                @csrf
                <div class="form-group">
                    <label>ФИО</label>
                    <input type="text" class="form-control" name="FullName">
                </div>
                <div class="form-group">
                    <label>Адрес</label>
                    <input type="text" class="form-control" name="Address">
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
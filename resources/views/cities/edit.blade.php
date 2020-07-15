@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-7 shadow p-3 bg-info rounded">
                <h2 class="text-center my-4">Uredi grad</h2>
            </div>
            <form method="post" action="/cities/{{$city->id}}" class="col-7 shadow p-3 mb-5 bg-white rounded" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="name">Naziv:</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$city->name}}">
                </div>
                <div class="form-group">
                    <label for="name">Izmijeni sliku:</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                <div class="form-group">
                    <img src="http://rwa-grupa17.test/storage/{{$city->image_path}}" class="img-fluid">
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Potvrdi</button>
                </div>
            </form>
            <div class="col-7">
                @include('layouts.errors')
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-7 shadow p-3 bg-info rounded">
                <h2 class="text-center my-4">Nova aviokompanija</h2>
            </div>
            <form method="POST" action="/airlines" class="col-7 shadow p-3 mb-5 bg-white rounded">
                @csrf
                <div class="form-group">
                    <label for="name">Naziv:</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="name">Oznaka:</label>
                    <input type="text" class="form-control" id="tag" name="tag">
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

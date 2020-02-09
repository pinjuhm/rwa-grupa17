@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-7 shadow p-3 bg-info rounded">
                <h2 class="text-center my-4">Novi zrakoplov</h2>
            </div>
            <form method="POST" action="/planes" class="col-7 shadow p-3 mb-5 bg-white rounded">
                @csrf
                <div class="form-group">
                    <label for="name">Naziv:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="capacity">Kapacitet:</label>
                    <input type="number" min="1" step="1" class="form-control" id="capacity" name="capacity" required>
                </div>
                <div class="form-group">
                    <label for="airline_id">Aviokompanija:</label>
                    <select class="form-control" id="airline_id" name="airline_id" required>
                        @foreach($airlines as $airline)
                            <option value={{$airline->id}}>{{$airline->name}}</option>
                        @endforeach
                    </select>
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

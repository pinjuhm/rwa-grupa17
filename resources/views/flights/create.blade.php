@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-7 shadow p-3 bg-info rounded">
                <h2 class="text-center my-4">Novi let</h2>
            </div>
            <form method="POST" action="/flights" class="col-7 shadow p-3 mb-5 bg-white rounded">
                @csrf
                <div class="form-group">
                    <label for="city_id_from">Odlazak:</label>
                    <select class="form-control" id="city_id_from" name="city_id_from" required>
                        @foreach($cities as $city)
                            <option value={{$city->id}}>{{$city->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="city_id_to">Dolazak:</label>
                    <select class="form-control" id="city_id_to" name="city_id_to" required>
                        @foreach($cities as $city)
                            <option value={{$city->id}}>{{$city->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="plane_id">Zrakoplov:</label>
                    <select class="form-control" id="plane_id" name="plane_id" required>
                        @foreach($planes as $plane)
                            <option value={{$plane->id}}>{{$plane->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="price">Cijena:</label>
                    <input type="number" step="0.01" class="form-control" id="price" name="price" required>
                </div>
                <div class="form-group">
                    <label for="datetime">Datum i vrijeme:</label>
                    <input type="datetime-local" class="form-control" id="datetime" name="datetime">
                </div>
                <div class="form-group">
                    <label for="duration">Trajanje:</label>
                    <input type="number" class="form-control" id="duration" name="duration">
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Confirm</button>
                </div>
            </form>
            <div class="col-7">
                @include('layouts.errors')
            </div>
        </div>
    </div>
@endsection

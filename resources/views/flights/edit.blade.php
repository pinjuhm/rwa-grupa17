@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-7 shadow p-3 bg-info rounded">
                <h2 class="text-center my-4">Novi let</h2>
            </div>
            <form method="POST" action="/flights/{{$flight->id}}" class="col-7 shadow p-3 mb-5 bg-white rounded">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="city_id_from">Odlazak:</label>
                    <select class="form-control" id="city_id_from" name="city_id_from" required>
                        @foreach($cities as $city)
                            <option value={{$city->id}} {{$city->id == $flight->cityFrom->id ? 'selected' : ''}}>{{$city->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="city_id_to">Dolazak:</label>
                    <select class="form-control" id="city_id_to" name="city_id_to" required>
                        @foreach($cities as $city)
                            <option value={{$city->id}} {{$city->id == $flight->cityTo->id ? 'selected' : ''}}>{{$city->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="plane_id">Zrakoplov:</label>
                    <select class="form-control" id="plane_id" name="plane_id" required>
                        @foreach($planes as $plane)
                            <option value={{$plane->id}} {{$plane->id == $flight->plane->id ? 'selected' : ''}}>{{$plane->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="price">Cijena:</label>
                    <input type="number" step="0.01" class="form-control" id="price" name="price" placeholder="€" value="{{$flight->price}}" required>
                </div>
                <div class="form-group">
                    <label for="datetime">Datum i vrijeme:</label>
                    <input type="datetime-local" class="form-control" id="datetime" name="datetime" value="{{ date('Y-m-d\TH:i', strtotime($flight->datetime)) }}" required>
                </div>
                <div class="form-group">
                    <label for="duration">Trajanje:</label>
                    <input type="number" class="form-control" id="duration" name="duration" placeholder="Trajanje u minutama" value="{{$flight->duration}}" required>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="{{$flight->promoted}}" name="promoted" id="defaultCheck1" {{$flight->promoted ? 'checked' : ''}}>
                        <label class="form-check-label" for="defaultCheck1">
                            Promovirano:
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="{{$flight->completed}}" name="completed" id="defaultCheck2" {{$flight->completed ? 'checked' : ''}}>
                        <label class="form-check-label" for="defaultCheck2">
                            Završeno:
                        </label>
                    </div>
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

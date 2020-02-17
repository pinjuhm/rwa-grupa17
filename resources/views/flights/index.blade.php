@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-start">
            <table class="table table-hover my-3">
                <caption>Pregled letova</caption>
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Odlazak</th>
                    <th scope="col">Dolazak</th>
                    <th scope="col">Zrakoplov</th>
                    <th scope="col">Kapacitet</th>
                    <th scope="col">Cijena</th>
                    <th scope="col">Datum</th>
                    <th scope="col">Trajanje leta</th>
                    <th scope="col">Promoviran</th>
                    <th scope="col">Završen</th>
                    <th scope="col">Akcije</th>
                </tr>
                </thead>
                <tbody>
                @foreach($flights as $flight)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$flight->city_from_name}}</td>
                    <td>{{$flight->city_to_name}}</td>
                    <td>{{$flight->plane->name}}</td>
                    <td>{{$flight->plane->capacity}}</td>
                    <td>{{$flight->price}} €</td>
                    <td>{{$flight->datetime}}</td>
                    <td>{{$flight->duration}} min</td>
                    <td>{{$flight->promoted ? 'Da' : 'Ne'}}</td>
                    <td>{{$flight->completed ? 'Da' : 'Ne'}}</td>
                    <td>
                        <div class="row">
                            <a href="/flights/{{$flight->id}}/edit" class="btn btn-sm btn-dark mx-2">Uredi</a>
                            <form id="flightDelete-{{$flight->id}}" method="POST"
                                  action="/flights/{{$flight->id}}">
                                @csrf
                                @method('DELETE')
                                @component('layouts.modalDelete')
                                    @slot('id')
                                        {{$flight->id}}
                                    @endslot
                                    @slot('item')
                                        let
                                    @endslot
                                @endcomponent
                                <button type="button" class="btn btn-sm btn-danger mx-2" data-toggle="modal"
                                        data-target="#modalDelete-{{$flight->id}}">Izbriši
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-between my-3">
            {{ $flights->links() }}
            <a class="btn btn-primary h-50" href="/flights/create">Dodaj let</a>
        </div>
    </div>
@endsection


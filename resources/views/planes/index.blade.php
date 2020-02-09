@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-start">
            <table class="table table-hover my-3">
                <caption>Pregled zrakoplova</caption>
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Naziv</th>
                    <th scope="col">Kapacitet</th>
                    <th scope="col">Aviokompanija</th>
                    <th scope="col" colspan="2">Akcije</th>
                </tr>
                </thead>
                <tbody>
                @foreach($planes as $plane)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$plane->name}}</td>
                        <td>{{$plane->capacity}}</td>
                        <td>{{$plane->airline->name}}</td>
                        <td>
                            <div class="row">
                                <a href="/planes/{{$plane->id}}/edit" class="btn btn-sm btn-dark mx-2">Uredi</a>
                                <form id="planeDelete-{{$plane->id}}" method="POST"
                                      action="/planes/{{$plane->id}}">
                                    @csrf
                                    @method('DELETE')
                                    @component('layouts.modalDelete')
                                        @slot('id')
                                            {{$plane->id}}
                                            {{--                            {{$author->id}}--}}
                                        @endslot
                                        @slot('item')
                                            zrakoplov
                                        @endslot
                                    @endcomponent
                                    <button type="button" class="btn btn-sm btn-danger mx-2" data-toggle="modal"
                                            data-target="#modalDelete-{{$plane->id}}">Izbriši
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
            {{ $planes->links() }}
            <a class="btn btn-primary h-50" href="/planes/create">Dodaj zrakoplov</a>
        </div>
    </div>
@endsection


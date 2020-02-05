@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-start">
            <table class="table table-hover my-3">
                <caption>Pregled aviokompanija</caption>
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Naziv</th>
                    <th scope="col">Oznaka</th>
                    <th>Akcije</th>
                </tr>
                </thead>
                <tbody>
                @foreach($airlines as $airline)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$airline->name}}</td>
                        <td>{{$airline->tag}}</td>
                        <td>
                            <div class="row">
                                <a href="/airlines/{{$airline->id}}/edit" class="btn btn-sm btn-dark mx-2">Uredi</a>
                                <form id="airlineDelete-{{$airline->id}}" method="POST"
                                      action="/airlines/{{$airline->id}}">
                                    @csrf
                                    @method('DELETE')
                                    @component('layouts.modalDelete')
                                        @slot('id')
                                            {{$airline->id}}
                                            {{--                            {{$author->id}}--}}
                                        @endslot
                                        @slot('item')
                                            aviokompaniju
                                        @endslot
                                    @endcomponent
                                    <button type="button" class="btn btn-sm btn-danger mx-2" data-toggle="modal"
                                            data-target="#modalDelete-{{$airline->id}}">Izbriši
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
            {{ $airlines->links() }}
            <a class="btn btn-primary h-50" href="/airlines/create">Dodaj aviokompaniju</a>
        </div>
    </div>
@endsection


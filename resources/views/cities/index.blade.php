@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-start">
            <table class="table table-hover my-3">
                <caption>Pregled gradova</caption>
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Naziv</th>
                    <th scope="col">Akcije</th>
                </tr>
                </thead>
                <tbody>
                @foreach($cities as $city)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$city->name}}</td>
                        <td>
                            <div class="row">
                                <a href="/cities/{{$city->id}}/edit" class="btn btn-sm btn-dark mx-2">Uredi</a>
                                <form id="cityDelete-{{$city->id}}" method="POST"
                                      action="/cities/{{$city->id}}">
                                    @csrf
                                    @method('DELETE')
                                    @component('layouts.modalDelete')
                                        @slot('id')
                                            {{$city->id}}
                                            {{--                            {{$author->id}}--}}
                                        @endslot
                                        @slot('item')
                                            let
                                        @endslot
                                    @endcomponent
                                    <button type="button" class="btn btn-sm btn-danger mx-2" data-toggle="modal"
                                            data-target="#modalDelete-{{$city->id}}">Izbriši
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
            {{ $cities->links() }}
            <a class="btn btn-primary h-50" href="/cities/create">Dodaj grad</a>
        </div>
    </div>
@endsection


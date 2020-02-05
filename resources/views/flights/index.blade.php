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
                    <th scope="col">Cijena</th>
                    <th scope="col">Datum</th>
                    <th scope="col">Trajanje leta</th>
                    <th scope="col">Akcije</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mostar</td>
                    <td>Sarajevo</td>
                    <td>B-123</td>
                    <td>250€</td>
                    <td>31.12.2009. 16:30:00</td>
                    <td>2 sata</td>
                    <td>
                        <div class="row">
                            <a href="/authors/2/edit" class="btn btn-sm btn-dark mx-2">Uredi</a>
                            <form id="flightDelete-1" method="POST"
                                  action="/flights/1">
                                @csrf
                                @method('DELETE')
                                @component('layouts.modalDelete')
                                    @slot('id')
                                        1
                                        {{--                            {{$author->id}}--}}
                                    @endslot
                                    @slot('item')
                                        let
                                    @endslot
                                @endcomponent
                                <button type="button" class="btn btn-sm btn-danger mx-2" data-toggle="modal"
                                        data-target="#modalDelete-1">Izbriši
                                </button>
                            </form>
                        </div>
                    </td>

                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>
                        <div class="row">
                            <a href="/authors/2/edit" class="btn btn-sm btn-dark mx-2">Edit</a>
                            <button type="button" class="btn btn-sm btn-danger mx-2" data-toggle="modal"
                                    data-target="#modalDelete-2">Delete
                            </button>
                        </div>
                    </td>

                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>
                        <div class="row">
                            <a href="/authors/2/edit" class="btn btn-sm btn-dark mx-2">Edit</a>
                            <button type="button" class="btn btn-sm btn-danger mx-2" data-toggle="modal"
                                    data-target="#modalDelete-2">Delete
                            </button>
                        </div>
                    </td>

                </tr>
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-between my-3">
            ovdje ide paginacija
            <a class="btn btn-primary h-50" href="/flights/create">Dodaj let</a>
        </div>
    </div>
@endsection


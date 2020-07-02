@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-start">
            <table class="table table-hover my-3">
                <caption>Pregled rezervacija</caption>
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Let ID</th>
                    <th scope="col">Ime korisnika</th>
                    <th scope="col">Rezervacijski kod</th>
                    <th scope="col" colspan="2">Akcije</th>
                </tr>
                </thead>
                <tbody>
                @foreach($reservations as $reservation)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$reservation->flight_id}}</td>
                        <td>{{$reservation->user_id}}</td>
                        <td>{{$reservation->code}}</td>
                        <td>
                            <div class="row">
                                <a href="/reservations/{{$reservation->id}}/edit" class="btn btn-sm btn-dark mx-2">Uredi</a>
                                <form id="reservationDelete-{{$reservation->id}}" method="POST"
                                      action="/reservations/{{$reservation->id}}">
                                    @csrf
                                    @method('DELETE')
                                    @component('layouts.modalDelete')
                                        @slot('id')
                                            {{$reservation->id}}
                                        @endslot
                                        @slot('item')
                                            rezervacija
                                        @endslot
                                    @endcomponent
                                    <button type="button" class="btn btn-sm btn-danger mx-2" data-toggle="modal"
                                            data-target="#modalDelete-{{$reservation->id}}">Izbriši
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
            {{ $reservations->links() }}
        </div>
    </div>
@endsection


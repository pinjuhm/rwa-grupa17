@extends('layouts.app')
@section('content')
    <section class="jumbotron text-center">
        <div class="container">
            <h1>Dobrodošli</h1>
            <p class="lead text-muted">Ovdje možete dodati nove letove, provjeriti rezervacije i mnogo toga</p>
{{--            <p>--}}
{{--                <a href="#" class="btn btn-primary my-2">Main call to action</a>--}}
{{--                <a href="#" class="btn btn-secondary my-2">Secondary action</a>--}}
{{--            </p>--}}
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="http://rwa-grupa17.test/storage/Images/flig.jpg" style="height: 10em" class="img-fluid">
                        <div class="card-body">
                            <h5 class="card-title text-center">Letovi</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                </div>
                                <a type="button" href="/flights" class ="btn btn-sm btn-outline-secondary">Pogledaj</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="http://rwa-grupa17.test/storage/Images/reservations.png" style="height: 10em" class="img-fluid">
                        <div class="card-body">
                            <h5 class="card-title text-center">Rezervacije</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                </div>
                                <a type="button" href="/reservations" class ="btn btn-sm btn-outline-secondary">Pogledaj</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="http://rwa-grupa17.test/storage/Images/airlines.jpg" style="height: 10em" class="img-fluid">
                        <div class="card-body">
                            <h5 class="card-title text-center">Aviokompanije</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                </div>
                                <a type="button" href="/airlines" class ="btn btn-sm btn-outline-secondary">Pogledaj</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="http://rwa-grupa17.test/storage/Images/planes.jpg" style="height: 10em" class="img-fluid">
                        <div class="card-body">
                            <h5 class="card-title text-center">Avioni</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                </div>
                                <a type="button" href="/planes" class ="btn btn-sm btn-outline-secondary">Pogledaj</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="http://rwa-grupa17.test/storage/Images/users.png" style="height: 10em" class="img-fluid">
                        <div class="card-body">
                            <h5 class="card-title text-center">Korisnici</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                </div>
                                <a type="button" href="/users" class ="btn btn-sm btn-outline-secondary">Pogledaj</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="http://rwa-grupa17.test/storage/Images/cities.jpeg" style="height: 10em" class="img-fluid">
                        <div class="card-body">
                            <h5 class="card-title text-center">Gradovi</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                </div>
                                <a type="button" href="/cities" class ="btn btn-sm btn-outline-secondary">Pogledaj</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection


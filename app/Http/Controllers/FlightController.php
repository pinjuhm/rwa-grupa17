<?php

namespace App\Http\Controllers;

use App\Flight;
use App\City;
use App\Plane;
use Illuminate\Http\Request;


class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        Flight::join('cities as city_from', 'flights.city_id_from', '=', 'city_from.id')
            ->join('cities as city_to', 'flights.city_id_to', '=', 'city_to.id')
            ->with('plane')
            ->get(['city_from.name as city_from_name', 'city_to.name as city_to_name',  'flights.*']);
        return view('flights.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::all();
        $planes = Plane::all();
        return view('flights.create', ['cities' => $cities, 'planes' => $planes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'city_id_from' => 'required|integer',
            'city_id_to' => 'required|integer',
            'plane_id' => 'required|integer',
            'price' => 'required|integer',
            'datetime' => 'required',
            'duration' => 'required|integer',
            'promoted' => 'boolean',
        ]);

        Flight::create(request([
            'city_id_from',
            'city_id_to',
            'plane_id' ,
            'price',
            'datetime',
            'duration',
            'promoted'
        ]));

        return redirect('/flights');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Flight $flight
     * @return \Illuminate\Http\Response
     */
    public function show(Flight $flight)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Flight $flight
     * @return \Illuminate\Http\Response
     */
    public function edit(Flight $flight)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Flight $flight
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Flight $flight)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Flight $flight
     * @return \Illuminate\Http\Response
     */
    public function destroy(Flight $flight)
    {
        //
    }
}

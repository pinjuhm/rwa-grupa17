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
        $flights = Flight::withJoinedInfo()->paginate(10);
        return view('flights.index', ['flights' => $flights]);
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
            'duration' => 'required|integer'
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
        $cities = City::all();
        $planes = Plane::all();
        return view ('flights.edit', ['flight' => $flight, 'cities' => $cities, 'planes' => $planes]);
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
        $this->validate(request(), [
            'city_id_from' => 'required|integer',
            'city_id_to' => 'required|integer',
            'plane_id' => 'required|integer',
            'price' => 'required|integer',
            'datetime' => 'required',
            'duration' => 'required|integer'
        ]);

        if ($request->has('promoted')) {
            $request->merge(['promoted' => 1]);
        } else {
            $request->merge(['promoted' => 0]);
        }

        if ($request->has('completed')) {
            $request->merge(['completed' => 1]);
        } else {
            $request->merge(['completed' => 0]);
        }

        $flight->update(request([
            'city_id_from',
            'city_id_to',
            'plane_id' ,
            'price',
            'datetime',
            'duration',
            'promoted',
            'completed'
        ]));

        return redirect('/flights/' . $flight->id . '/edit');
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

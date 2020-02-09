<?php

namespace App\Http\Controllers;

use App\Plane;
use App\Airline;
use Illuminate\Http\Request;

class PlaneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $planes = Plane::with('airline')->paginate(10);
        return view ('planes.index', ['planes' => $planes]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $airlines = Airline::all();
        return view ('planes.create', ['airlines' => $airlines]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required|string|max:255',
            'capacity' => 'required|integer',
            'airline_id' => 'required|integer'
        ]);

        Plane::create(request([
            'name',
            'capacity',
            'airline_id'
        ]));

        return redirect('/planes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Plane  $plane
     * @return \Illuminate\Http\Response
     */
    public function show(Plane $plane)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Plane  $plane
     * @return \Illuminate\Http\Response
     */
    public function edit(Plane $plane)
    {
        $airlines = Airline::all();
        return view ('planes.edit', ['airlines' => $airlines, 'plane' => $plane]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Plane  $plane
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plane $plane)
    {
        $this->validate(request(), [
            'name' => 'required|string|max:255',
            'capacity' => 'required|integer',
            'airline_id' => 'required|integer'
        ]);

        $plane->update(request([
            'name',
            'capacity',
            'airline_id'
        ]));

        return redirect('/planes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Plane  $plane
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plane $plane)
    {
        $plane->delete();
        return redirect('/planes');
    }
}

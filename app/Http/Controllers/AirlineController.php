<?php

namespace App\Http\Controllers;

use App\Airline;
use Illuminate\Http\Request;

class AirlineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $airlines = Airline::paginate(10);
        return view('airlines.index', ['airlines' => $airlines]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('airlines.create');
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
            'tag' => 'required|string|max:5'
        ]);

        Airline::create(request([
            'name',
            'tag'
        ]));

        return redirect('/airlines');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Airline  $aviocompany
     * @return \Illuminate\Http\Response
     */
    public function show(Airline $airline)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Airline  $airline
     * @return \Illuminate\Http\Response
     */
    public function edit(Airline $airline)
    {
        return view('airlines.edit', ['airline' => $airline]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Airline  $airline
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Airline $airline)
    {
        $this->validate(request(), [
            'name' => 'required|string|max:255',
            'tag' => 'required|string|max:5'
        ]);

        $airline->update(request([
            'name',
            'tag'
        ]));

        return redirect('/airlines');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Airline  $airline
     * @return \Illuminate\Http\Response
     */
    public function destroy(Airline $airline)
    {
        $airline->delete();
        return redirect('/airlines');
    }
}

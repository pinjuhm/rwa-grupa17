<?php

namespace App\Http\Controllers;

use App\City;
use App\Flight;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $cities = City::all();
        $popularDestinations = Flight::with('cityTo')
            ->where('promoted', true)
            ->where('completed', false)
            ->orderBy('price')
            ->get()
            ->unique('city_id_to')
            ->values();

        return view('index', ['cities' => $cities, 'popularDestinations' => $popularDestinations]);
    }

    public function admin()
    {
        return view('admin');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['flights'] = Flight::all();
        return view('flight.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        $flight = new Flight;
        $flight->name = $req->input('name');
        $flight->airline = $req->input('airline');
        $flight->number_of_planes = $req->input('number_of_seats');
        $flight->price_per_ticket = $req->input('price');
        $flight->save();

        return redirect('/flights');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, string $id)
    {
        $data['flight_update'] = Flight::find($id);
        $data['flights'] = Flight::all();
        return view('flight.update', $data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $flight = Flight::find($id);
        $flight->delete();
        return redirect('/flights');
    }
}

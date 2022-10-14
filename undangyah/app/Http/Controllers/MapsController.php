<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMapsRequest;
use App\Http\Requests\UpdateMapsRequest;
use App\Models\Maps;
use Illuminate\Support\Facades\Auth;

class MapsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.client.maps.create')->with([
            'user' => Auth::user()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMapsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMapsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Maps  $maps
     * @return \Illuminate\Http\Response
     */
    public function show(Maps $maps)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Maps  $maps
     * @return \Illuminate\Http\Response
     */
    public function edit(Maps $maps)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMapsRequest  $request
     * @param  \App\Models\Maps  $maps
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMapsRequest $request, Maps $maps)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Maps  $maps
     * @return \Illuminate\Http\Response
     */
    public function destroy(Maps $maps)
    {
        //
    }
}

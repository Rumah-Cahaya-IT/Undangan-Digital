<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTamuRequest;
use App\Http\Requests\UpdateTamuRequest;
use App\Models\Tamu;
use Illuminate\Support\Facades\Auth;

class TamuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.client.tamu.index')->with([
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
        return view('pages.client.tamu.create')->with([
            'user' => Auth::user()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTamuRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTamuRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tamu  $tamu
     * @return \Illuminate\Http\Response
     */
    public function show(Tamu $tamu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tamu  $tamu
     * @return \Illuminate\Http\Response
     */
    public function edit(Tamu $tamu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTamuRequest  $request
     * @param  \App\Models\Tamu  $tamu
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTamuRequest $request, Tamu $tamu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tamu  $tamu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tamu $tamu)
    {
        //
    }
}

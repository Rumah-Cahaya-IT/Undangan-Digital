<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInfoacaraRequest;
use App\Http\Requests\UpdateInfoacaraRequest;
use App\Models\Infoacara;
use Illuminate\Support\Facades\Auth;

class InfoacaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.client.infoacara.create')->with([
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
     * @param  \App\Http\Requests\StoreInfoacaraRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInfoacaraRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Infoacara  $infoacara
     * @return \Illuminate\Http\Response
     */
    public function show(Infoacara $infoacara)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Infoacara  $infoacara
     * @return \Illuminate\Http\Response
     */
    public function edit(Infoacara $infoacara)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInfoacaraRequest  $request
     * @param  \App\Models\Infoacara  $infoacara
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInfoacaraRequest $request, Infoacara $infoacara)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Infoacara  $infoacara
     * @return \Illuminate\Http\Response
     */
    public function destroy(Infoacara $infoacara)
    {
        //
    }
}

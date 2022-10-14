<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKadoRequest;
use App\Http\Requests\UpdateKadoRequest;
use App\Models\Kado;
use Illuminate\Support\Facades\Auth;

class KadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.client.kado.create')->with([
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
     * @param  \App\Http\Requests\StoreKadoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKadoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kado  $kado
     * @return \Illuminate\Http\Response
     */
    public function show(Kado $kado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kado  $kado
     * @return \Illuminate\Http\Response
     */
    public function edit(Kado $kado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKadoRequest  $request
     * @param  \App\Models\Kado  $kado
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKadoRequest $request, Kado $kado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kado  $kado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kado $kado)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTemaRequest;
use App\Http\Requests\UpdateTemaRequest;
use App\Models\Tema;
use Illuminate\Support\Facades\Auth;

class TemaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.client.tema.create')->with([
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
     * @param  \App\Http\Requests\StoreTemaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTemaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tema  $tema
     * @return \Illuminate\Http\Response
     */
    public function show(Tema $tema)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tema  $tema
     * @return \Illuminate\Http\Response
     */
    public function edit(Tema $tema)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTemaRequest  $request
     * @param  \App\Models\Tema  $tema
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTemaRequest $request, Tema $tema)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tema  $tema
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tema $tema)
    {
        //
    }
}

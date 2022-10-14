<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTemasRequest;
use App\Http\Requests\UpdateTemasRequest;
use App\Models\Temas;
use Illuminate\Support\Facades\Auth;

class TemasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.client.temas.create')->with([
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
     * @param  \App\Http\Requests\StoreTemasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTemasRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Temas  $temas
     * @return \Illuminate\Http\Response
     */
    public function show(Temas $temas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Temas  $temas
     * @return \Illuminate\Http\Response
     */
    public function edit(Temas $temas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTemasRequest  $request
     * @param  \App\Models\Temas  $temas
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTemasRequest $request, Temas $temas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Temas  $temas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Temas $temas)
    {
        //
    }
}

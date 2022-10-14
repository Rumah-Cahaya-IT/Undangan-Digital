<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCeritaRequest;
use App\Http\Requests\UpdateCeritaRequest;
use App\Models\Cerita;
use Illuminate\Support\Facades\Auth;

class CeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.client.cerita.create')->with([
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
     * @param  \App\Http\Requests\StoreCeritaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCeritaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cerita  $cerita
     * @return \Illuminate\Http\Response
     */
    public function show(Cerita $cerita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cerita  $cerita
     * @return \Illuminate\Http\Response
     */
    public function edit(Cerita $cerita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCeritaRequest  $request
     * @param  \App\Models\Cerita  $cerita
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCeritaRequest $request, Cerita $cerita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cerita  $cerita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cerita $cerita)
    {
        //
    }
}

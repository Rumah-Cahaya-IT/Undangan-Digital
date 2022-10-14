<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUcapanRequest;
use App\Http\Requests\UpdateUcapanRequest;
use App\Models\Ucapan;
use Illuminate\Support\Facades\Auth;

class UcapanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.client.ucapan.create')->with([
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
     * @param  \App\Http\Requests\StoreUcapanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUcapanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ucapan  $ucapan
     * @return \Illuminate\Http\Response
     */
    public function show(Ucapan $ucapan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ucapan  $ucapan
     * @return \Illuminate\Http\Response
     */
    public function edit(Ucapan $ucapan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUcapanRequest  $request
     * @param  \App\Models\Ucapan  $ucapan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUcapanRequest $request, Ucapan $ucapan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ucapan  $ucapan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ucapan $ucapan)
    {
        //
    }
}

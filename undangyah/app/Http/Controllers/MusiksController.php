<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMusiksRequest;
use App\Http\Requests\UpdateMusiksRequest;
use App\Models\Musiks;
use Illuminate\Support\Facades\Auth;

class MusiksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.client.musiks.create')->with([
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
     * @param  \App\Http\Requests\StoreMusiksRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMusiksRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Musiks  $musiks
     * @return \Illuminate\Http\Response
     */
    public function show(Musiks $musiks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Musiks  $musiks
     * @return \Illuminate\Http\Response
     */
    public function edit(Musiks $musiks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMusiksRequest  $request
     * @param  \App\Models\Musiks  $musiks
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMusiksRequest $request, Musiks $musiks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Musiks  $musiks
     * @return \Illuminate\Http\Response
     */
    public function destroy(Musiks $musiks)
    {
        //
    }
}

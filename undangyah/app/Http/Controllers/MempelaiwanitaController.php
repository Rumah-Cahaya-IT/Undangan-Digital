<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMempelaiwanitaRequest;
use App\Http\Requests\UpdateMempelaiwanitaRequest;
use App\Models\Mempelaiwanita;
use Illuminate\Support\Facades\Auth;

class MempelaiwanitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.client.mempelaiwanita.create')->with([
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
     * @param  \App\Http\Requests\StoreMempelaiwanitaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMempelaiwanitaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mempelaiwanita  $mempelaiwanita
     * @return \Illuminate\Http\Response
     */
    public function show(Mempelaiwanita $mempelaiwanita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mempelaiwanita  $mempelaiwanita
     * @return \Illuminate\Http\Response
     */
    public function edit(Mempelaiwanita $mempelaiwanita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMempelaiwanitaRequest  $request
     * @param  \App\Models\Mempelaiwanita  $mempelaiwanita
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMempelaiwanitaRequest $request, Mempelaiwanita $mempelaiwanita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mempelaiwanita  $mempelaiwanita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mempelaiwanita $mempelaiwanita)
    {
        //
    }
}

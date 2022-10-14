<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMempelaipriaRequest;
use App\Http\Requests\UpdateMempelaipriaRequest;
use App\Models\Mempelaipria;
use Illuminate\Support\Facades\Auth;

class MempelaipriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.client.mempelaipria.create')->with([
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
        // return view('pages.client.mempelaipria.create')->with([
        //     'user' => Auth::user()
        // ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMempelaipriaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMempelaipriaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mempelaipria  $mempelaipria
     * @return \Illuminate\Http\Response
     */
    public function show(Mempelaipria $mempelaipria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mempelaipria  $mempelaipria
     * @return \Illuminate\Http\Response
     */
    public function edit(Mempelaipria $mempelaipria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMempelaipriaRequest  $request
     * @param  \App\Models\Mempelaipria  $mempelaipria
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMempelaipriaRequest $request, Mempelaipria $mempelaipria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mempelaipria  $mempelaipria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mempelaipria $mempelaipria)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMusikRequest;
use App\Http\Requests\UpdateMusikRequest;
use App\Models\Musik;
use Illuminate\Support\Facades\Auth;

class MusikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.client.musik.create')->with([
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
     * @param  \App\Http\Requests\StoreMusikRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMusikRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Musik  $musik
     * @return \Illuminate\Http\Response
     */
    public function show(Musik $musik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Musik  $musik
     * @return \Illuminate\Http\Response
     */
    public function edit(Musik $musik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMusikRequest  $request
     * @param  \App\Models\Musik  $musik
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMusikRequest $request, Musik $musik)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Musik  $musik
     * @return \Illuminate\Http\Response
     */
    public function destroy(Musik $musik)
    {
        //
    }
}

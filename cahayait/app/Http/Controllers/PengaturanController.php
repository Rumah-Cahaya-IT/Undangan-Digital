<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePengaturanRequest;
use App\Http\Requests\UpdatePengaturanRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PengaturanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.client.pengaturan.create');
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
     * @param  \App\Http\Requests\StorePengaturanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePengaturanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengaturan  $pengaturan
     * @return \Illuminate\Http\Response
     */
    // public function show(Pengaturan $pengaturan)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Models\Pengaturan  $pengaturan
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(Pengaturan $pengaturan)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \App\Http\Requests\UpdatePengaturanRequest  $request
    //  * @param  \App\Models\Pengaturan  $pengaturan
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(UpdatePengaturanRequest $request, Pengaturan $pengaturan)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Models\Pengaturan  $pengaturan
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(Pengaturan $pengaturan)
    // {
    //     //
    // }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMempelaipriaRequest;
use App\Http\Requests\UpdateMempelaipriaRequest;
use App\Models\Mempelaipria;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class MempelaipriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mempelai_pria = Mempelaipria::with('users')
        ->first();
        return view('pages.client.mempelaipria.create', compact('mempelai_pria'))->with([
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
    public function update(Mempelaipria $mempelai_pria)
    {
        $data = request()->all();
        $image = request()->file('image');

        if ($image == '') {
            $mempelai_pria->update([
                'nama' => $data['nama'],
                'panggilan' => $data['panggilan'],
                'nama_ayah' => $data['nama_ayah'],
                'nama_ibu' => $data['nama_ibu'],
                'instagram' => $data['instagram'],
                'facebook' => $data['facebook'],
            ]);
        } else {
            $data['image'] = Str::random(20) . '.' . $image->getClientOriginalExtension();

            File::delete('mempelaipria/' . $mempelai_pria->image);
            $image->move('mempelaipria', $data['image']);
        }

        $mempelai_pria->update($data);
        return back()->with(['success' => 'Berhasil diupdate']);
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

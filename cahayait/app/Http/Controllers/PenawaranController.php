<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StorePenawaranRequest;
use App\Http\Requests\UpdatePenawaranRequest;
use App\Models\Penawaran;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class PenawaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penawarans = Penawaran::latest()->get();
        return view('pages.client.penawaran.index', compact('penawarans'))->with([
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

    public function penawaran()
    {
        return view('pages.client.penawaran')->with([
            'user' => Auth::user()
        ]);
    }

    public function store(StorePenawaranRequest $request)
    {
        $file = $request->file('file');

        Penawaran::create([
            'name' => $request->name,
            'prusahaan' => $request->prusahaan,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'judul_proyek' => $request->judul_proyek,
            'deskripsi' => $request->deskripsi,
            'bedget' => $request->bedget,
            'level' => $request->level,
            'status' => $request->status,
            'file' => $request->file,
            'file' => $file->getClientOriginalName()
        ]);

        $file->move('penawaran', $file->getClientOriginalName());
        return redirect('/penawaran-clien')->with(['success' => 'Penawaran berhasil diajukan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penawaran  $penawaran
     * @return \Illuminate\Http\Response
     */
    public function show(Penawaran $penawaran)
    {
        return view('pages.client.penawaran.show', compact('penawaran'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penawaran  $penawaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Penawaran $penawaran)
    {
        return view('pages.client.penawaran.form', compact('penawaran'))->with([
            'user' => Auth::user()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePenawaranRequest  $request
     * @param  \App\Models\Penawaran  $penawaran
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePenawaranRequest $request, Penawaran $penawaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penawaran  $penawaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penawaran $penawaran)
    {
        File::delete('penawaran/' . $penawaran->file);

        $penawaran->delete();
        return back()->with(['success' => 'Penawaran berhasil dihapus']);
    }
}

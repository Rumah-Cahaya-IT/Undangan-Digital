<?php

namespace App\Http\Controllers;

use App\Models\Mempelaiwanita;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class MempelaiwanitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mempelai_wanita = Mempelaiwanita::with('users')
        ->first();
        return view('pages.client.mempelaiwanita.create', compact('mempelai_wanita'))->with([
            'user' => Auth::user()
        ]);
    }

    public function update(Mempelaiwanita $mempelai_wanita)
    {
        $data = request()->all();
        $image = request()->file('image');

        if ($image == '') {
            $mempelai_wanita->update([
                'nama' => $data['nama'],
                'panggilan' => $data['panggilan'],
                'nama_ayah' => $data['nama_ayah'],
                'nama_ibu' => $data['nama_ibu'],
                'instagram' => $data['instagram'],
                'facebook' => $data['facebook'],
            ]);
        } else {
            $data['image'] = Str::random(20) . '.' . $image->getClientOriginalExtension();

            File::delete('mempelaiwanita/' . $mempelai_wanita->image);
            $image->move('mempelaiwanita', $data['image']);
        }

        $mempelai_wanita->update($data);
        return back()->with(['success' => 'Berhasil diupdate']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mempelaiwanita  $Mempelaiwanita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mempelaiwanita $Mempelaiwanita)
    {
        //
    }
}

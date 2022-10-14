<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.client.index')->with([
            'user' => Auth::user()
        ]);
    }

    public function faq()
    {
        return view('pages.client.faq')->with([
            'user' => Auth::user()
        ]);
    }

    public function pelayanan()
    {
        return view('pages.client.pelayanan')->with([
            'user' => Auth::user()
        ]);
    }

    public function portofolio()
    {
        return view('pages.client.portofolio')->with([
            'user' => Auth::user()
        ]);
    }

    public function produk()
    {
        return view('pages.client.produk')->with([
            'user' => Auth::user()
        ]);
    }

    public function proses()
    {
        return view('pages.client.proses')->with([
            'user' => Auth::user()
        ]);
    }

    public function team()
    {
        return view('pages.client.team')->with([
            'user' => Auth::user()
        ]);
    }

    public function tentang()
    {
        return view('pages.client.tentang')->with([
            'user' => Auth::user()
        ]);
    }
}

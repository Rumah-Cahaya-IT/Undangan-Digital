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

    public function tema()
    {
        return view('pages.client.tema')->with([
            'user' => Auth::user()
        ]);
    }

    public function fitur()
    {
        return view('pages.client.fitur')->with([
            'user' => Auth::user()
        ]);
    }

    public function harga()
    {
        return view('pages.client.harga')->with([
            'user' => Auth::user()
        ]);
    }
}

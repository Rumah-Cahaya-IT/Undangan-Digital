<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PasswordController extends Controller
{
    public function index()
    {
        return view('login.change_password')->with([
            'user' => Auth::user()
        ]);
    }
}

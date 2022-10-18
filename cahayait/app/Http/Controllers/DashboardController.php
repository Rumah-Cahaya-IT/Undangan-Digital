<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Penawaran;


class DashboardController extends Controller
{
    public function index()
    {
        $data['users'] = User::count();
        $data['penawarans'] = Penawaran::count();
        return view('pages.client.dashboard.index', compact('data'))->with([
            'user' => Auth::user()
        ]);
    }
}

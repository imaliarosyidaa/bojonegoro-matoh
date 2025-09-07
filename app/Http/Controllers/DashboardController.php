<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
{
    $pelanggan = \App\Models\TiketPelanggan::with('events')
        ->where('user_id', auth()->id())
        ->get();

    return view('dashboard', compact('pelanggan'));
}

}

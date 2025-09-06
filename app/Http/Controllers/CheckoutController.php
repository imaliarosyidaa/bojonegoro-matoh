<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        $cart = Cart::where('user_id', auth()->id())
            ->with('event')
            ->get();

        $total = $cart->sum(function ($item) {
            return $item->price * $item->quantity;
        });

        return view('checkout.index', compact('cart', 'total'));
    }

    public function process(Request $request)
{
    $request->validate([
        'nama_lengkap'  => 'required|string|max:255',
        'alamat'        => 'required|string|max:255',
        'email'         => 'required|email',
        'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
    ]);

    $cart = session('cart', []);
    if (count($cart) == 0) {
        return back()->with('error', 'Keranjang kosong.');
    }

    // Simpan pelanggan
    $pelanggan = \App\Models\TiketPelanggan::create([
        'user_id'      => auth()->id(),
        'nama_lengkap' => $request->nama_lengkap,
        'alamat'       => $request->alamat,
        'email'        => $request->email,
        'jenis_kelamin'=> $request->jenis_kelamin,
    ]);

    // Simpan relasi tiket
    foreach ($cart as $item) {
        $pelanggan->events()->attach($item['id'], [
            'jumlah' => $item['quantity']
        ]);
    }

    // Kosongkan keranjang
    session()->forget('cart');

    return redirect()->route('dashboard')->with('success', 'Checkout berhasil! Data pelanggan tersimpan.');
}
}
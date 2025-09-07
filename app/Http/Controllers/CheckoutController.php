<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use Illuminate\Http\Request;
use App\Models\TiketPelanggan;

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

        $cart = Cart::where('user_id', auth()->id())->get();
        if ($cart->isEmpty()) {
            return back()->with('error', 'Keranjang kosong.');
        }

        $total = $cart->sum(function ($item) {
            return $item->price * $item->quantity;
        });

        $pelanggan = TiketPelanggan::create([
            'user_id'      => auth()->id(),
            'nama_lengkap' => $request->nama_lengkap,
            'alamat'       => $request->alamat,
            'email'        => $request->email,
            'jenis_kelamin'=> $request->jenis_kelamin,
            'price' => $total,
        ]);

        foreach ($cart as $item) {
            $pelanggan->events()->attach($item->event_id, [
                'jumlah' => $item->quantity
            ]);
        }

        Cart::where('user_id', auth()->id())->delete();

        return redirect()->route('dashboard')->with('success', 'Checkout berhasil! Data pelanggan tersimpan.');
    }
}
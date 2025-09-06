<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class CartController extends Controller
{
    // Tampilkan isi cart dari database
    public function index(Request $request)
    {
        $cart = \App\Models\Cart::with('event')
            ->where('user_id', auth()->id())
            ->get();

        $total = $cart->sum(fn($item) => $item->price * $item->quantity);

        return view('cart.index', compact('cart', 'total'));
    }

    // Kosongkan cart user dari database
    public function clear()
    {
        \App\Models\Cart::where('user_id', auth()->id())->delete();

        return redirect()->route('cart.index')->with('success', 'Keranjang berhasil dikosongkan!');
    }

        public function add(Request $request, $id)
    {
        $event = Event::findOrFail($id);

        if (Auth::id() === null) {
            return redirect()->route('login')->with('error', 'Silahkan login terlebih dahulu!');
        }

        $cart = Cart::where('user_id', Auth::id())
            ->where('event_id', $id)
            ->first();

        $quantity = (int) $request->input('quantity', 1);

        if ($cart) {
            $cart->quantity += $quantity;
            $cart->save();
        } else {
            Cart::create([
                'user_id' => Auth::id(),
                'event_id' => $event->id,
                'quantity' => $quantity,
                'price' => $event->price,
            ]);
        }

        return redirect()->route('cart.index')->with('success', 'Tiket berhasil ditambahkan ke keranjang!');
    }

    public function remove($cartId)
    {
        \App\Models\Cart::where('user_id', auth()->id())
            ->where('id', $cartId)
            ->delete();

        return redirect()->route('cart.index')->with('success', 'Item berhasil dihapus dari keranjang!');
    }

}

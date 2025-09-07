<x-app-layout>
    <section class="max-w-7xl mx-auto px-6 py-10">
        <h2 class="text-2xl font-bold mb-6">Keranjang Tiket</h2>
        
    <div class="mt-6 flex justify-between">
        
        <a href="{{ route('events.index') }}" 
            class="px-6 py-3 rounded-md bg-gray-200 text-gray-700 hover:bg-gray-300 transition">
            ← Lanjut Belanja
        </a>
        @if(count($cart) > 0)

        <form action="{{ route('cart.clear') }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700">
                Hapus Semua
            </button>
        </form>
@endif
    </div>

        @if(session('success'))
            <div class="mt-6 p-3 bg-green-100 text-green-700 rounded-md">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="mt-6 p-3 bg-red-100 text-red-700 rounded-md">
                {{ session('error') }}
            </div>
        @endif

        @if(count($cart) > 0)
            <div class="grid gap-6 py-6">
            @foreach($cart as $item)
            <div class="flex items-center justify-between bg-white p-4 rounded-md shadow">
                <div class="flex items-center gap-4">
                    <img src="{{ $item->event->image }}" alt="{{ $item->title }}" class="w-24 h-16 object-cover rounded">
                    <div>
                        <h3 class="font-semibold">{{ $item->event->title }}</h3>
                        <p class="text-gray-600 text-sm">Qty: {{ $item->quantity }}</p>
                        <p class="text-purple-600 font-bold">
                            {{ $item->price == 0 ? 'Gratis' : 'Rp '.number_format($item->price,0,',','.') }}
                        </p>
                    </div>
                </div>
                <div class="flex items-center gap-4">
                    <p class="font-semibold text-gray-800">
                        Total:
                        {{ $item->price == 0 ? 'Gratis' : 'Rp '.number_format($item->price * $item->quantity,0,',','.') }}
                    </p>
                    <!-- Tombol Hapus -->
                    <form action="{{ route('cart.remove', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="ml-4 text-red-600 hover:text-red-800">
                            ✕
                        </button>
                    </form>
                </div>
            </div>
        @endforeach

            </div>
            <div class="mb-4">
                <hr>
                <div class="mt-4 flex items-center justify-between">
                <p class="font-bold">Total</p>
                <div class="font-bold">{{ $total == 0 ? 'Rp.0' : 'Rp '.number_format($total,0,',','.') }}</div>
                </div>
                <div class="w-2/3">Barang-barang di keranjang Anda tidak lagi dipesan. Anda masih dapat menyelesaikan pesanan selama barang-barang tersebut tersedia.</div>
            </div>

            <!-- Tombol Aksi -->
            <div class="flex justify-end gap-4">
                <a href="{{ route('checkout') }}" 
                   class="px-6 py-3 rounded-md bg-purple-600 text-white hover:bg-purple-700 transition flex gap-2 items-center">
                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                    </svg> 
                   Checkout →
                </a>
            </div>
        @else
            <p class="text-gray-600 pt-6">Keranjang masih kosong.</p>
        @endif
    </section>
</x-app-layout>

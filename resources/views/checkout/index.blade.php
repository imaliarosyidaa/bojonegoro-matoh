<x-app-layout>
    <section class="max-w-4xl mx-auto px-6 py-10">
        <h2 class="text-2xl font-bold mb-6">Checkout</h2>

        @if(count($cart) > 0)
            <!-- Ringkasan Order -->
            <div class="mb-8 bg-white p-6 rounded-lg shadow">
                <h3 class="text-lg font-semibold mb-4">Ringkasan Pesanan</h3>
                <ul class="divide-y">
                    @foreach($cart as $item)
                        <li class="py-3 flex justify-between">
                            <span>{{ $item->event->title }} (x{{ $item->quantity }})</span>
                            <span class="font-semibold text-purple-600">
                                {{ $item->price == 0 ? 'Gratis' : 'Rp '.number_format($item->price * $item->quantity, 0, ',', '.') }}
                            </span>
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- Form Checkout -->
             <form action="{{ route('checkout.process') }}" method="POST" class="bg-white p-6 rounded-lg shadow space-y-4">
                @csrf
                <div>
                    <label class="block font-medium text-gray-700">Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" class="w-full mt-1 p-2 border rounded-md" required>
                </div>

                <div>
                    <label class="block font-medium text-gray-700">Alamat</label>
                    <input type="text" name="alamat" class="w-full mt-1 p-2 border rounded-md" required>
                </div>

                <div>
                    <label class="block font-medium text-gray-700">Email</label>
                    <input type="email" name="email" class="w-full mt-1 p-2 border rounded-md" required>
                </div>

                <div>
                    <label class="block font-medium text-gray-700">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="w-full mt-1 p-2 border rounded-md" required>
                        <option value="">-- Pilih --</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>

                <div class="flex justify-between gap-4 pt-4">
                    <a href="{{ route('events.index') }}" class="px-6 py-3 rounded-md bg-gray-200 text-gray-700 hover:bg-gray-300 transition">
                        ← Lanjut Belanja
                    </a>
                    <button type="submit" class="flex items-center gap-2 px-6 py-3 rounded-md bg-purple-600 text-white hover:bg-purple-700 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                        </svg>    
                    Lanjutkan →
                    </button>
                </div>
            </form>
        @else
            <p class="text-gray-600">Keranjang kosong. Silakan pilih tiket dulu.</p>
            <a href="{{ route('events.index') }}" class="inline-block mt-4 px-6 py-3 rounded-md bg-purple-600 text-white hover:bg-purple-700">
                Cari Event →
            </a>
        @endif
    </section>
</x-app-layout>

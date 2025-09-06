<x-app-layout>
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-purple-600 to-blue-600 text-white pt-12 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-start">
            <h1 class="text-2xl md:text-3xl font-bold mb-4">Temukan Acara Menarik</h1>
            <p class="text-base mb-8 opacity-90">
                Temukan dan pesan tiket untuk festival, acara, lokakarya, dan lainnya.
            </p>
        </div>
    </section>

    <!-- Event Detail Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="flex flex-col lg:flex-row gap-8">
            
            <!-- Event Image -->
            <div class="lg:w-1/3">
                <img src="{{ $event->image ? asset('/'.$event->image) : asset('images/default-event.jpg') }}" 
                     class="w-full h-full object-cover rounded-lg shadow-md" 
                     alt="{{ $event->title }}">
            </div>

            <!-- Event Content -->
            <div class="lg:w-2/3">
                <h3 class="font-bold text-3xl mb-4">{{ $event->title }}</h3>
                <p class="text-gray-600 text-sm leading-relaxed mb-4">
                    {{$event->description}}
                </p>
                <p class="mt-2 text-sm text-gray-500">
                    📅 {{ $event->date }} <br>
                    📍 {{ $event->location }}
                </p>

                <!-- Price & Action -->
                 <form action="{{ route('cart.add', $event->id) }}" method="POST" class="flex justify-between items-center h-12 gap-4 mt-6">
    @csrf

    <div class="flex items-center gap-4">
        <span class="font-semibold text-purple-600 text-xl">
            {{ $event->price == 0 ? 'Gratis' : 'Rp '.number_format($event->price,0,',','.') }}
        </span>
        <div class="flex items-center border rounded-md overflow-hidden">
            <button type="button"
                    class="px-3 py-2 bg-gray-200 hover:bg-gray-300"
                    onclick="updateQuantity(-1)">
                -
            </button>
            <input type="number"
                   id="ticket_quantity"
                   name="quantity"
                   value="1"
                   min="0"
                   class="w-16 text-center border-0 focus:ring-0">
            <button type="button"
                    class="px-3 py-2 bg-gray-200 hover:bg-gray-300"
                    onclick="updateQuantity(1)">
                +
            </button>
        </div>
    </div>

    <button type="submit"
            id="add_to_cart_button"
            class="flex w-1/3 items-center justify-center gap-2 bg-purple-600 text-white px-6 py-3 rounded-md text-sm font-medium hover:bg-purple-700 transition">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
</svg>
            Add to Cart
    </button>
</form>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const quantityInput = document.getElementById('ticket_quantity');
        const addToCartButton = document.getElementById('add_to_cart_button');

        // Fungsi untuk memeriksa dan mengaktifkan/menonaktifkan tombol
        function checkQuantity() {
            if (parseInt(quantityInput.value) <= 0) {
                addToCartButton.disabled = true;
                addToCartButton.classList.add('bg-gray-400', 'cursor-not-allowed');
                addToCartButton.classList.remove('bg-purple-600', 'hover:bg-purple-700');
            } else {
                addToCartButton.disabled = false;
                addToCartButton.classList.add('bg-purple-600', 'hover:bg-purple-700');
                addToCartButton.classList.remove('bg-gray-400', 'cursor-not-allowed');
            }
        }

        // Jalankan fungsi saat halaman dimuat
        checkQuantity();

        // Tambahkan event listener untuk memantau perubahan pada input
        quantityInput.addEventListener('input', checkQuantity);

        // Perbarui fungsi updateQuantity untuk memanggil checkQuantity
        window.updateQuantity = function(change) {
            let currentValue = parseInt(quantityInput.value);
            let newValue = currentValue + change;
            if (newValue >= 0) { // Pastikan nilai tidak negatif
                quantityInput.value = newValue;
                checkQuantity();
            }
        };
    });
</script>
            </div>
        </div>
    </div>
</x-app-layout>

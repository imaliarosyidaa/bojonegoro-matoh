<x-app-layout>
    <section class="bg-gradient-to-r from-purple-600 to-blue-600 text-white pt-12 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-start">
            <h1 class="text-2xl md:text-3xl font-bold mb-4">Temukan Acara Menarik</h1>
            <p class="text-normal mb-8 opacity-90">Temukan dan pesan tiket untuk festival, acara, lokakarya, dan lainnya.</p>
        </div>
    </section>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="flex flex-col lg:flex-row gap-8">
            <div class="lg:w-1/4">
                <div class="bg-white rounded-lg shadow-sm p-6 sticky top-8">
                    <h3 class="text-lg font-semibold mb-6">Filter Event</h3>
                    <div class="mb-6">
                        <h4 class="font-medium mb-3">Tanggal</h4>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="radio" name="date" class="date-filter text-purple-600 focus:ring-purple-500" value="all" checked>
                                <span class="ml-2 text-gray-700">Semua Tanggal</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="date" class="date-filter text-purple-600 focus:ring-purple-500" value="today">
                                <span class="ml-2 text-gray-700">Hari Ini</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="date" class="date-filter text-purple-600 focus:ring-purple-500" value="week">
                                <span class="ml-2 text-gray-700">Minggu Ini</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="date" class="date-filter text-purple-600 focus:ring-purple-500" value="month">
                                <span class="ml-2 text-gray-700">Bulan Ini</span>
                            </label>
                        </div>
                    </div>
                    <div class="mb-6">
                        <h4 class="font-medium mb-3">Rentang Harga</h4>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="radio" name="price" class="price-filter text-purple-600 focus:ring-purple-500" value="all" checked>
                                <span class="ml-2 text-gray-700">Semua Harga</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="price" class="price-filter text-purple-600 focus:ring-purple-500" value="free">
                                <span class="ml-2 text-gray-700">Gratis</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="price" class="price-filter text-purple-600 focus:ring-purple-500" value="under50">
                                <span class="ml-2 text-gray-700">Di bawah Rp50,000</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="price" class="price-filter text-purple-600 focus:ring-purple-500" value="50to100">
                                <span class="ml-2 text-gray-700">Rp50,000 - Rp100,000</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="price" class="price-filter text-purple-600 focus:ring-purple-500" value="over100">
                                <span class="ml-2 text-gray-700">Lebih Rp100,000</span>
                            </label>
                        </div>
                    </div>
                    </div>
            </div>
            <div class="lg:w-3/4">
                <div class="flex justify-between items-center">
                    <h2 class="text-2xl font-bold text-gray-900">Acara mendatang</h2>
                    <select id="sort-select" class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500">
                        <option value="date-asc">Sort by Date</option>
                        <option value="price-asc">Sort by Price</option>
                        <option value="popularity">Sort by Popularity</option>
                    </select>
                </div>
                <div id="events-container" class="grid md:grid-cols-1 gap-6">
                    <div class="max-w-7xl mx-auto px-6 py-10">
                        <div id="events-grid" class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                            @foreach($events as $event)
                                <div class="event-card bg-white rounded-lg shadow hover:shadow-lg transition overflow-hidden" 
                                     data-date="{{ $event->date }}" 
                                     data-price="{{ $event->price }}"
                                     data-popularity="{{ $event->popularity ?? 0 }}"> {{-- Asumsi ada kolom 'popularity' --}}
                                    <img src="{{ $event->image ? asset('/'.$event->image) : asset('images/default-event.jpg') }}" 
                                         class="w-full h-48 object-cover" alt="{{ $event->title }}">
                                    <div class="p-4">
                                        <h3 class="font-bold text-lg">{{ $event->title }}</h3>
                                        <p class="text-gray-600 text-sm line-clamp-3">{{ $event->description }}</p>
                                        <p class="mt-2 text-sm text-gray-500">{{ $event->date }} - {{ $event->location }}</p>
                                        <div class="mt-3 flex justify-between items-center">
                                            <span class="font-semibold text-purple-600">
                                                {{ $event->price == 0 ? 'Gratis' : 'Rp '.number_format($event->price,0,',','.') }}
                                            </span>
                                            <a href="{{ route('events.show', $event) }}" 
                                               class="bg-purple-600 text-white px-3 py-1 rounded-md text-sm hover:bg-purple-700">
                                                Detail
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const filterInputs = document.querySelectorAll('input[name="date"], input[name="price"]');
        const sortSelect = document.getElementById('sort-select');
        const eventsGrid = document.getElementById('events-grid');
        const eventCards = Array.from(document.querySelectorAll('.event-card'));

        // Tambahkan event listener untuk filter radio button
        filterInputs.forEach(input => {
            input.addEventListener('change', updateEvents);
        });

        // Tambahkan event listener untuk sort select box
        sortSelect.addEventListener('change', updateEvents);

        function updateEvents() {
            // 1. Ambil nilai filter yang dipilih
            const selectedDateFilter = document.querySelector('input[name="date"]:checked').value;
            const selectedPriceFilter = document.querySelector('input[name="price"]:checked').value;

            // 2. Filter kartu acara
            const filteredCards = eventCards.filter(card => {
                const eventDate = new Date(card.getAttribute('data-date'));
                const eventPrice = parseFloat(card.getAttribute('data-price'));
                const today = new Date();
                today.setHours(0, 0, 0, 0);

                let isDateMatch = false;
                let isPriceMatch = false;

                // Logic Filter Tanggal
                switch (selectedDateFilter) {
                    case 'all':
                        isDateMatch = true;
                        break;
                    case 'today':
                        isDateMatch = eventDate.toDateString() === today.toDateString();
                        break;
                    case 'week':
                        const oneWeek = new Date(today);
                        oneWeek.setDate(today.getDate() + 7);
                        isDateMatch = eventDate >= today && eventDate <= oneWeek;
                        break;
                    case 'month':
                        isDateMatch = eventDate.getMonth() === today.getMonth() && eventDate.getFullYear() === today.getFullYear();
                        break;
                }

                // Logic Filter Harga
                switch (selectedPriceFilter) {
                    case 'all':
                        isPriceMatch = true;
                        break;
                    case 'free':
                        isPriceMatch = eventPrice === 0;
                        break;
                    case 'under50':
                        isPriceMatch = eventPrice > 0 && eventPrice <= 50000;
                        break;
                    case '50to100':
                        isPriceMatch = eventPrice > 50000 && eventPrice <= 100000;
                        break;
                    case 'over100':
                        isPriceMatch = eventPrice > 100000;
                        break;
                }

                return isDateMatch && isPriceMatch;
            });

            // 3. Ambil nilai sorting yang dipilih dan urutkan
            const sortCriteria = sortSelect.value;
            let sortedCards = [...filteredCards]; // Buat salinan untuk diurutkan

            if (sortCriteria === 'date-asc') {
                sortedCards.sort((a, b) => new Date(a.getAttribute('data-date')) - new Date(b.getAttribute('data-date')));
            } else if (sortCriteria === 'price-asc') {
                sortedCards.sort((a, b) => parseFloat(a.getAttribute('data-price')) - parseFloat(b.getAttribute('data-price')));
            } else if (sortCriteria === 'popularity') {
                sortedCards.sort((a, b) => parseFloat(b.getAttribute('data-popularity')) - parseFloat(a.getAttribute('data-popularity')));
            }

            // 4. Kosongkan grid dan tambahkan kartu yang sudah diurutkan
            eventsGrid.innerHTML = '';
            sortedCards.forEach(card => eventsGrid.appendChild(card));
        }
    });
</script>
</x-app-layout>
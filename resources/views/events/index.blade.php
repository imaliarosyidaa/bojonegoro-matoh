<x-app-layout>
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-purple-600 to-blue-600 text-white pt-12 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-start">
            <h1 class="text-2xl md:text-3xl font-bold mb-4">Temukan Acara Menarik</h1>
            <p class="text-normal mb-8 opacity-90">Temukan dan pesan tiket untuk festival, acara, lokakarya, dan lainnya.</p>
        </div>
    </section>

    <!-- Filters and Events -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Filters Sidebar -->
            <div class="lg:w-1/4">
                <div class="bg-white rounded-lg shadow-sm p-6 sticky top-8">
                    <h3 class="text-lg font-semibold mb-6">Filter Events</h3>

                    <!-- Date Filter -->
                    <div class="mb-6">
                        <h4 class="font-medium mb-3">Date</h4>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="radio" name="date" class="date-filter text-purple-600 focus:ring-purple-500" value="all" checked>
                                <span class="ml-2 text-gray-700">Any Date</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="date" class="date-filter text-purple-600 focus:ring-purple-500" value="today">
                                <span class="ml-2 text-gray-700">Today</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="date" class="date-filter text-purple-600 focus:ring-purple-500" value="week">
                                <span class="ml-2 text-gray-700">This Week</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="date" class="date-filter text-purple-600 focus:ring-purple-500" value="month">
                                <span class="ml-2 text-gray-700">This Month</span>
                            </label>
                        </div>
                    </div>

                    <!-- Price Filter -->
                    <div class="mb-6">
                        <h4 class="font-medium mb-3">Price Range</h4>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="radio" name="price" class="price-filter text-purple-600 focus:ring-purple-500" value="all" checked>
                                <span class="ml-2 text-gray-700">Any Price</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="price" class="price-filter text-purple-600 focus:ring-purple-500" value="free">
                                <span class="ml-2 text-gray-700">Free</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="price" class="price-filter text-purple-600 focus:ring-purple-500" value="under50">
                                <span class="ml-2 text-gray-700">Under $50</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="price" class="price-filter text-purple-600 focus:ring-purple-500" value="50to100">
                                <span class="ml-2 text-gray-700">$50 - $100</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="price" class="price-filter text-purple-600 focus:ring-purple-500" value="over100">
                                <span class="ml-2 text-gray-700">Over $100</span>
                            </label>
                        </div>
                    </div>

                    <button class="w-full bg-purple-600 hover:bg-purple-700 text-white py-2 rounded-lg font-medium transition-colors" onclick="applyFilters()">
                        Apply Filters
                    </button>
                </div>
            </div>

            <!-- Events Grid -->
            <div class="lg:w-3/4">
                <div class="flex justify-between items-center">
                    <h2 class="text-2xl font-bold text-gray-900">Acara mendatang</h2>
                    <select class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500">
                        <option>Sort by Date</option>
                        <option>Sort by Price</option>
                        <option>Sort by Popularity</option>
                    </select>
                </div>

                <div id="events-grid" class="grid md:grid-cols-1 gap-6">
                    <div class="max-w-7xl mx-auto px-6 py-10">

                    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                        @foreach($events as $event)
                            <div class="bg-white rounded-lg shadow hover:shadow-lg transition overflow-hidden">
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
        let currentEvent = '';
        let currentPrice = 0;

        function buyTicket(eventName, price) {
            currentEvent = eventName;
            currentPrice = price;
            const modal = document.getElementById('ticket-modal');
            const message = document.getElementById('modal-message');
            
            if (price === 0) {
                message.textContent = `You're about to register for "${eventName}". This is a free event.`;
            } else {
                message.textContent = `You're about to purchase a ticket for "${eventName}" for $${price}.`;
            }
            
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }

        function closeModal() {
            const modal = document.getElementById('ticket-modal');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }

        function confirmPurchase() {
            alert(`Success! You have ${currentPrice === 0 ? 'registered for' : 'purchased a ticket for'} "${currentEvent}". Check your email for confirmation details.`);
            closeModal();
        }

        function applyFilters() {
            const categoryFilters = Array.from(document.querySelectorAll('.category-filter:checked')).map(cb => cb.value);
            const dateFilter = document.querySelector('.date-filter:checked').value;
            const priceFilter = document.querySelector('.price-filter:checked').value;
            
            const eventCards = document.querySelectorAll('.event-card');
            
            eventCards.forEach(card => {
                let showCard = true;
                
                // Category filter
                if (!categoryFilters.includes('all')) {
                    const cardCategory = card.dataset.category;
                    if (!categoryFilters.includes(cardCategory)) {
                        showCard = false;
                    }
                }
                
                // Date filter
                if (dateFilter !== 'all') {
                    const cardDate = card.dataset.date;
                    if (cardDate !== dateFilter) {
                        showCard = false;
                    }
                }
                
                // Price filter
                if (priceFilter !== 'all') {
                    const cardPrice = parseInt(card.dataset.price);
                    switch (priceFilter) {
                        case 'free':
                            if (cardPrice !== 0) showCard = false;
                            break;
                        case 'under50':
                            if (cardPrice >= 50) showCard = false;
                            break;
                        case '50to100':
                            if (cardPrice < 50 || cardPrice > 100) showCard = false;
                            break;
                        case 'over100':
                            if (cardPrice <= 100) showCard = false;
                            break;
                    }
                }
                
                card.style.display = showCard ? 'block' : 'none';
            });
        }

        // Add smooth animations to buttons
        document.querySelectorAll('button').forEach(button => {
            button.addEventListener('click', function() {
                this.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    this.style.transform = 'scale(1)';
                }, 150);
            });
        });

        // Handle filter changes
        document.querySelectorAll('.category-filter, .date-filter, .price-filter').forEach(filter => {
            filter.addEventListener('change', applyFilters);
        });

        // Handle "All Categories" checkbox
        document.querySelector('.category-filter[value="all"]').addEventListener('change', function() {
            if (this.checked) {
                document.querySelectorAll('.category-filter:not([value="all"])').forEach(cb => cb.checked = false);
            }
        });

        document.querySelectorAll('.category-filter:not([value="all"])').forEach(cb => {
            cb.addEventListener('change', function() {
                if (this.checked) {
                    document.querySelector('.category-filter[value="all"]').checked = false;
                }
            });
        });
    </script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'97a67891624eea82',t:'MTc1NzA4MzExMy4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</x-app-layout>
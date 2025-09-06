<x-app-layout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Filters Sidebar -->
            @include('layouts.sidebar')

            <!-- Events Grid -->
            <div class="lg:w-3/4">
                <!-- Tickets List -->
                <div class="space-y-6">
                    <!-- Upcoming Event -->
                     @if(session('success'))
                    <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg">
                        {{ session('success') }}
                    </div>
                    @endif

                    @if($pelanggan)
                        <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                            <div class="p-6">
                                <div class="flex items-start justify-between mb-4">
                                    <div class="flex items-center space-x-4">
                                        <div class="w-16 h-16 bg-gradient-to-r from-pink-500 to-purple-600 rounded-lg flex items-center justify-center">
                                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M9.383 3.076A1 1 0 0110 4v12a1 1 0 01-1.707.707L4.586 13H2a1 1 0 01-1-1V8a1 1 0 011-1h2.586l3.707-3.707a1 1 0 011.09-.217z" clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            @foreach($pelanggan->events as $event)
                                                <h3 class="text-xl font-semibold text-gray-900">{{ $event->title }}</h3>
                                                <p class="text-gray-600">{{ $event->lokasi }}</p>
                                                <p class="text-sm text-gray-500">
                                                    {{ \Carbon\Carbon::parse($event->tanggal)->format('F d, Y • H:i') }}
                                                </p>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                            </svg>
                                            Confirmed
                                        </span>
                                        <p class="text-sm text-gray-500 mt-1">
                                            Invoice #INV-{{ str_pad($pelanggan->id, 6, '0', STR_PAD_LEFT) }}
                                        </p>
                                    </div>
                                </div>

                                <div class="grid md:grid-cols-3 gap-4 mb-4">
                                    <div class="bg-gray-50 rounded-lg p-4">
                                        <p class="text-sm text-gray-600">Tickets</p>
                                        <p class="font-semibold">
                                            {{ $pelanggan->events->sum('pivot.jumlah') }} tickets
                                        </p>
                                        <p class="text-xs text-gray-500">
                                            @foreach($pelanggan->events as $event)
                                                {{ $event->pivot->jumlah }}x {{ $event->title }}<br>
                                            @endforeach
                                        </p>
                                    </div>
                                    <div class="bg-gray-50 rounded-lg p-4">
                                        <p class="text-sm text-gray-600">Total Paid</p>
                                        <p class="font-semibold text-purple-600">
                                            Rp{{ number_format($pelanggan->events->sum(fn($e) => $e->harga * $e->pivot->jumlah), 0, ',', '.') }}
                                        </p>
                                        <p class="text-xs text-gray-500">
                                            Paid {{ $pelanggan->created_at->format('M d, Y') }}
                                        </p>
                                    </div>
                                    <div class="bg-gray-50 rounded-lg p-4">
                                        <p class="text-sm text-gray-600">Order Date</p>
                                        <p class="font-semibold">{{ $pelanggan->created_at->format('M d, Y') }}</p>
                                        <p class="text-xs text-gray-500">{{ $pelanggan->created_at->format('H:i A') }}</p>
                                    </div>
                                </div>

                                <div class="flex flex-wrap gap-3">
                                    <button class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-lg font-medium transition-colors">
                                        View Tickets
                                    </button>
                                    <button class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg font-medium transition-colors">
                                        View Invoice
                                    </button>
                                    <button class="border border-gray-300 hover:bg-gray-50 text-gray-700 px-4 py-2 rounded-lg font-medium transition-colors">
                                        Transfer Tickets
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>

                <!-- Pagination -->
                <div class="flex items-center justify-between mt-8">
                    <div class="text-sm text-gray-700">
                        Showing <span class="font-medium">1</span> to <span class="font-medium">4</span> of <span class="font-medium">12</span> results
                    </div>
                    <div class="flex space-x-2">
                        <button class="px-3 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-50">
                            Previous
                        </button>
                        <button class="px-3 py-2 text-sm font-medium text-white bg-purple-600 border border-purple-600 rounded-lg">
                            1
                        </button>
                        <button class="px-3 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-50">
                            2
                        </button>
                        <button class="px-3 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-50">
                            3
                        </button>
                        <button class="px-3 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-50">
                            Next
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

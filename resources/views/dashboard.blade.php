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
                    @foreach($pelanggan as $p)
                        <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                            <div class="p-6">
                                <div class="flex items-start justify-between mb-4">
                                    <div class="flex items-center space-x-4">
                                        <div class="w-16 h-16 bg-gradient-to-r from-pink-500 to-purple-600 rounded-lg flex items-center justify-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-receipt" viewBox="0 0 16 16">
                                            <path d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27m.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0z"/>
                                            <path d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5m8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5"/>
                                            </svg>
                                        </div>
                                        <div>
                                            @foreach($p->events as $event)
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
                                            Terkirim
                                        </span>
                                        <p class="text-sm text-gray-500 mt-1">
                                            Invoice #INV-{{ str_pad($p->id, 6, '0', STR_PAD_LEFT) }}
                                        </p>
                                    </div>
                                </div>

                                <div class="grid md:grid-cols-3 gap-4 mb-4">
                                    <div class="bg-gray-50 rounded-lg p-4">
                                        <p class="text-sm text-gray-600">Tickets</p>
                                        <p class="font-semibold">
                                            {{ $p->events->sum('pivot.jumlah') }} tickets
                                        </p>
                                        <p class="text-xs text-gray-500">
                                            @foreach($p->events as $event)
                                                {{ $event->pivot->jumlah }}x {{ $event->title }}<br>
                                            @endforeach
                                        </p>
                                    </div>
                                    <div class="bg-gray-50 rounded-lg p-4">
                                        <p class="text-sm text-gray-600">Total yang harus dibayar</p>
                                        <p class="font-semibold text-purple-600">
                                            Rp{{ number_format($p->price, 0, ',', '.') }}
                                        </p>
                                        <p class="text-xs text-gray-500">
                                            Paid {{ $p->created_at->format('M d, Y') }}
                                        </p>
                                    </div>
                                    <div class="bg-gray-50 rounded-lg p-4">
                                        <p class="text-sm text-gray-600">Order Date</p>
                                        <p class="font-semibold">{{ $p->created_at->format('M d, Y') }}</p>
                                        <p class="text-xs text-gray-500">{{ $p->created_at->format('H:i A') }}</p>
                                    </div>
                                </div>

                                <div class="flex flex-wrap gap-3">
                                    *Tunjukan invoice ini ke panita yang bersangkutan.
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @else
                    <p class="text-gray-600 p-4">Anda belum melakukan transaksi apapun.</p>
                        @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

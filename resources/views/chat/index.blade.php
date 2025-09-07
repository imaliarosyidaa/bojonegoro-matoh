<x-app-layout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div id="chat-messages" class="border p-4 h-64 overflow-y-auto">            
            <ul>
                @foreach ($history ?? [] as $item)
                    <li class="p-3">
                        <div class=" text-blue-700 font-semibold">User</div> <p class=" text-gray-700">{{ $item['q'] }}</p>
                    </li>
                    <li class="p-3">
                        <div class=" text-blue-700 font-semibold">Google AI:</div>
                        <p class="text-gray-700">{{ $item['a'] }}</p>
                    </li>
                @endforeach
            </ul>
        </div>

        <form id="chat-form" class="mt-4 flex gap-2"  action="{{ route('chat.app') }}" method="POST">
            @csrf 
            <input id="chat-input" class="border rounded px-2 py-1 flex-1" type="text" name="message" placeholder="Ketik pesan..." />
            <button type="submit" class="bg-purple-600 text-white px-4 rounded">Send</button>
        </form>
    </div>
</x-app-layout>
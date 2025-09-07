<x-guest-layout>

    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400 font-sans">
        {{ __('Lupa kata sandi Anda? Tidak masalah. Cukup beritahu kami alamat email Anda dan kami akan mengirimkan tautan reset kata sandi agar Anda dapat memilih yang baru.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

<div class="flex items-center justify-between mt-4">
        <div>
    <a href="{{ route('login') }}" 
        class="px-4 py-2 mb-4 text-gray-600">
        ← Kembali
    </a>
</div>
    <button 
        type="submit" 
        class="px-4 py-2 rounded-md font-sans font-semibold text-white bg-green-800 hover:bg-green-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-700 transition ease-in-out duration-150"
    >
        {{ __('Kirim Link Reset Password') }}
    </button>
</div>

    </form>
</x-guest-layout>

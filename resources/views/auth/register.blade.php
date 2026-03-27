<x-guest-layout>
    <div class="flex flex-col items-center justify-center min-h-[80vh]">
        <div class="bg-stone-900/90 shadow-xl rounded-2xl px-8 py-10 w-full max-w-md border border-stone-800">
            <div class="mb-8 text-center">
                <h1 class="font-serif text-3xl md:text-4xl text-amber-400 mb-2">Create Account</h1>
                <p class="text-stone-400">Sign up to get started</p>
            </div>
            <form method="POST" action="{{ route('register') }}" class="space-y-6">
                @csrf
                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Name')" class="text-amber-300" />
                    <x-text-input id="name" class="block mt-1 w-full bg-stone-800 border-stone-700 text-stone-100 focus:ring-amber-400 focus:border-amber-400" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" class="text-amber-300" />
                    <x-text-input id="email" class="block mt-1 w-full bg-stone-800 border-stone-700 text-stone-100 focus:ring-amber-400 focus:border-amber-400" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <!-- Password -->
                <div>
                    <x-input-label for="password" :value="__('Password')" class="text-amber-300" />
                    <x-text-input id="password" class="block mt-1 w-full bg-stone-800 border-stone-700 text-stone-100 focus:ring-amber-400 focus:border-amber-400" type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <!-- Confirm Password -->
                <div>
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-amber-300" />
                    <x-text-input id="password_confirmation" class="block mt-1 w-full bg-stone-800 border-stone-700 text-stone-100 focus:ring-amber-400 focus:border-amber-400" type="password" name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
                <div>
                    <x-primary-button class="w-full bg-amber-400 hover:bg-amber-500 text-stone-900 font-bold py-2 rounded-lg transition">{{ __('Register') }}</x-primary-button>
                </div>
                <div class="text-center mt-4">
                    <a href="{{ route('login') }}" class="text-sm text-stone-400 hover:text-amber-400 transition">Already registered? Log in</a>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>

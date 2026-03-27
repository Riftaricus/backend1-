<x-guest-layout>
    <div class="flex flex-col items-center justify-center min-h-[80vh]">
        <div class="bg-stone-900/90 shadow-xl rounded-2xl px-8 py-10 w-full max-w-md border border-stone-800">
            <div class="mb-8 text-center">
                <h1 class="font-serif text-3xl md:text-4xl text-amber-400 mb-2">Welcome Back</h1>
                <p class="text-stone-400">Sign in to your account</p>
            </div>
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf
                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" class="text-amber-300" />
                    <x-text-input id="email"
                        class="block mt-1 w-full bg-stone-800 border-stone-700 text-stone-100 focus:ring-amber-400 focus:border-amber-400"
                        type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <!-- Password -->
                <div>
                    <x-input-label for="password" :value="__('Password')" class="text-amber-300" />
                    <x-text-input id="password"
                        class="block mt-1 w-full bg-stone-800 border-stone-700 text-stone-100 focus:ring-amber-400 focus:border-amber-400"
                        type="password" name="password" required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <!-- Remember Me -->
                <div class="flex items-center justify-between">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded border-stone-600 text-amber-400 shadow-sm focus:ring-amber-400"
                            name="remember">
                        <span class="ms-2 text-sm text-stone-300">{{ __('Remember me') }}</span>
                    </label>
                    @if (Route::has('password.request'))
                        <a class="text-xs text-amber-400 hover:underline" href="{{ route('password.request') }}">
                            {{ __('Forgot password?') }}
                        </a>
                    @endif
                </div>
                <div>
                    <x-primary-button
                        class="w-full bg-amber-400 hover:bg-amber-500 text-stone-900 font-bold py-2 rounded-lg transition">{{ __('Log in') }}</x-primary-button>
                </div>
                <div class="text-center mt-4">
                    <a href="{{ route('register') }}"
                        class="text-sm text-stone-400 hover:text-amber-400 transition">Don't have an account?
                        Register</a>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-serif text-3xl text-amber-400 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-16 bg-stone-950 min-h-[80vh]">
        <div class="max-w-3xl mx-auto px-4">
            <div class="bg-stone-900/90 shadow-xl rounded-2xl px-8 py-10 border border-stone-800">
                <div class="text-center">
                    <h3 class="font-serif text-2xl text-amber-400 mb-2">Welcome!</h3>
                    <p class="text-stone-300 text-lg mb-6">{{ __("You're logged in!") }}</p>
                    <a href="/menu"
                        class="inline-block px-6 py-2 bg-amber-400 text-stone-900 font-bold rounded-lg shadow hover:bg-amber-500 transition">See
                        Menu</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
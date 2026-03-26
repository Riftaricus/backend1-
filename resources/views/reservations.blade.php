<!doctype html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reservations — Thai Basil Restaurant</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,700;1,500&family=Lato:wght@300;400;700&display=swap"
        rel="stylesheet" />
    <style>
        body {
            font-family: 'Lato', sans-serif;
        }

        h1,
        h2,
        h3 {
            font-family: 'Playfair Display', serif;
        }
    </style>
</head>

<body class="bg-stone-950 text-stone-100 min-h-screen">

    <!-- Header -->
    <header class="sticky top-0 z-40 bg-stone-950/90 backdrop-blur border-b border-stone-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center justify-between h-16">
                <a href="/"
                    class="font-serif text-2xl text-amber-400 tracking-wide hover:text-amber-300 transition">Thai
                    Basil</a>
                <ul class="hidden md:flex items-center gap-8 text-sm font-medium tracking-wide">
                    <li><a href="/" class="text-stone-300 hover:text-amber-400 transition">Home</a></li>
                    <li><a href="/menu" class="text-stone-300 hover:text-amber-400 transition">Menu</a></li>
                    <li><a href="/contact" class="text-stone-300 hover:text-amber-400 transition">Contact</a>
                    <li><a href="/reservations" class="text-amber-400 border-b border-amber-400 pb-0.5">Reservations</a></li>
                    </li>
                    <li><a href="/login"
                            class="px-4 py-1.5 border border-amber-700 text-amber-400 rounded hover:bg-amber-700 hover:text-white transition text-xs uppercase tracking-widest">Login</a>
                    </li>
                </ul>
                <nav class="md:hidden flex gap-4 text-sm">
                    <a href="/menu" class="text-stone-400 hover:text-amber-400 transition">Menu</a>
                    <a href="/reservations" class="text-stone-400 hover:text-amber-400 transition">Reserve</a>
                </nav>
            </nav>
        </div>
    </header>

    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="text-center mb-12">
            <p class="text-amber-500 uppercase tracking-widest text-xs mb-2">Join Us</p>
            <h1 class="font-serif text-5xl text-amber-100">Reserve a Table</h1>
        </div>

        <form action="#" method="GET" class="bg-stone-900 rounded-2xl p-8 space-y-5 shadow-xl">
            <div class="grid sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-stone-400 text-xs uppercase tracking-wider mb-1.5" for="name">Name</label>
                    <input type="text" id="name" name="name" required
                        class="w-full bg-stone-800 border border-stone-700 text-stone-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-amber-600 transition" />
                </div>
                <div>
                    <label class="block text-stone-400 text-xs uppercase tracking-wider mb-1.5"
                        for="email">Email</label>
                    <input type="email" id="email" name="email" required
                        class="w-full bg-stone-800 border border-stone-700 text-stone-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-amber-600 transition" />
                </div>
            </div>
            <div class="grid sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-stone-400 text-xs uppercase tracking-wider mb-1.5"
                        for="phone">Phone</label>
                    <input type="tel" id="phone" name="phone" required
                        class="w-full bg-stone-800 border border-stone-700 text-stone-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-amber-600 transition" />
                </div>
                <div>
                    <label class="block text-stone-400 text-xs uppercase tracking-wider mb-1.5"
                        for="guests">Guests</label>
                    <input type="number" id="guests" name="guests" min="1" max="20" required
                        class="w-full bg-stone-800 border border-stone-700 text-stone-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-amber-600 transition" />
                </div>
            </div>
            <div class="grid sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-stone-400 text-xs uppercase tracking-wider mb-1.5" for="date">Date</label>
                    <input type="date" id="date" name="date" required
                        class="w-full bg-stone-800 border border-stone-700 text-stone-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-amber-600 transition" />
                </div>
                <div>
                    <label class="block text-stone-400 text-xs uppercase tracking-wider mb-1.5" for="time">Time</label>
                    <input type="time" id="time" name="time" required
                        class="w-full bg-stone-800 border border-stone-700 text-stone-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-amber-600 transition" />
                </div>
            </div>
            <div>
                <label class="block text-stone-400 text-xs uppercase tracking-wider mb-1.5" for="notes">Special
                    Requests</label>
                <textarea id="notes" name="notes" rows="3" placeholder="Dietary restrictions, special occasions…"
                    class="w-full bg-stone-800 border border-stone-700 text-stone-200 placeholder-stone-500 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-amber-600 transition resize-none"></textarea>
            </div>
            <button type="submit"
                class="w-full py-3 bg-amber-700 hover:bg-amber-600 text-white font-semibold rounded-xl transition text-sm tracking-wide">
                Book Table
            </button>
        </form>
    </div>

    <!-- Footer -->
    <footer class="border-t border-stone-800 py-8 text-center text-stone-600 text-sm">
        <p>&copy; 2024 Thai Basil Restaurant. All rights reserved.</p>
    </footer>

</body>

</html>
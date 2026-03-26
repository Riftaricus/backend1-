<!doctype html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Menu — Thai Basil Restaurant</title>
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

    <header class="sticky top-0 z-40 bg-stone-950/90 backdrop-blur border-b border-stone-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center justify-between h-16">
                <a href="/"
                    class="font-serif text-2xl text-amber-400 tracking-wide hover:text-amber-300 transition">Thai
                    Basil</a>
                <ul class="hidden md:flex items-center gap-8 text-sm font-medium tracking-wide">
                    <li><a href="/" class="text-stone-300 hover:text-amber-400 transition">Home</a></li>
                    <li><a href="/menu" class="text-amber-400 border-b border-amber-400 pb-0.5">Menu</a></li>
                    <li><a href="/contact" class="text-stone-300 hover:text-amber-400 transition">Contact</a></li>
                    <li><a href="/reservations" class="text-stone-300 hover:text-amber-400 transition">Reservations</a>
                    </li>
                    <li><a href="/login"
                            class="px-4 py-1.5 border border-amber-700 text-amber-400 rounded hover:bg-amber-700 hover:text-white transition text-xs uppercase tracking-widest">Login</a>
                    </li>
                </ul>
                <!-- Mobile nav -->
                <nav class="md:hidden flex gap-4 text-sm">
                    <a href="/menu" class="text-stone-400 hover:text-amber-400 transition">Menu</a>
                    <a href="/reservations" class="text-stone-400 hover:text-amber-400 transition">Reserve</a>
                </nav>
            </nav>
        </div>
    </header>

    <!-- Page title -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-8 text-center">
        <p class="text-amber-500 uppercase tracking-widest text-xs mb-2">Explore</p>
        <h1 class="font-serif text-5xl text-amber-100">Our Menu</h1>
    </div>

    <!-- Category sections -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-24 space-y-16">

        <h2 class="font-serif text-3xl text-amber-200 mb-6 pb-3 border-b border-stone-800">Meals</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">

            @foreach ($menus as $meal)
                <div
                    class="group bg-stone-900 rounded-2xl overflow-hidden shadow-md hover:-translate-y-1 transition-all duration-300">
                    <div class="relative overflow-hidden h-44">
                    </div>
                    <div class="p-5">
                        <div class="flex items-start justify-between gap-2 mb-2">
                            <h3 class="text-amber-100 font-semibold">{{ $meal->name }}</h3>
                            <span class="text-amber-500 font-bold shrink-0">${{ number_format($meal->price, 2) }}</span>
                        </div>
                        <p class="text-stone-400 text-sm leading-relaxed">{{ $meal->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>

    </div>

    </div>

    <!-- Footer -->
    <footer class="border-t border-stone-800 py-8 text-center text-stone-600 text-sm">
        <p>&copy; 2024 Thai Basil Restaurant. All rights reserved.</p>
    </footer>

</body>

</html>
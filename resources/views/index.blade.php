<!doctype html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thai Basil Restaurant</title>
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

        .hero-bg {
            background-image:
                linear-gradient(to bottom, rgba(12, 10, 9, 0.65) 0%, rgba(12, 10, 9, 0.85) 100%),
                url('https://images.unsplash.com/photo-1555126634-323283e090fa?w=1600');
            background-size: cover;
            background-position: center;
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
                    <li><a href="/" class="text-amber-400 border-b border-amber-400 pb-0.5">Home</a></li>
                    <li><a href="/menu" class="text-stone-300 hover:text-amber-400 transition">Menu</a></li>
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

    <!-- Hero -->
    <div class="hero-bg min-h-[90vh] flex items-center justify-center text-center px-4">
        <div class="max-w-2xl">
            <p class="text-amber-500 uppercase tracking-[0.3em] text-xs font-medium mb-4">Est. 2008 · Bangkok Inspired
            </p>
            <h1 class="font-serif text-5xl md:text-7xl text-white leading-tight mb-6">
                Authentic<br /><em class="text-amber-400">Thai Cuisine</em>
            </h1>
            <p class="text-stone-300 text-lg md:text-xl mb-10 leading-relaxed">
                Experience the soulful flavours of Thailand — crafted with tradition, served with heart.
            </p>
            <div class="flex flex-wrap gap-4 justify-center">
                <a href="/menu"
                    class="px-8 py-3 bg-amber-700 hover:bg-amber-600 text-white font-semibold rounded-full transition shadow-lg">
                    View Menu
                </a>
                <a href="/reservations"
                    class="px-8 py-3 border border-stone-400 text-stone-100 hover:border-amber-400 hover:text-amber-400 rounded-full transition">
                    Reserve a Table
                </a>
            </div>
        </div>
    </div>

    <!-- Featured Dishes -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
        <div class="text-center mb-12">
            <p class="text-amber-500 uppercase tracking-widest text-xs mb-2">From Our Kitchen</p>
            <h2 class="font-serif text-4xl text-amber-100">Featured Dishes</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

            <div
                class="group bg-stone-900 rounded-2xl overflow-hidden shadow-lg hover:-translate-y-1 transition-all duration-300">
                <div class="relative overflow-hidden h-48">
                    <img src="https://images.unsplash.com/photo-1544025162-d76694265947?w=400" alt="Spring Rolls"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                    <span class="absolute top-3 right-3 bg-green-700 text-white text-xs px-2 py-0.5 rounded-full">🌿
                        Veg</span>
                </div>
                <div class="p-5">
                    <h3 class="text-amber-100 font-semibold text-lg mb-1">Spring Rolls</h3>
                    <p class="text-stone-400 text-sm mb-3 leading-relaxed">Crispy golden rolls filled with vegetables
                        and glass noodles, served with sweet chili sauce.</p>
                    <p class="text-amber-500 font-bold text-xl">$8.99</p>
                </div>
            </div>

            <div
                class="group bg-stone-900 rounded-2xl overflow-hidden shadow-lg hover:-translate-y-1 transition-all duration-300">
                <div class="relative overflow-hidden h-48">
                    <img src="https://images.unsplash.com/photo-1559314809-0d155014e29e?w=400" alt="Pad Thai"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                    <span class="absolute top-3 right-3 bg-red-700 text-white text-xs px-2 py-0.5 rounded-full">🌶
                        Spicy</span>
                </div>
                <div class="p-5">
                    <h3 class="text-amber-100 font-semibold text-lg mb-1">Pad Thai</h3>
                    <p class="text-stone-400 text-sm mb-3 leading-relaxed">Stir-fried rice noodles with shrimp, tofu,
                        bean sprouts, and crushed peanuts in tamarind sauce.</p>
                    <p class="text-amber-500 font-bold text-xl">$16.99</p>
                </div>
            </div>

            <div
                class="group bg-stone-900 rounded-2xl overflow-hidden shadow-lg hover:-translate-y-1 transition-all duration-300">
                <div class="relative overflow-hidden h-48">
                    <img src="https://images.unsplash.com/photo-1455619452474-d2be8b1e70cd?w=400" alt="Green Curry"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                    <div class="absolute top-3 right-3 flex gap-1">
                        <span class="bg-red-700 text-white text-xs px-2 py-0.5 rounded-full">🌶 Spicy</span>
                        <span class="bg-green-700 text-white text-xs px-2 py-0.5 rounded-full">🌿 Veg</span>
                    </div>
                </div>
                <div class="p-5">
                    <h3 class="text-amber-100 font-semibold text-lg mb-1">Green Curry</h3>
                    <p class="text-stone-400 text-sm mb-3 leading-relaxed">Rich coconut milk curry with fresh green
                        chilies, eggplant, and Thai basil.</p>
                    <p class="text-amber-500 font-bold text-xl">$18.99</p>
                </div>
            </div>

            <div
                class="group bg-stone-900 rounded-2xl overflow-hidden shadow-lg hover:-translate-y-1 transition-all duration-300">
                <div class="relative overflow-hidden h-48">
                    <img src="https://images.unsplash.com/photo-1519984388953-d2406bc725e1?w=400"
                        alt="Mango Sticky Rice"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                    <span class="absolute top-3 right-3 bg-green-700 text-white text-xs px-2 py-0.5 rounded-full">🌿
                        Veg</span>
                </div>
                <div class="p-5">
                    <h3 class="text-amber-100 font-semibold text-lg mb-1">Mango Sticky Rice</h3>
                    <p class="text-stone-400 text-sm mb-3 leading-relaxed">Sweet glutinous rice served with fresh mango
                        slices and coconut cream.</p>
                    <p class="text-amber-500 font-bold text-xl">$9.99</p>
                </div>
            </div>

        </div>
        <div class="text-center mt-10">
            <a href="/menu"
                class="px-8 py-3 border border-amber-700 text-amber-400 hover:bg-amber-700 hover:text-white rounded-full transition text-sm">
                See Full Menu →
            </a>
        </div>
    </div>

    <!-- About -->
    <div class="bg-stone-900 py-24 px-4">
        <div class="max-w-3xl mx-auto text-center">
            <p class="text-amber-500 uppercase tracking-widest text-xs mb-3">Our Story</p>
            <h2 class="font-serif text-4xl text-amber-100 mb-6">About Us</h2>
            <p class="text-stone-400 text-lg leading-relaxed">
                Welcome to Thai Basil, where we bring authentic Thai flavours to your table. Our chefs
                use traditional recipes and the freshest ingredients to create memorable dining experiences
                that transport you straight to the streets of Bangkok.
            </p>
        </div>
    </div>

    <!-- Footer -->
    <footer class="border-t border-stone-800 py-8 text-center text-stone-600 text-sm">
        <p>&copy; 2024 Thai Basil Restaurant. All rights reserved.</p>
    </footer>

</body>

</html>
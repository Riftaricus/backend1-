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

        <!-- Appetizers -->
        <div id="appetizers">
            <h2 class="font-serif text-3xl text-amber-200 mb-6 pb-3 border-b border-stone-800">Appetizers</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">

                <div
                    class="group bg-stone-900 rounded-2xl overflow-hidden shadow-md hover:-translate-y-1 transition-all duration-300">
                    <div class="relative overflow-hidden h-44">
                        <img src="https://images.unsplash.com/photo-1544025162-d76694265947?w=400" alt="Spring Rolls"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                        <span class="absolute top-3 right-3 bg-green-700 text-white text-xs px-2 py-0.5 rounded-full">🌿
                            Veg</span>
                    </div>
                    <div class="p-5">
                        <div class="flex items-start justify-between gap-2 mb-2">
                            <h3 class="text-amber-100 font-semibold">Spring Rolls</h3>
                            <span class="text-amber-500 font-bold shrink-0">$8.99</span>
                        </div>
                        <p class="text-stone-400 text-sm leading-relaxed">Crispy golden rolls filled with vegetables and
                            glass noodles, served with sweet chili sauce.</p>
                    </div>
                </div>

                <div
                    class="group bg-stone-900 rounded-2xl overflow-hidden shadow-md hover:-translate-y-1 transition-all duration-300">
                    <div class="relative overflow-hidden h-44">
                        <img src="https://images.unsplash.com/photo-1547592166-23ac45744acd?w=400" alt="Tom Yum Soup"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                        <span class="absolute top-3 right-3 bg-red-700 text-white text-xs px-2 py-0.5 rounded-full">🌶
                            Spicy</span>
                    </div>
                    <div class="p-5">
                        <div class="flex items-start justify-between gap-2 mb-2">
                            <h3 class="text-amber-100 font-semibold">Tom Yum Soup</h3>
                            <span class="text-amber-500 font-bold shrink-0">$12.99</span>
                        </div>
                        <p class="text-stone-400 text-sm leading-relaxed">Spicy and sour soup with lemongrass, galangal,
                            kaffir lime, mushrooms, and shrimp.</p>
                    </div>
                </div>

                <div
                    class="group bg-stone-900 rounded-2xl overflow-hidden shadow-md hover:-translate-y-1 transition-all duration-300">
                    <div class="relative overflow-hidden h-44">
                        <img src="https://images.unsplash.com/photo-1529563021893-cc83c992d75d?w=400"
                            alt="Satay Skewers"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                    </div>
                    <div class="p-5">
                        <div class="flex items-start justify-between gap-2 mb-2">
                            <h3 class="text-amber-100 font-semibold">Satay Skewers</h3>
                            <span class="text-amber-500 font-bold shrink-0">$11.99</span>
                        </div>
                        <p class="text-stone-400 text-sm leading-relaxed">Marinated chicken or beef skewers grilled over
                            charcoal, served with peanut sauce.</p>
                    </div>
                </div>

            </div>
        </div>

        <!-- Main Courses -->
        <div id="mains">
            <h2 class="font-serif text-3xl text-amber-200 mb-6 pb-3 border-b border-stone-800">Main Courses</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">

                <div
                    class="group bg-stone-900 rounded-2xl overflow-hidden shadow-md hover:-translate-y-1 transition-all duration-300">
                    <div class="relative overflow-hidden h-44">
                        <img src="https://images.unsplash.com/photo-1559314809-0d155014e29e?w=400" alt="Pad Thai"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                        <span class="absolute top-3 right-3 bg-red-700 text-white text-xs px-2 py-0.5 rounded-full">🌶
                            Spicy</span>
                    </div>
                    <div class="p-5">
                        <div class="flex items-start justify-between gap-2 mb-2">
                            <h3 class="text-amber-100 font-semibold">Pad Thai</h3>
                            <span class="text-amber-500 font-bold shrink-0">$16.99</span>
                        </div>
                        <p class="text-stone-400 text-sm leading-relaxed">Stir-fried rice noodles with shrimp, tofu,
                            bean sprouts, and crushed peanuts in tamarind sauce.</p>
                    </div>
                </div>

                <div
                    class="group bg-stone-900 rounded-2xl overflow-hidden shadow-md hover:-translate-y-1 transition-all duration-300">
                    <div class="relative overflow-hidden h-44">
                        <img src="https://images.unsplash.com/photo-1455619452474-d2be8b1e70cd?w=400" alt="Green Curry"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                        <div class="absolute top-3 right-3 flex gap-1">
                            <span class="bg-red-700 text-white text-xs px-2 py-0.5 rounded-full">🌶 Spicy</span>
                            <span class="bg-green-700 text-white text-xs px-2 py-0.5 rounded-full">🌿 Veg</span>
                        </div>
                    </div>
                    <div class="p-5">
                        <div class="flex items-start justify-between gap-2 mb-2">
                            <h3 class="text-amber-100 font-semibold">Green Curry</h3>
                            <span class="text-amber-500 font-bold shrink-0">$18.99</span>
                        </div>
                        <p class="text-stone-400 text-sm leading-relaxed">Rich coconut milk curry with fresh green
                            chilies, eggplant, and Thai basil.</p>
                    </div>
                </div>

                <div
                    class="group bg-stone-900 rounded-2xl overflow-hidden shadow-md hover:-translate-y-1 transition-all duration-300">
                    <div class="relative overflow-hidden h-44">
                        <img src="https://images.unsplash.com/photo-1574484284002-952d92456975?w=400"
                            alt="Massaman Curry"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                    </div>
                    <div class="p-5">
                        <div class="flex items-start justify-between gap-2 mb-2">
                            <h3 class="text-amber-100 font-semibold">Massaman Curry</h3>
                            <span class="text-amber-500 font-bold shrink-0">$19.99</span>
                        </div>
                        <p class="text-stone-400 text-sm leading-relaxed">Mild curry with potatoes, peanuts, and tender
                            chicken in a rich, aromatic sauce.</p>
                    </div>
                </div>

            </div>
        </div>

        <!-- Desserts -->
        <div id="desserts">
            <h2 class="font-serif text-3xl text-amber-200 mb-6 pb-3 border-b border-stone-800">Desserts</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">

                <div
                    class="group bg-stone-900 rounded-2xl overflow-hidden shadow-md hover:-translate-y-1 transition-all duration-300">
                    <div class="relative overflow-hidden h-44">
                        <img src="https://images.unsplash.com/photo-1519984388953-d2406bc725e1?w=400"
                            alt="Mango Sticky Rice"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                        <span class="absolute top-3 right-3 bg-green-700 text-white text-xs px-2 py-0.5 rounded-full">🌿
                            Veg</span>
                    </div>
                    <div class="p-5">
                        <div class="flex items-start justify-between gap-2 mb-2">
                            <h3 class="text-amber-100 font-semibold">Mango Sticky Rice</h3>
                            <span class="text-amber-500 font-bold shrink-0">$9.99</span>
                        </div>
                        <p class="text-stone-400 text-sm leading-relaxed">Sweet glutinous rice served with fresh mango
                            slices and coconut cream.</p>
                    </div>
                </div>

            </div>
        </div>

        <!-- Beverages -->
        <div id="beverages">
            <h2 class="font-serif text-3xl text-amber-200 mb-6 pb-3 border-b border-stone-800">Beverages</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">

                <div
                    class="group bg-stone-900 rounded-2xl overflow-hidden shadow-md hover:-translate-y-1 transition-all duration-300">
                    <div class="relative overflow-hidden h-44">
                        <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400" alt="Thai Iced Tea"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                        <span class="absolute top-3 right-3 bg-green-700 text-white text-xs px-2 py-0.5 rounded-full">🌿
                            Veg</span>
                    </div>
                    <div class="p-5">
                        <div class="flex items-start justify-between gap-2 mb-2">
                            <h3 class="text-amber-100 font-semibold">Thai Iced Tea</h3>
                            <span class="text-amber-500 font-bold shrink-0">$4.99</span>
                        </div>
                        <p class="text-stone-400 text-sm leading-relaxed">Sweetened black tea with condensed milk,
                            served over ice.</p>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <!-- Footer -->
    <footer class="border-t border-stone-800 py-8 text-center text-stone-600 text-sm">
        <p>&copy; 2024 Thai Basil Restaurant. All rights reserved.</p>
    </footer>

</body>

</html>
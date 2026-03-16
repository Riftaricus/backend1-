<!doctype html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact — Thai Basil Restaurant</title>
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
                    <li><a href="/contact" class="text-amber-400 border-b border-amber-400 pb-0.5">Contact</a></li>
                    <li><a href="/reservations" class="text-stone-300 hover:text-amber-400 transition">Reservations</a>
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

    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="text-center mb-12">
            <p class="text-amber-500 uppercase tracking-widest text-xs mb-2">Reach Out</p>
            <h1 class="font-serif text-5xl text-amber-100">Contact Us</h1>
        </div>

        <div class="grid md:grid-cols-2 gap-12">

            <!-- Info -->
            <div class="space-y-8 text-stone-400">
                <div>
                    <h3 class="font-serif text-xl text-amber-200 mb-2">Visit Us</h3>
                    <p>123 Thai Street, Bangkok District<br />City, State 12345</p>
                </div>
                <div>
                    <h3 class="font-serif text-xl text-amber-200 mb-2">Call Us</h3>
                    <p><a href="tel:5551234567" class="hover:text-amber-400 transition">(555) 123-4567</a></p>
                </div>
                <div>
                    <h3 class="font-serif text-xl text-amber-200 mb-2">Email</h3>
                    <p><a href="mailto:info@thaibasil.com"
                            class="hover:text-amber-400 transition">info@thaibasil.com</a></p>
                </div>
                <div>
                    <h3 class="font-serif text-xl text-amber-200 mb-2">Hours</h3>
                    <p>Mon – Sat: 11:00 AM – 10:00 PM<br />Sunday: 12:00 PM – 9:00 PM</p>
                </div>
            </div>

            <!-- Form -->
            <form action="#" method="POST" class="space-y-4">
                <h3 class="font-serif text-2xl text-amber-100 mb-4">Send a Message</h3>
                <input type="text" name="name" placeholder="Your Name" required
                    class="w-full bg-stone-900 border border-stone-700 text-stone-200 placeholder-stone-500 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-amber-600 transition" />
                <input type="email" name="email" placeholder="Your Email" required
                    class="w-full bg-stone-900 border border-stone-700 text-stone-200 placeholder-stone-500 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-amber-600 transition" />
                <input type="tel" name="phone" placeholder="Phone Number"
                    class="w-full bg-stone-900 border border-stone-700 text-stone-200 placeholder-stone-500 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-amber-600 transition" />
                <textarea name="message" placeholder="Your Message" rows="5" required
                    class="w-full bg-stone-900 border border-stone-700 text-stone-200 placeholder-stone-500 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-amber-600 transition resize-none"></textarea>
                <button type="submit"
                    class="w-full py-3 bg-amber-700 hover:bg-amber-600 text-white font-semibold rounded-xl transition">
                    Send Message
                </button>
            </form>

        </div>
    </div>

    <!-- Footer -->
    <footer class="border-t border-stone-800 py-8 text-center text-stone-600 text-sm">
        <p>&copy; 2024 Thai Basil Restaurant. All rights reserved.</p>
    </footer>

</body>

</html>
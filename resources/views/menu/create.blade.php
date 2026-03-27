<!doctype html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Create Menu Item — Thai Basil Restaurant</title>
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
                </ul>
            </nav>
        </div>
    </header>

    <main class="py-12">
        <div class="max-w-md mx-auto sm:px-6 lg:px-8">
            <div class="bg-stone-900/80 shadow-lg rounded-lg p-8 border border-stone-800">
                <h2 class="text-2xl font-serif text-amber-400 mb-6">Create Menu Item</h2>
                <form method="POST" action="{{ route('store') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="name" class="block text-stone-200 font-medium">Name</label>
                        <input type="text" name="name" id="name"
                            class="mt-1 block w-full bg-stone-800 border border-stone-700 text-stone-100 rounded-md shadow-sm focus:ring focus:ring-amber-400 focus:border-amber-400"
                            required>
                    </div>

                    <div class="mb-4">
                        <label for="description" class="block text-stone-200 font-medium">Description</label>
                        <textarea name="description" id="description" rows="3"
                            class="mt-1 block w-full bg-stone-800 border border-stone-700 text-stone-100 rounded-md shadow-sm focus:ring focus:ring-amber-400 focus:border-amber-400"
                            required></textarea>
                    </div>

                    <div class="mb-6">
                        <label for="price" class="block text-stone-200 font-medium">Price</label>
                        <input type="number" name="price" id="price" step="0.01" min="0"
                            class="mt-1 block w-full bg-stone-800 border border-stone-700 text-stone-100 rounded-md shadow-sm focus:ring focus:ring-amber-400 focus:border-amber-400"
                            required>
                    </div>

                    <div class="flex justify-end">
                        <button type="submit"
                            class="px-6 py-2 bg-amber-400 text-stone-900 font-semibold rounded hover:bg-amber-300 transition">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flower Shop Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .overlap {
            position: relative;
        }
        .overlap::before {
            content: "";
            position: absolute;
            top: -20px;
            left: -20px;
            width: calc(100% + 40px);
            height: calc(100% + 40px);
            background: rgba(255, 255, 255, 0.9);
            z-index: -1;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }
        .card:hover {
            transform: scale(1.05);
            transition: transform 0.3s;
        }
    </style>
</head>
<body class="bg-gray-100">

<section class="py-8">
    <div class="container mx-auto px-6">
        <h1 class="text-4xl font-bold text-center mb-8 text-blue-600">Welcome to Our Flower Shop</h1>

        <!-- Grid Layout for Flower Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Flower Card 1 -->
            <div class="relative bg-white border rounded-lg shadow-lg overflow-hidden overlap card">
                <img src="1.png" alt="Flower 1" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-2xl font-semibold text-blue-800">Beautiful Roses</h2>
                    <p class="text-gray-600">Freshly picked roses that brighten any occasion.</p>
                    <p class="text-xl font-bold text-blue-700">₱1,500.00</p>
                    <a href="/buy/roses" class="mt-4 inline-block bg-blue-600 text-white rounded-lg px-4 py-2 hover:bg-blue-700 transition">Buy Now</a>
                </div>
            </div>

            <!-- Flower Card 2 -->
            <div class="relative bg-white border rounded-lg shadow-lg overflow-hidden overlap card">
                <img src="2.png" alt="Flower 2" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-2xl font-semibold text-green-800">Vibrant Tulips</h2>
                    <p class="text-gray-600">A stunning bouquet of colorful tulips.</p>
                    <p class="text-xl font-bold text-green-700">₱1,200.00</p>
                    <a href="/buy/tulips" class="mt-4 inline-block bg-green-600 text-white rounded-lg px-4 py-2 hover:bg-green-700 transition">Buy Now</a>
                </div>
            </div>

            <!-- Flower Card 3 -->
            <div class="relative bg-white border rounded-lg shadow-lg overflow-hidden overlap card">
                <img src="3.png" alt="Flower 3" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-2xl font-semibold text-yellow-800">Elegant Lilies</h2>
                    <p class="text-gray-600">Delicate lilies perfect for any event.</p>
                    <p class="text-xl font-bold text-yellow-700">₱900.00</p>
                    <a href="/buy/lilies" class="mt-4 inline-block bg-yellow-600 text-white rounded-lg px-4 py-2 hover:bg-yellow-700 transition">Buy Now</a>
                </div>
            </div>

            <!-- Flower Card 4 -->
            <div class="relative bg-white border rounded-lg shadow-lg overflow-hidden overlap card">
                <img src="4.png" alt="Flower 4" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-2xl font-semibold text-purple-800">Charming Daisies</h2>
                    <p class="text-gray-600">Bright and cheerful daisies for every occasion.</p>
                    <p class="text-xl font-bold text-purple-700">₱700.00</p>
                    <a href="/buy/daisies" class="mt-4 inline-block bg-purple-600 text-white rounded-lg px-4 py-2 hover:bg-purple-700 transition">Buy Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>

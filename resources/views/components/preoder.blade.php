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
    <h1 class="text-4xl font-extrabold text-gray-900">Pre-Order Your Favorite Product</h1>
                <p class="text-lg text-gray-600">Secure your order and be the first to enjoy our new arrivals!</p>
            </header>

            <main class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Product Details -->
                <section class="bg-gray-100 rounded-lg p-6">
                    <h2 class="text-2xl font-semibold mb-4 text-gray-900">Product Details</h2>
                    <img src="/1.png" alt="Product Image" class="w-full h-48 object-cover rounded-lg mb-4">
                    <p class="text-gray-700 mb-4">Discover the amazing features of this product, designed just for you.</p>
                    <ul class="list-disc list-inside mb-4">
                        <li class="text-gray-700">High-quality materials</li>
                        <li class="text-gray-700">Available in various colors</li>
                        <li class="text-gray-700">Limited stock available</li>
                    </ul>
                    <p class="text-2xl font-bold text-gray-900">₱984.00</p>
                </section>

                <!-- Pre-Order Form -->
                <section class="bg-gray-100 rounded-lg p-6">
                    <h2 class="text-2xl font-semibold mb-4 text-gray-900">Place Your Pre-Order</h2>
                    <form action="{{ route('preorder.store') }}" method="POST">
                    @csrf
                            <!-- Flash Message for Success -->
                            @if(session('success'))
                                <div class="bg-green-500 text-white p-4 mb-4">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <div class="mb-4">
                            <label for="name" class="block text-gray-700">Full Name</label>
                            <input type="text" id="name" name="name" required class="w-full p-2 border border-gray-300 rounded-lg" placeholder="Enter your full name">
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700">Email Address</label>
                            <input type="email" id="email" name="email" required class="w-full p-2 border border-gray-300 rounded-lg" placeholder="Enter your email">
                        </div>
                        <div class="mb-4">
                            <label for="quantity" class="block text-gray-700">Quantity</label>
                            <input type="number" id="quantity" name="quantity" min="1" required class="w-full p-2 border border-gray-300 rounded-lg" placeholder="Enter quantity">
                        </div>
                        <button type="submit" class="w-full bg-pink-600 text-white p-2 rounded-lg hover:bg-blue-700 transition">Submit Pre-Order</button>
                    </form>
                </section>
            </main>

            
        </div>
    </div>
</section>

</body>
</html>
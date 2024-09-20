<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elective Inc. Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="font-sans antialiased bg-gray-50 text-gray-800">
    <div class="relative min-h-screen flex flex-col items-center justify-center overflow-hidden">
        <!-- Background Image with Overlay -->
        <img src="/bg.jpg" alt="Background" class="absolute inset-0 object-cover w-full h-full opacity-70" />

        <!-- Content -->
        <div class="relative z-10 w-full max-w-4xl mx-auto p-6 lg:p-12">
            <!-- Header -->
            <header class="bg-white shadow-2xl rounded-lg p-6 mb-8">
                <div class="flex items-center justify-between">
                    <a href="/" class="text-3xl font-extrabold text-gray-900 hover:text-gray-700 transition">THE PEONY STUDIOS</a>
                    <nav class="space-x-6">
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}" class="text-gray-900 hover:text-gray-700 transition">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="text-gray-900 hover:text-gray-700 transition">Login</a>
                                <a href="{{ route('terms') }}" class="text-gray-900 hover:text-gray-700 transition">Terms</a>
                                <a href="{{ route('contact') }}" class="text-gray-900 hover:text-gray-700 transition">Contact</a>
                                <a href="{{ route('services') }}" class="text-gray-900 hover:text-gray-700 transition">Services</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="text-gray-900 hover:text-gray-700 transition">Register</a>
                                @endif
                            @endauth
                        @endif
                    </nav>
                </div>
            </header>

            <!-- Main Content -->
            <main class="bg-white rounded-lg shadow-lg p-8 max-w-md mx-auto">
                <h1 class="text-3xl font-bold mb-6 text-gray-900">Contact Us</h1>
                
                <h2 class="text-2xl font-semibold mb-4 text-gray-900">Get in Touch</h2>
                <p class="mb-4 text-gray-700">
                    We would love to hear from you! Please fill out the form below or reach out to us using the contact information provided.
                </p>

                <form action="{{ route('contact.submit') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label for="name" class="block text-gray-700">Name:</label>
                        <input type="text" id="name" name="name" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" />
                    </div>

                    <div>
                        <label for="email" class="block text-gray-700">Email:</label>
                        <input type="email" id="email" name="email" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" />
                    </div>

                    <div>
                        <label for="message" class="block text-gray-700">Message:</label>
                        <textarea id="message" name="message" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" rows="4"></textarea>
                    </div>

                    <button type="submit" class="w-full bg-blue-600 text-white rounded-md p-2 hover:bg-blue-700 transition">Send Message</button>
                </form>

                <h2 class="text-2xl font-semibold mt-6 mb-4 text-gray-900">Contact Information</h2>
                <p class="text-gray-700">Email: info@electiveinc.com</p>
                <p class="text-gray-700">Phone: +1 (555) 123-4567</p>
                <p class="text-gray-700">Address: 123 Main St, Suite 456, City, Country</p>
            </main>
        </div>
    </div>
</body>
</html>

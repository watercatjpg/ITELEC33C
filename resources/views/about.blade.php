<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Elective Inc. Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="font-sans antialiased bg-gray-50 text-gray-800">
    <div class="relative min-h-screen flex flex-col items-center justify-center overflow-hidden">
        <!-- Background Image -->
        <img src="https://laravel.com/assets/img/welcome/background.svg" alt="Background" class="absolute inset-0 object-cover w-full h-full" />

        <!-- Content -->
        <div class="relative z-10 w-full max-w-4xl mx-auto p-6 lg:p-12">
            <!-- Header -->
            <header class="bg-white shadow-lg rounded-lg p-4 mb-8">
                <div class="flex items-center justify-between">
                    <a href="/" class="text-2xl font-bold text-gray-900 hover:text-gray-700">ELECTIVE INC. PORTAL</a>
                    <nav class="space-x-4">
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}" class="text-gray-900 hover:text-gray-700 transition">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="text-gray-900 hover:text-gray-700 transition">Login</a>
                                <a href="{{ route('about') }}" class="text-gray-900 hover:text-gray-700 transition">About</a>
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
                <h1 class="text-3xl font-bold mb-4 text-gray-900">About Us</h1>
                <p class="mb-4 text-gray-700">
                    Welcome to Elective Inc. Portal! We are dedicated to providing you with a seamless and efficient way to manage your elective courses and academic interests. Our platform offers an intuitive interface designed to help you easily navigate through your choices, track your progress, and stay updated with the latest information.
                </p>
                <p class="text-gray-700">
                    At Elective Inc., we believe in empowering students by offering the tools and resources needed to make informed decisions about their education. Our team is committed to continuously improving and expanding our services to meet your needs and expectations.
                </p>
                <p class="mt-4 text-gray-700">
                    Thank you for choosing Elective Inc. Portal. If you have any questions or need support, please don't hesitate to reach out to our team through the contact page.
                </p>
            </main>
        </div>
    </div>
</body>
</html>

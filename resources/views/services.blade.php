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
                                <a href="{{ route('home') }}" class="text-gray-900 hover:text-gray-700 transition">Login</a>
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
            <main class="flex flex-col items-center">
                <div class="bg-white rounded-lg shadow-lg p-8 max-w-4xl mx-auto w-full">

                <h1 class="text-3xl font-bold mb-6 text-gray-900">Our Services</h1>
                
                <h2 class="text-2xl font-semibold mb-4 text-gray-900">Service 1: Customized Solutions</h2>
                <p class="mb-4 text-gray-700">
                    We offer tailored solutions to meet the unique needs of our clients, ensuring that every aspect of our service aligns with your requirements.
                </p>

                <h2 class="text-2xl font-semibold mb-4 text-gray-900">Service 2: 24/7 Support</h2>
                <p class="mb-4 text-gray-700">
                    Our dedicated support team is available around the clock to assist you with any questions or concerns, ensuring you have the help you need when you need it.
                </p>

                <h2 class="text-2xl font-semibold mb-4 text-gray-900">Service 3: Expert Consultation</h2>
                <p class="mb-4 text-gray-700">
                    Get expert advice from our professionals to navigate complex decisions and optimize your experience with our services.
                </p>

                <h2 class="text-2xl font-semibold mb-4 text-gray-900">Service 4: Regular Updates</h2>
                <p class="mb-4 text-gray-700">
                    We provide regular updates and insights to keep you informed about the latest developments in our offerings and industry trends.
                </p>
            </main>
        </div>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms and Policies - Elective Inc. Portal</title>
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
                                <a href="{{ route('login') }}" class="text-gray-900 hover:text-gray-700 transition">Welcome</a>
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
                <h1 class="text-3xl font-bold mb-6 text-gray-900">Terms and Policies</h1>
                
                <section class="mb-6">
                    <h2 class="text-2xl font-semibold mb-4 text-gray-900">Terms of Service</h2>
                    <p class="mb-4 text-gray-700">
                        Welcome to Elective Inc. Portal. By using our service, you agree to comply with and be bound by the following terms and conditions. Please read them carefully.
                    </p>
                    <p class="mb-4 text-gray-700">
                        We reserve the right to modify or update these terms at any time without prior notice. Your continued use of the service constitutes acceptance of any changes made.
                    </p>
                </section>

                <section class="mb-6">
                    <h2 class="text-2xl font-semibold mb-4 text-gray-900">Privacy Policy</h2>
                    <p class="mb-4 text-gray-700">
                        Your privacy is important to us. We collect and use personal information only as described in our privacy policy. We implement reasonable security measures to protect your data.
                    </p>
                    <p class="mb-4 text-gray-700">
                        We do not share your information with third parties except as required by law or as necessary to provide our services. For more details, please review our full privacy policy.
                    </p>
                </section>

       
               
            </main>
        </div>
    </div>
</body>
</html>

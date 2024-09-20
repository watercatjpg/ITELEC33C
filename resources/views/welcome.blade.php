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

                    <!-- Authentication Card -->
                        <x-slot name="logo">
                        </x-slot>

                        <x-validation-errors class="mb-4" />

                        @session('status')
                            <div class="mb-4 text-sm text-green-600">
                                {{ $value }}
                            </div>
                        @endsession

                        <form method="POST" action="{{ route('login') }}" class="space-y-6">
                            @csrf

                            <div class="mb-4">
                                <x-label for="email" value="{{ __('Email') }}" />
                                <x-input id="email" class="block mt-1 w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                            </div>

                            <div class="mb-4">
                                <x-label for="password" value="{{ __('Password') }}" />
                                <x-input id="password" class="block mt-1 w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" type="password" name="password" required autocomplete="current-password" />
                            </div>

                            <div class="flex items-center mb-4">
                                <x-checkbox id="remember_me" name="remember" />
                                <label for="remember_me" class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</label>
                            </div>

                            <div class="flex items-center justify-between">
                                @if (Route::has('password.request'))
                                    <a class="text-sm text-gray-600 hover:text-gray-900 underline" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif

                                <x-button class="bg-pink-500 text-white hover:bg-c-600 focus:ring-pink-500">
                                    {{ __('Log in') }}
                                </x-button>
                            </div>
                        </form>
                </div>
            </main>
        </div>
    </div>
</body>
</html>

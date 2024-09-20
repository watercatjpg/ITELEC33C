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

                        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ms-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
                </div>
            </main>
        </div>
    </div>
</body>
</html>

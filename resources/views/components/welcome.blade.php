<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
            background: rgba(255, 255, 255, 0.8);
            z-index: -1;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
    </style>
</head>
<body class="bg-gray-100">



<section class="py-16">
    <div class="container mx-auto px-6">
        <!-- Header -->
        <header class="text-center mb-12">
            <h1 class="text-4xl font-bold text-teal-900 mb-4">  Hello, {{ Auth::user()->name }}! 
            </h1>
            <p class="text-lg text-gray-700">
                Efficiently manage your tasks, monitor key metrics, and access your account settings with our streamlined dashboard.
            </p>
        </header>

        <!-- Grid Layout with Overlapping Elements -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Task Summary -->
          <!-- Accounts -->
<div class="relative bg-blue-100 border-t-4 border-blue-500 p-6 rounded-lg shadow-lg overlap">
    <div class="flex items-center mb-4">
        <div class="w-12 h-12 flex items-center justify-center bg-blue-200 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-8 h-8 text-blue-600">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
            </svg>
        </div>
        <div class="ml-4">
            <h2 class="text-xl font-semibold text-blue-800">Accounts</h2>
        </div>
    </div>
    <p class="text-gray-600">View and manage all user accounts.</p>
    <a href="/accounts" class="mt-4 inline-block bg-blue-600 text-white rounded-lg px-4 py-2">Manage Accounts</a>
</div>

<!-- Account List -->
<div class="relative bg-green-100 border-t-4 border-green-500 p-6 rounded-lg shadow-lg overlap">
    <div class="flex items-center mb-4">
        <div class="w-12 h-12 flex items-center justify-center bg-green-200 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-8 h-8 text-green-600">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12l5 5L20 7" />
            </svg>
        </div>
        <div class="ml-4">
            <h2 class="text-xl font-semibold text-green-800">Account List</h2>
        </div>
    </div>
    <p class="text-gray-600">View a list of all dummy accounts.</p>
    <a href="/account-list" class="mt-4 inline-block bg-green-600 text-white rounded-lg px-4 py-2">View Account List</a>
</div>

<!-- Post as Admin -->
<div class="relative bg-yellow-100 border-t-4 border-yellow-500 p-6 rounded-lg shadow-lg overlap">
    <div class="flex items-center mb-4">
        <div class="w-12 h-12 flex items-center justify-center bg-yellow-200 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-8 h-8 text-yellow-600">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v4m0 0v4m0-4h4m-4 0H8m0 0v4m4-4V4m0 0v4m0 0h4m-4 0H8" />
            </svg>
        </div>
        <div class="ml-4">
            <h2 class="text-xl font-semibold text-yellow-800">Post as an Admin</h2>
            <!-- Display post count -->
        </div>
    </div>  
    <p class="text-gray-600">Create a new post for your users.</p>
    <div class="flex space-x-4">
        <a href="/admin/posts/create" class="mt-4 inline-block bg-yellow-600 text-white rounded-lg px-4 py-2">Create Post</a>
        <a href="/admin/posts" class="mt-4 inline-block bg-yellow-600 text-white rounded-lg px-4 py-2">View Posts</a>
    </div>
</div>


<!-- Post as User -->
<div class="relative bg-purple-100 border-t-4 border-purple-500 p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105">
    <div class="flex items-center mb-4">
        <div class="w-12 h-12 flex items-center justify-center bg-purple-200 rounded-full shadow-md">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-8 h-8 text-purple-600">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v4m0 0v4m0-4h4m-4 0H8m0 0v4m4-4V4m0 0v4m0 0h4m-4 0H8" />
            </svg>
        </div>
        <div class="ml-4">
            <h2 class="text-xl font-semibold text-purple-800">Post as a User</h2>
        </div>
    </div>
    <p class="text-gray-600 mb-4">Create a new post for your personal feed.</p>
    <div class="flex space-x-4">
        <a href="/user/posts/create" class="bg-purple-600 text-white rounded-lg px-4 py-2 transition-colors duration-200 hover:bg-purple-700">Create Post</a>
        <a href="/user/posts" class="bg-purple-600 text-white rounded-lg px-4 py-2 transition-colors duration-200 hover:bg-purple-700">View Posts</a>
    </div>
</div>




</body>
</html>

<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\UserPostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminPostController;

// Public routes
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/terms', function () {
    return view('terms');
})->name('terms');

Route::get('/services', function () {
    return view('services');
})->name('services');

// Protected routes: Accessible only to authenticated users
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');

    Route::get('/change', function () {
        return view('change');
    })->name('change');

    Route::get('/delete', function () {
        return view('delete');
    })->name('delete');

    Route::get('/browser', function () {
        return view('browser');
    })->name('browser');

    // Products are accessible to authenticated users
    Route::get('/products', function () {
        return view('products');
    })->name('products');

    // Admin-specific routes: Only accessible to admins
    Route::middleware('isAdmin')->group(function () {
        Route::get('/accounts', function () {
            $users = User::all(); // Retrieves all users from the database
            return view('accounts', ['users' => $users]);
        })->name('accounts');

        // Account List - Display all users (UserController index method)
        Route::get('/account-list', [UserController::class, 'index'])->name('account-list');

        // Account Details - Show individual user based on ID (UserController show method)
        Route::get('/account-list/{id}', [UserController::class, 'show'])->name('account.show');
    });

    Route::middleware(['auth:sanctum', 'isUser'])->prefix('user')->group(function () {
        Route::get('/posts', [UserPostController::class, 'index'])->name('user.posts.index'); // List user posts
        Route::get('/posts/create', [UserPostController::class, 'create'])->name('user.posts.create');
        Route::post('/posts', [UserPostController::class, 'store'])->name('user.posts.store');
        Route::get('/posts/{post}', [UserPostController::class, 'show'])->name('user.posts.show');
    });
    

});



// Admin routes: These are separate and require admin role
Route::prefix('admin')->middleware('isAdmin')->group(function () {
    Route::get('/posts', [AdminPostController::class, 'index'])->name('admin.posts.index');
    Route::get('/posts/create', [AdminPostController::class, 'create'])->name('admin.posts.create');
    Route::post('/posts', [AdminPostController::class, 'store'])->name('admin.posts.store');
    Route::get('/posts/{post}/edit', [AdminPostController::class, 'edit'])->name('admin.posts.edit');
    Route::put('/posts/{post}', [AdminPostController::class, 'update'])->name('admin.posts.update');
});

Route::get('/product', function () {
    return view('product');
})->name('product')->middleware('isUser:user');

Route::get('/preoder', function () {
    return view('preoder');
})->name('preoder')->middleware('isUser:user');
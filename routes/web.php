<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\MenuController as AdminMenuController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservationController;

// ... route lain jika ada ...

Route::get('/menu', [MenuController::class, 'fullMenu'])->name('menu');


// ... (lanjutan kode routes)

// routes/web.php

// Pastikan controller ini ada

// ... route lainnya ...

// Route untuk halaman menu utama
Route::get('/menu', [MenuController::class, 'index'])->name('menu');

// Route baru yang hilang (menu.detail)
// {slug} adalah parameter yang akan menangkap 'original', 'keju', dll.
Route::get('/menu/{slug}', [MenuController::class, 'show'])->name('menu.detail');

Route::get('/menu-full', [MenuController::class, 'fullMenu'])->name('menu.full');

// Static Pages Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/menu', [MenuController::class, 'fullMenu'])->name('menu');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');



// Reservation Routes
Route::resource('reservations', ReservationController::class);

// Authentication routes
Auth::routes();

Route::middleware(['auth', 'checkrole:admin'])->group(function () {
    Route::resource('menus', MenuController::class)->except('show');
    Route::get('/admin', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

Route::middleware(['web', 'auth', 'checkrole:admin'])->prefix('admin')->name('admin.')->group(function () {

    Route::resource('menus', AdminMenuController::class);
});

Route::middleware(['auth', 'checkrole:user'])->group(function () {
    Route::resource('orders', OrderController::class)->only('index', 'create', 'store', 'show', 'destroy');
    Route::get('orders/{order}/print', [OrderController::class, 'print'])->name('orders.print');
    Route::get('/dashboard', function () {
        return view('user.dashboard');
    })->name('user.dashboard');

    Route::get('messages', [\App\Http\Controllers\MessageController::class, 'index'])->name('messages.index');
    Route::post('messages', [\App\Http\Controllers\MessageController::class, 'store'])->name('messages.store');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [HomeController::class, 'index'])->name('home');

// Route Menu Publik
Route::get('/menu-lengkap', [MenuController::class, 'fullMenu'])->name('menu.full');

// Route Orders (Contoh penggunaan checkrole:user)
Route::middleware(['auth', 'checkrole:user'])->group(function () {
    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
});


/*
|--------------------------------------------------------------------------
| Admin Routes (Dilindungi oleh checkrole:admin)
|--------------------------------------------------------------------------
*/

Route::middleware(['web', 'auth', 'checkrole:admin'])->prefix('admin')->name('admin.')->group(function () {

    // Menggunakan alias AdminMenuController
    Route::resource('menus', AdminMenuController::class);
});
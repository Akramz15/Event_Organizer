<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestStarController;
use App\Models\GuestStar;
use App\Http\Controllers\AdminAuthController;

Route::get('/admin', function () {
    if (!auth()->check()) {
        return redirect()->route('admin.login');
    }
    return redirect()->route('gueststar.index');
});

// Route resource untuk GuestStar dengan prefix 'admin'
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::resource('gueststar', GuestStarController::class);
});

Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

Route::get('/', function () {
    $guestStars = GuestStar::all();
    return view('index', compact('guestStars'));
});
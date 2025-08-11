<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;
use App\Livewire\VpnRequestApproval;
use App\Livewire\Dashboard;
use App\Livewire\EnterEmail;


// Route::get('/', function () {
//     return view('welcome');
// })->name('home');
Route::get('/', function () {
    // dd('Route is working');
    return view('vpn-request');
});


// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');
Route::get('/approvals', VpnRequestApproval::class)->name('approvals');
Route::get('/dashboard', Dashboard::class)->name('dashboard');
Route::get('/enter-email', EnterEmail::class)->name('enter-email');
// Route::middleware(['auth'])->group(function () {
//     Route::get('/dashboard', Dashboard::class)->name('dashboard');
// });

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__ . '/auth.php';

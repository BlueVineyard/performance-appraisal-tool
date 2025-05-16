<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Livewire\Actions\Logout;

Route::get('/', function () {
    if (Auth::check()) {
        return redirect('/supervisor-dashboard');
    }
    return redirect('/login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/supervisor-questionnaire', [PageController::class, 'home'])->name('home');
    Route::get('/supervisor-dashboard', [PageController::class, 'supervisorDashboard'])->name('supervisor.dashboard');
});

Route::get('/about', [PageController::class, 'about'])->name('about');
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [PageController::class, 'login'])->name('login');
    Route::post('/login', [PageController::class, 'authenticate'])->name('login.post');
    Route::get('/password/reset', [PageController::class, 'passwordRequest'])->name('password.request');
    Route::post('/password/email', [PageController::class, 'sendResetLinkEmail'])->name('password.email');
    Route::get('/register', [PageController::class, 'register'])->name('register');
    Route::post('/register', [PageController::class, 'storeUser'])->name('register.post');
});
Route::get('/logout', Logout::class)->name('logout');
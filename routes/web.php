<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Livewire\Actions\Logout;

Route::get('/', function () {
    if (Auth::check()) {
        return redirect('/supervisor-dashboard');
    }
    return redirect('/login');
});

// Dashboard route
Route::get('/dashboard', function () {
    return redirect('/supervisor-dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/supervisor-questionnaire', [PageController::class, 'home'])->name('home');
    Route::get('/supervisor-dashboard', [PageController::class, 'supervisorDashboard'])->name('supervisor.dashboard');

    // Email Verification Routes
    Route::get('/verify-email', function () {
        return view('auth.verify-email');
    })->name('verification.notice');

    Route::get('/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('/email/verification-notification', function (Request $request) {
        $request->user()->sendEmailVerificationNotification();
        return back()->with('status', 'verification-link-sent');
    })->middleware(['throttle:6,1'])->name('verification.send');

    // Password Confirmation
    Route::get('/confirm-password', function () {
        return view('auth.confirm-password');
    })->name('password.confirm');

    // Settings Routes
    Route::prefix('settings')->group(function () {
        Route::get('/profile', function () {
            return view('settings.profile');
        })->name('profile.edit');

        Route::get('/password', function () {
            return view('settings.password');
        })->name('password.edit');
    });
});

Route::get('/about', [PageController::class, 'about'])->name('about');

// Guest Routes
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [PageController::class, 'login'])->name('login');
    Route::post('/login', [PageController::class, 'authenticate'])->name('login.post');

    // Password Reset
    Route::get('/forgot-password', function () {
        return view('auth.forgot-password');
    })->name('password.request');

    Route::post('/password/email', [PageController::class, 'sendResetLinkEmail'])->name('password.email');

    Route::get('/reset-password/{token}', function ($token) {
        return view('auth.reset-password', ['token' => $token]);
    })->name('password.reset');

    Route::post('/reset-password', function (Request $request) {
        // This will be handled by the Livewire component
    })->name('password.update');

    Route::get('/register', [PageController::class, 'register'])->name('register');
    Route::post('/register', [PageController::class, 'storeUser'])->name('register.post');
});

// Logout Route
Route::post('/logout', Logout::class)->name('logout');
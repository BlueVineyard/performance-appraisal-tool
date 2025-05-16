<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use function Livewire\Volt\state;

state(['password' => '']);

$confirmPassword = function () {
    $this->validate([
        'password' => 'required',
    ]);

    if (! Hash::check($this->password, Auth::user()->password)) {
        throw ValidationException::withMessages([
            'password' => __('auth.password'),
        ]);
    }

    session(['auth.password_confirmed_at' => time()]);

    $this->redirect(route('dashboard', absolute: false));
};

?>

<div>
    <div class="mb-4 text-sm text-gray-600">
        This is a secure area of the application. Please confirm your password before continuing.
    </div>

    <form wire:submit="confirmPassword" class="space-y-6">
        <div>
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <div class="mt-1">
                <input wire:model="password" id="password" name="password" type="password"
                    autocomplete="current-password" required
                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            @error('password') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <button type="submit"
                class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Confirm</button>
        </div>
    </form>
</div>
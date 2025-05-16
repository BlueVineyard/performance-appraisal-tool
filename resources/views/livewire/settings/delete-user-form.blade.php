<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use function Livewire\Volt\state;

state(['password' => '']);

$deleteUser = function () {
    $this->validate([
        'password' => ['required', 'string'],
    ]);

    $user = Auth::user();

    if (! Hash::check($this->password, $user->password)) {
        throw ValidationException::withMessages([
            'password' => __('This password does not match our records.'),
        ]);
    }

    Auth::logout();

    User::where('id', $user->id)->delete();

    session()->invalidate();
    session()->regenerateToken();

    $this->redirect('/');
};

?>

<div>
    <header>
        <h2 class="text-lg font-medium text-gray-900">Delete Account</h2>
        <p class="mt-1 text-sm text-gray-600">
            Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting
            your account, please download any data or information that you wish to retain.
        </p>
    </header>

    <form wire:submit="deleteUser" class="mt-6 space-y-6">
        <div>
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <div class="mt-1">
                <input wire:model="password" id="password" name="password" type="password"
                    autocomplete="current-password" required
                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            @error('password') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="flex items-center gap-4">
            <button type="submit"
                class="px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 focus:bg-red-700 active:bg-red-900 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">Delete
                Account</button>
        </div>
    </form>
</div>
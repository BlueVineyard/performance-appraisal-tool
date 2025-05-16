<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use function Livewire\Volt\state;

state([
    'name' => '',
    'email' => '',
    'password' => '',
    'password_confirmation' => '',
]);

$register = function () {
    $validated = $this->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
    ]);

    $user = User::create([
        'name' => $this->name,
        'email' => $this->email,
        'password' => Hash::make($this->password),
    ]);

    Auth::login($user);

    $this->redirect(route('dashboard', absolute: false));
};

?>

<div>
    <form wire:submit="register" class="space-y-6">
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <div class="mt-1">
                <input wire:model="name" id="name" name="name" type="text" autocomplete="name" required
                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <div class="mt-1">
                <input wire:model="email" id="email" name="email" type="email" autocomplete="email" required
                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <div class="mt-1">
                <input wire:model="password" id="password" name="password" type="password" autocomplete="new-password"
                    required
                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            @error('password') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
            <div class="mt-1">
                <input wire:model="password_confirmation" id="password_confirmation" name="password_confirmation"
                    type="password" autocomplete="new-password" required
                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
        </div>

        <div>
            <button type="submit"
                class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Register</button>
        </div>

        <div class="text-center">
            <p class="text-sm text-gray-600">
                Already have an account? <a href="{{ route('login') }}"
                    class="font-medium text-indigo-600 hover:text-indigo-500">Sign in</a>
            </p>
        </div>
    </form>
</div>
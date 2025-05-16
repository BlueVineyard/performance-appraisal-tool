<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password as PasswordRule;
use Illuminate\Validation\ValidationException;
use function Livewire\Volt\state;

state([
    'current_password' => '',
    'password' => '',
    'password_confirmation' => '',
]);

$updatePassword = function () {
    $validated = $this->validate([
        'current_password' => ['required', 'string'],
        'password' => ['required', 'string', 'confirmed', PasswordRule::defaults()],
    ]);

    $user = Auth::user();

    if (! Hash::check($this->current_password, $user->password)) {
        throw ValidationException::withMessages([
            'current_password' => __('The provided password does not match your current password.'),
        ]);
    }

    User::where('id', $user->id)->update([
        'password' => Hash::make($this->password),
    ]);

    $this->current_password = '';
    $this->password = '';
    $this->password_confirmation = '';

    session()->flash('status', 'password-updated');
};

?>

<div>
    <header>
        <h2 class="text-lg font-medium text-gray-900">Update Password</h2>
        <p class="mt-1 text-sm text-gray-600">
            Ensure your account is using a long, random password to stay secure.
        </p>
    </header>

    <form wire:submit="updatePassword" class="mt-6 space-y-6">
        <div>
            <label for="current_password" class="block text-sm font-medium text-gray-700">Current Password</label>
            <div class="mt-1">
                <input wire:model="current_password" id="current_password" name="current_password" type="password"
                    autocomplete="current-password" required
                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            @error('current_password') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="password" class="block text-sm font-medium text-gray-700">New Password</label>
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

        @if (session('status') === 'password-updated')
        <div class="text-sm text-green-600">
            Password updated successfully.
        </div>
        @endif

        <div class="flex items-center gap-4">
            <button type="submit"
                class="px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Save</button>
        </div>
    </form>
</div>
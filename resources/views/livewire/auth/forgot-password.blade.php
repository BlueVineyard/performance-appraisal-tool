<?php

use Illuminate\Support\Facades\Password;
use function Livewire\Volt\state;

state(['email' => '', 'status' => null]);

$sendPasswordResetLink = function () {
    $this->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $this->only('email')
    );

    if ($status === Password::RESET_LINK_SENT) {
        $this->status = __($status);
        $this->email = '';
    } else {
        $this->addError('email', __($status));
    }
};

?>

<div>
    <div class="mb-4 text-sm text-gray-600">
        Forgot your password? No problem. Just let us know your email address and we will email you a password reset
        link that will allow you to choose a new one.
    </div>

    @if ($status)
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ $status }}
    </div>
    @endif

    <form wire:submit="sendPasswordResetLink" class="space-y-6">
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <div class="mt-1">
                <input wire:model="email" id="email" name="email" type="email" autocomplete="email" required
                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <button type="submit"
                class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Email
                Password Reset Link</button>
        </div>

        <div class="text-center">
            <a href="{{ route('login') }}" class="font-medium text-indigo-600 hover:text-indigo-500">Back to login</a>
        </div>
    </form>
</div>
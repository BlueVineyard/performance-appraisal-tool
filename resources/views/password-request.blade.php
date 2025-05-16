<x-layouts.auth.card>
    <div class="flex flex-col space-y-6">
        <div class="flex flex-col space-y-2 text-center">
            <h1 class="text-3xl font-semibold leading-[120%] tracking-normal font-dm-sans text-black">Forgot your
                password?</h1>
            <p class="text-sm text-muted-foreground">
                No problem. Just let us know your email address and we will email you a password reset link that will
                allow you to choose a new one.
            </p>
        </div>

        <div class="grid gap-6">
            <form method="POST" action="{{ route('password.email') }}" class="space-y-4">
                @csrf

                <div class="space-y-2">
                    <label for="email" class="text-base font-semibold leading-[130%] font-dm-sans block">Email</label>
                    <input type="email" id="email" name="email"
                        class="bg-[#F3F3F6] w-full px-6 py-4 text-sm font-dm-sans leading-[160%] rounded-2xl outline-0"
                        placeholder="name@example.com" required autofocus />
                </div>

                <button type="submit"
                    class="w-full bg-primary py-[18.5px] text-base font-semibold leading-[130%] font-dm-sans rounded-2xl text-white cursor-pointer">
                    Email Password Reset Link
                </button>
            </form>

            <div class="text-center">
                <a href="{{ route('login') }}"
                    class="font-semibold font-dm-sans text-primary underline-offset-4 hover:underline">Back to
                    login</a>
            </div>
        </div>
    </div>
</x-layouts.auth.card>
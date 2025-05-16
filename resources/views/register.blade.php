<x-layouts.auth.split>
    <div class="flex flex-col space-y-6">
        <h1 class="text-3xl font-semibold leading-[120%] tracking-normal font-dm-sans text-black">Create an account</h1>

        <div class="grid gap-6">
            <form method="POST" action="{{ route('register') }}" class="space-y-4">
                @csrf

                <div class="space-y-2">
                    <label for="name" class="text-base font-semibold leading-[130%] font-dm-sans block">Name</label>
                    <input type="text" id="name" name="name"
                        class="bg-[#F3F3F6] w-full px-6 py-4 text-sm font-dm-sans leading-[160%] rounded-2xl outline-0"
                        required autofocus />
                </div>

                <div class="space-y-2">
                    <label for="email" class="text-base font-semibold leading-[130%] font-dm-sans block">Email</label>
                    <input type="email" id="email" name="email"
                        class="bg-[#F3F3F6] w-full px-6 py-4 text-sm font-dm-sans leading-[160%] rounded-2xl outline-0"
                        placeholder="name@example.com" required />
                </div>

                <div class="space-y-2">
                    <label for="password"
                        class="text-base font-semibold leading-[130%] font-dm-sans block">Password</label>
                    <input type="password" id="password" name="password"
                        class="bg-[#F3F3F6] w-full px-6 py-4 text-sm font-dm-sans leading-[160%] rounded-2xl outline-0"
                        required />
                </div>

                <div class="space-y-2">
                    <label for="password_confirmation"
                        class="text-base font-semibold leading-[130%] font-dm-sans block">Confirm
                        Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation"
                        class="bg-[#F3F3F6] w-full px-6 py-4 text-sm font-dm-sans leading-[160%] rounded-2xl outline-0"
                        required />
                </div>

                <button type="submit"
                    class="w-full bg-primary py-[18.5px] text-base font-semibold leading-[130%] font-dm-sans rounded-2xl text-white cursor-pointer">
                    Register
                </button>
            </form>

            <div class="relative">
                <div class="absolute inset-0 flex items-center">
                    <span class="w-full border-t"></span>
                </div>
                <div class="relative flex justify-center">
                    <span
                        class="bg-background px-4 text-muted-foreground bg-white font-dm-sans text-sm font-normal leading-[160%]">or
                        using</span>
                </div>
            </div>

            <div class="grid gap-4">
                <button
                    class="w-full flex items-center gap-3 px-5 py-4 border border-[#E2E4EA] rounded-2xl cursor-pointer text-base font-semibold leading-[130%] font-dm-sans">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_704_1600)">
                            <path d="M12.5625 11.4375H21V3.5625C21 3.252 20.748 3 20.4375 3H12.5625V11.4375Z"
                                fill="#4CAF50" />
                            <path d="M11.4375 11.4375V3H3.5625C3.252 3 3 3.252 3 3.5625V11.4375H11.4375Z"
                                fill="#F44336" />
                            <path d="M11.4375 12.5625H3V20.4375C3 20.748 3.252 21 3.5625 21H11.4375V12.5625Z"
                                fill="#2196F3" />
                            <path d="M12.5625 12.5625V21H20.4375C20.748 21 21 20.748 21 20.4375V12.5625H12.5625Z"
                                fill="#FFC107" />
                        </g>
                        <defs>
                            <clipPath id="clip0_704_1600">
                                <rect width="18" height="18" fill="white" transform="translate(3 3)" />
                            </clipPath>
                        </defs>
                    </svg>
                    <span>Continue with Microsoft Account</span>
                </button>
                <button
                    class="w-full flex items-center gap-3 px-5 py-4 border border-[#E2E4EA] rounded-2xl cursor-pointer text-base font-semibold leading-[130%] font-dm-sans">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M6.98916 13.876L6.36261 16.215L4.07258 16.2634C3.38819 14.9941 3 13.5417 3 11.9984C3 10.506 3.36295 9.09859 4.00631 7.85938H4.0068L6.04557 8.23315L6.93868 10.2597C6.75175 10.8046 6.64987 11.3896 6.64987 11.9984C6.64994 12.659 6.76961 13.292 6.98916 13.876Z"
                            fill="#FFD400" />
                        <path
                            d="M20.8431 10.3203C20.9465 10.8647 21.0003 11.427 21.0003 12.0016C21.0003 12.646 20.9326 13.2745 20.8035 13.8807C20.3654 15.9438 19.2206 17.7453 17.6348 19.0201L17.6343 19.0196L15.0663 18.8886L14.7029 16.6198C15.7552 16.0027 16.5776 15.0369 17.0108 13.8807H12.1982V10.3203H17.081H20.8431Z"
                            fill="#518EF8" />
                        <path
                            d="M17.6335 19.0193L17.634 19.0197C16.0917 20.2595 14.1324 21.0012 11.9996 21.0012C8.57225 21.0012 5.59238 19.0855 4.07227 16.2664L6.98885 13.8789C7.74889 15.9073 9.70564 17.3513 11.9996 17.3513C12.9857 17.3513 13.9094 17.0848 14.7021 16.6194L17.6335 19.0193Z"
                            fill="#28B446" />
                        <path
                            d="M17.7442 5.07196L14.8286 7.45892C14.0082 6.94613 13.0384 6.64991 11.9995 6.64991C9.65358 6.64991 7.66023 8.16011 6.93826 10.2613L4.00635 7.86096H4.00586C5.50372 4.97307 8.52117 3 11.9995 3C14.1832 3 16.1855 3.77786 17.7442 5.07196Z"
                            fill="#F14336" />
                    </svg>

                    <span>Continue with Google</span>
                </button>
            </div>

            <div class="text-center text-sm">
                Already have an account?
                <a href="{{ route('login') }}" class="font-semibold font-dm-sans">Login</a>
            </div>
        </div>
    </div>
</x-layouts.auth.split>
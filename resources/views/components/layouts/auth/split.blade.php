<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.head')
</head>

<body class="min-h-screen bg-white">
    <header class="px-6 py-2.5 flex items-center justify-between gap-5 border-b border-b-[#E4E6E9]">
        <a class="logo">
            <img src="{{ asset('images/logo.svg') }}" alt="Logo">
        </a>

        <div class="actions flex items-center gap-4">
            <a href="/login"
                class="py-2 px-4 font-geist text-sm font-semibold leading-6 -tracking-[1%] block w-fit rounded-lg text-black">Sign
                In</a>
            <a href="/register"
                class="bg-primary py-2 px-4 font-geist text-sm font-semibold leading-6 -tracking-[1%] block w-fit rounded-lg text-white">Sign
                Up</a>
        </div>
    </header>

    <div class="relative flex flex-col-reverse lg:flex-row lg:min-h-[calc(100vh-61px)] items-stretch">
        <div class="w-full max-w-[637px] mx-auto p-6 lg:p-8">
            <div class="mx-auto flex w-full flex-col justify-center lg:max-w-[477px]">
                {{ $slot }}
            </div>
        </div>

        <div class="relative w-full lg:max-w-[calc(100%-637px)]">
            <img src="{{ asset('images/login.webp') }}" alt="Login BG" class="w-full h-full object-cover">
        </div>
    </div>
    @fluxScripts
</body>

</html>
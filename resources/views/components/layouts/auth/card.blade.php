<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.head')
</head>

<body class="min-h-screen bg-neutral-100 antialiased dark:bg-linear-to-b dark:from-neutral-950 dark:to-neutral-900">
    <img src="{{ asset('images/login.webp') }}" alt="Login BG"
        class="w-full h-full object-cover fixed top-0 left-0 -z-10">
    <div class="bg-muted flex min-h-svh flex-col items-center justify-center gap-6 p-6 md:p-10">
        <div class="px-10 py-8 rounded-xl border bg-white max-w-md">{{ $slot }}</div>
    </div>
    @fluxScripts
</body>

</html>
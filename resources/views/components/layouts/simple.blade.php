<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? config('app.name') }}</title>
    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-[#F3F5F7]">
    <header
        class="flex items-center justify-between px-4 sm:px-6 py-3 bg-white border-b border-b-border-2 relative z-10">
        <div class="logo">
            <a href="/">
                <img src="https://bluevineyard.github.io/performance-appraisal-tool-HTML/assets/images/logo.svg"
                    alt="Adventist Schools NNSW" class="max-h-8 sm:max-h-none" />
            </a>
        </div>

        <div class="nav_actions flex items-center gap-2 sm:gap-4">
            <div class="notifications-icon border rounded-full p-1.5 sm:p-2 border-border-1 cursor-pointer">
                <img src="https://bluevineyard.github.io/performance-appraisal-tool-HTML/assets/icons/bell.svg"
                    alt="Notifications" class="w-4 h-4 sm:w-auto sm:h-auto" />
            </div>
            <div class="user relative cursor-pointer">
                <img src="https://bluevineyard.github.io/performance-appraisal-tool-HTML/assets/images/user.png"
                    alt="Username" class="w-8 h-8 sm:w-auto sm:h-auto rounded-full" />
                <img src="https://bluevineyard.github.io/performance-appraisal-tool-HTML/assets/icons/arrow-down.svg"
                    alt="More"
                    class="user-dropdown bg-[#0D5CAB] w-3 h-3 sm:w-4 sm:h-4 block border border-white rounded-full absolute right-[-2px] sm:right-[-4px] bottom-0" />
            </div>
        </div>
    </header>

    <main>
        {{ $slot }}
    </main>



    <x-appraisal.confirmation_modal>

    </x-appraisal.confirmation_modal>
</body>

</html>
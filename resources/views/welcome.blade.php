<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">

    <div class="relative flex justify-center items-center h-screen isolate overflow-hidden bg-gray-900">
        <div class="px-6 py-24 sm:px-6 sm:py-32 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <img src="{{ asset('smstmfp.svg') }}" class="w-32 animate-bounce h-auto mx-auto my-6">
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Hello, Farisian.<br>Register your
                    iPad here.</h2>
                <p class="mx-auto mt-6 max-w-xl text-lg leading-8 text-gray-300">
                    {{-- SM Sains Tengku Muhammad Faris Petra --}}
                </p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    @if (auth()->check())
                        <a href="{{ route('student.dashboard') }}"
                            class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}"
                            class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Login</a>
                        <a href="{{ route('register') }}"
                            class="text-sm font-semibold leading-6 text-white">Register<span
                                aria-hidden="true">→</span></a>
                    @endif
                </div>
            </div>
        </div>
        <svg viewBox="0 0 1024 1024"
            class="absolute left-1/2 top-1/2 -z-10 h-[64rem] w-[64rem] -translate-x-1/2 [mask-image:radial-gradient(closest-side,white,transparent)]"
            aria-hidden="true">
            <circle cx="512" cy="512" r="512" fill="url(#8d958450-c69f-4251-94bc-4e091a323369)"
                fill-opacity="0.7" />
            <defs>
                <radialGradient id="8d958450-c69f-4251-94bc-4e091a323369">
                    <stop stop-color="#7775D6" />
                    <stop offset="1" stop-color="#E935C1" />
                </radialGradient>
            </defs>
        </svg>
    </div>
</body>

</html>

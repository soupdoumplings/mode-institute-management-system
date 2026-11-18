@props(['title' => 'Home'])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }} | Atelier Institute</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="editorial-page min-h-screen font-sans text-[#211e1e] antialiased">
    <x-navbar />
    <main class="mx-auto w-full max-w-7xl px-6 py-10 lg:px-10 lg:py-14">
        <x-alert />
        {{ $slot }}
    </main>
    <x-footer />
</body>
</html>

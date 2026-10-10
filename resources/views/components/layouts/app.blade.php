<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title ?? 'Atelier Institute' }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="editorial-page min-h-screen font-sans text-[#211e1e] antialiased">
        <header class="border-b border-black/10 bg-white/70 backdrop-blur-md">
            <div class="mx-auto flex max-w-7xl items-center justify-between gap-6 px-6 py-5 lg:px-10">
                <a href="{{ route('students.index') }}" class="font-serif text-3xl font-black uppercase tracking-[-0.1em] sm:text-4xl">
                    Mode
                </a>
                <nav class="flex items-center gap-5 text-[0.65rem] font-bold uppercase tracking-[0.18em] sm:gap-8 sm:text-xs">
                    <a href="{{ route('students.index') }}" @class(['border-b border-black pb-1' => request()->routeIs('students.*')])>Students</a>
                    <a href="{{ route('courses.index') }}" @class(['border-b border-black pb-1' => request()->routeIs('courses.*')])>Courses</a>
                </nav>
            </div>
        </header>

        <main class="mx-auto max-w-7xl px-6 py-10 lg:px-10 lg:py-14">
            @if (session('success'))
                <div class="mb-8 border border-[#6b263d] bg-[#ead5d9] px-5 py-4 text-sm font-medium text-[#491528]" role="status">
                    {{ session('success') }}
                </div>
            @endif

            {{ $slot }}
        </main>

        <footer class="border-t border-black/10 px-6 py-6 text-center text-[0.62rem] font-semibold uppercase tracking-[0.2em] text-black/55">
            Atelier Institute · Education with distinction
        </footer>
    </body>
</html>

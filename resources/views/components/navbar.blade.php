<header class="border-b border-black/10 bg-white/70 backdrop-blur-md">
    <div class="mx-auto flex max-w-7xl items-center justify-between gap-6 px-6 py-5 lg:px-10">
        <a href="{{ route('home') }}" class="font-serif text-3xl font-black uppercase tracking-[-0.1em] sm:text-4xl">Mode</a>
        <nav class="flex items-center gap-5 text-[0.65rem] font-bold uppercase tracking-[0.18em] sm:gap-8 sm:text-xs">
            <a href="{{ route('students.index') }}" @class(['border-b border-black pb-1' => request()->routeIs('students.*')])>Students</a>
            <a href="{{ route('courses.index') }}" @class(['border-b border-black pb-1' => request()->routeIs('courses.*')])>Courses</a>
        </nav>
    </div>
</header>

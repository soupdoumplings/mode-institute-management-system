<x-layouts.app title="Courses · Atelier Institute">
    <x-page-heading
        eyebrow="The course edit"
        title="Courses"
        description="A considered catalogue of learning experiences—each one built to move a career forward."
        action-label="Add course"
        :action-url="route('courses.create')"
    />

    <div class="grid gap-5 md:grid-cols-2 xl:grid-cols-3">
        @forelse ($courses as $course)
            <article class="student-card group flex min-h-72 flex-col justify-between p-6">
                <div class="flex items-start justify-between gap-4">
                    <span @class([
                        'course-tag',
                        'bg-[#d8e7d9] text-[#24533a]' => $course->difficulty === 'Easy',
                        'bg-[#e9ddbb] text-[#69551b]' => $course->difficulty === 'Medium',
                        'bg-[#ead5d9] text-[#6b263d]' => $course->difficulty === 'Hard',
                    ])>{{ $course->difficulty }}</span>
                    <a href="{{ route('courses.show', $course) }}" class="text-[0.62rem] font-bold uppercase tracking-[0.16em] underline underline-offset-4" aria-label="View {{ $course->name }}">View course</a>
                </div>
                <div>
                    <h2 class="font-serif text-3xl leading-[0.95] tracking-[-0.04em]">{{ $course->name }}</h2>
                    <p class="mt-3 line-clamp-2 text-sm leading-6 text-black/60">{{ $course->description }}</p>
                    <div class="mt-5 flex items-center justify-between border-t border-black/15 pt-4 text-[0.65rem] font-bold uppercase tracking-[0.14em] text-black/55">
                        <span>{{ $course->duration }} weeks</span>
                        <span>{{ number_format((float) $course->fee, 2) }}</span>
                    </div>
                </div>
            </article>
        @empty
            <div class="col-span-full bg-[#f8f6f1] px-6 py-20 text-center">
                <p class="font-serif text-3xl tracking-[-0.04em]">The course edit is waiting for its opening story.</p>
                <a href="{{ route('courses.create') }}" class="mt-5 inline-block border-b border-black text-xs font-bold uppercase tracking-[0.16em]">Add a course</a>
            </div>
        @endforelse
    </div>

    @if ($courses->hasPages())
        <div class="mt-8">{{ $courses->links() }}</div>
    @endif
</x-layouts.app>

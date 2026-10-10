<x-layouts.app title="{{ $course->name }} · Atelier Institute">
    <section class="border-b border-black pb-8">
        <div class="flex items-center justify-between gap-6">
            <p class="text-[0.65rem] font-bold uppercase tracking-[0.24em] text-[#8d2445]">Course profile</p>
            <span @class([
                'course-tag',
                'bg-[#d8e7d9] text-[#24533a]' => $course->difficulty === 'Easy',
                'bg-[#e9ddbb] text-[#69551b]' => $course->difficulty === 'Medium',
                'bg-[#ead5d9] text-[#6b263d]' => $course->difficulty === 'Hard',
            ])>{{ $course->difficulty }}</span>
        </div>
        <div class="mt-5 flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
            <h1 class="max-w-4xl font-serif text-6xl leading-[0.82] tracking-[-0.07em] sm:text-8xl">{{ $course->name }}</h1>
            <a href="{{ route('courses.edit', $course) }}" class="inline-flex w-fit items-center bg-[#171717] px-5 py-3 text-xs font-bold uppercase tracking-[0.16em] text-white transition hover:bg-[#8d2445]">Edit course</a>
        </div>
    </section>

    <div class="grid gap-10 py-10 lg:grid-cols-[1.5fr_1fr]">
        <p class="max-w-2xl font-serif text-3xl leading-tight tracking-[-0.035em]">{{ $course->description }}</p>
        <dl class="border-l border-t border-black/15">
            <div class="detail-cell"><dt>Duration</dt><dd>{{ $course->duration }} weeks</dd></div>
            <div class="detail-cell"><dt>Fee</dt><dd>{{ number_format((float) $course->fee, 2) }}</dd></div>
            <div class="detail-cell"><dt>Status</dt><dd>{{ $course->is_active ? 'Currently active' : 'Archived' }}</dd></div>
        </dl>
    </div>

    <div class="flex items-center justify-between gap-6 border-t border-black/15 pt-8">
        <a href="{{ route('courses.index') }}" class="text-xs font-bold uppercase tracking-[0.16em] underline underline-offset-4">All courses</a>
        <form action="{{ route('courses.destroy', $course) }}" method="POST" onsubmit="return confirm('Remove this course from the catalogue?')">
            @csrf
            @method('DELETE')
            <button class="text-xs font-bold uppercase tracking-[0.16em] text-[#8d2445] underline underline-offset-4" type="submit">Remove course</button>
        </form>
    </div>
</x-layouts.app>

<x-layouts.app title="Students · Atelier Institute">
    <x-page-heading
        eyebrow="The register"
        title="Students"
        description="The people shaping the next chapter. Keep every profile considered, current and easy to find."
        action-label="Add student"
        :action-url="route('students.create')"
    />

    <div class="grid gap-5 md:grid-cols-2 xl:grid-cols-4">
        @forelse ($students as $student)
            <article class="student-card group flex min-h-72 flex-col justify-between p-6">
                <div class="flex items-start justify-between gap-4">
                    <span class="text-xs font-bold tracking-[0.16em] text-[#8d2445]">{{ str_pad((string) $student->id, 3, '0', STR_PAD_LEFT) }}</span>
                    <a href="{{ route('students.show', $student) }}" class="text-[0.62rem] font-bold uppercase tracking-[0.16em] underline underline-offset-4" aria-label="View {{ $student->name }}">View profile</a>
                </div>
                <div>
                    <h2 class="font-serif text-3xl leading-none tracking-[-0.04em]">{{ $student->name }}</h2>
                    <p class="mt-3 truncate text-sm text-black/60">{{ $student->email }}</p>
                    <p class="mt-1 text-xs font-semibold uppercase tracking-[0.12em] text-black/45">{{ $student->phone }}</p>
                </div>
            </article>
        @empty
            <div class="col-span-full bg-[#f8f6f1] px-6 py-20 text-center">
                <p class="font-serif text-3xl tracking-[-0.04em]">The register is ready for its first profile.</p>
                <a href="{{ route('students.create') }}" class="mt-5 inline-block border-b border-black text-xs font-bold uppercase tracking-[0.16em]">Add a student</a>
            </div>
        @endforelse
    </div>

    @if ($students->hasPages())
        <div class="mt-8">{{ $students->links() }}</div>
    @endif
</x-layouts.app>

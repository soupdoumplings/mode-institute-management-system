<x-layouts.app title="{{ $student->name }} · Atelier Institute">
    <section class="border-b border-black pb-8">
        <p class="text-[0.65rem] font-bold uppercase tracking-[0.24em] text-[#8d2445]">Student profile · {{ str_pad((string) $student->id, 3, '0', STR_PAD_LEFT) }}</p>
        <div class="mt-5 flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
            <h1 class="font-serif text-6xl leading-[0.82] tracking-[-0.07em] sm:text-8xl">{{ $student->name }}</h1>
            <a href="{{ route('students.edit', $student) }}" class="inline-flex w-fit items-center bg-[#171717] px-5 py-3 text-xs font-bold uppercase tracking-[0.16em] text-white transition hover:bg-[#8d2445]">Edit profile</a>
        </div>
    </section>

    <dl class="grid border-l border-t border-black/15 md:grid-cols-2 lg:grid-cols-3">
        <div class="detail-cell"><dt>Email</dt><dd>{{ $student->email }}</dd></div>
        <div class="detail-cell"><dt>Phone</dt><dd>{{ $student->phone }}</dd></div>
        <div class="detail-cell"><dt>Date of birth</dt><dd>{{ $student->date_of_birth?->format('F j, Y') ?? 'Not recorded' }}</dd></div>
        <div class="detail-cell md:col-span-2 lg:col-span-3"><dt>Address</dt><dd class="whitespace-pre-line">{{ $student->address ?? 'Not recorded' }}</dd></div>
    </dl>

    <div class="mt-8 flex items-center justify-between gap-6">
        <a href="{{ route('students.index') }}" class="text-xs font-bold uppercase tracking-[0.16em] underline underline-offset-4">All students</a>
        <form action="{{ route('students.destroy', $student) }}" method="POST" onsubmit="return confirm('Remove this student from the register?')">
            @csrf
            @method('DELETE')
            <button class="text-xs font-bold uppercase tracking-[0.16em] text-[#8d2445] underline underline-offset-4" type="submit">Remove profile</button>
        </form>
    </div>
</x-layouts.app>

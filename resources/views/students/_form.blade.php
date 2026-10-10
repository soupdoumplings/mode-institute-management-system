<x-errors />

<div class="grid gap-6 md:grid-cols-2">
    <label class="block">
        <span class="field-label">Full name</span>
        <input class="field-input" type="text" name="name" value="{{ old('name', $student->name ?? '') }}" required autofocus>
    </label>
    <label class="block">
        <span class="field-label">Email address</span>
        <input class="field-input" type="email" name="email" value="{{ old('email', $student->email ?? '') }}" required>
    </label>
    <label class="block">
        <span class="field-label">Phone</span>
        <input class="field-input" type="text" name="phone" value="{{ old('phone', $student->phone ?? '') }}" required>
    </label>
    <label class="block">
        <span class="field-label">Date of birth</span>
        <input class="field-input" type="date" name="date_of_birth" value="{{ old('date_of_birth', isset($student) && $student->date_of_birth ? $student->date_of_birth->format('Y-m-d') : '') }}">
    </label>
    <label class="block md:col-span-2">
        <span class="field-label">Address <span class="normal-case tracking-normal text-black/45">(optional)</span></span>
        <textarea class="field-input min-h-28" name="address" rows="4">{{ old('address', $student->address ?? '') }}</textarea>
    </label>
</div>

<div class="mt-8 flex flex-wrap items-center gap-5">
    <button class="bg-[#171717] px-6 py-3 text-xs font-bold uppercase tracking-[0.16em] text-white transition hover:bg-[#8d2445]" type="submit">{{ $submitLabel }}</button>
    <a href="{{ route('students.index') }}" class="text-xs font-bold uppercase tracking-[0.16em] underline underline-offset-4">Cancel</a>
</div>

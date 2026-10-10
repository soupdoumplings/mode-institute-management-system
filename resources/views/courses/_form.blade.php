<x-errors />

<div class="grid gap-6 md:grid-cols-2">
    <label class="block md:col-span-2">
        <span class="field-label">Course name</span>
        <input class="field-input" type="text" name="name" value="{{ old('name', $course->name ?? '') }}" required autofocus>
    </label>
    <label class="block md:col-span-2">
        <span class="field-label">Description</span>
        <textarea class="field-input min-h-32" name="description" rows="5" required>{{ old('description', $course->description ?? '') }}</textarea>
    </label>
    <label class="block">
        <span class="field-label">Duration in weeks</span>
        <input class="field-input" type="number" name="duration" min="1" max="260" value="{{ old('duration', $course->duration ?? '') }}" required>
    </label>
    <label class="block">
        <span class="field-label">Fee</span>
        <input class="field-input" type="number" name="fee" min="0" step="0.01" value="{{ old('fee', $course->fee ?? '') }}" required>
    </label>
    <label class="block">
        <span class="field-label">Difficulty</span>
        <select class="field-input" name="difficulty" required>
            @foreach (['Easy', 'Medium', 'Hard'] as $difficulty)
                <option value="{{ $difficulty }}" @selected(old('difficulty', $course->difficulty ?? 'Medium') === $difficulty)>{{ $difficulty }}</option>
            @endforeach
        </select>
    </label>
    <div class="flex items-end pb-3">
        <input type="hidden" name="is_active" value="0">
        <label class="flex cursor-pointer items-center gap-3 text-sm font-semibold">
            <input class="h-4 w-4 accent-[#8d2445]" type="checkbox" name="is_active" value="1" @checked(old('is_active', $course->is_active ?? true))>
            This course is currently active
        </label>
    </div>
</div>

<div class="mt-8 flex flex-wrap items-center gap-5">
    <button class="bg-[#171717] px-6 py-3 text-xs font-bold uppercase tracking-[0.16em] text-white transition hover:bg-[#8d2445]" type="submit">{{ $submitLabel }}</button>
    <a href="{{ route('courses.index') }}" class="text-xs font-bold uppercase tracking-[0.16em] underline underline-offset-4">Cancel</a>
</div>

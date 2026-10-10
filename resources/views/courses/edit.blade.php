<x-layouts.app title="Edit {{ $course->name }} · Atelier Institute">
    <x-page-heading eyebrow="Course edit" title="{{ $course->name }}" description="Refine the offering and keep the catalogue current." />
    <form action="{{ route('courses.update', $course) }}" method="POST" class="max-w-3xl">
        @csrf
        @method('PUT')
        @include('courses._form', ['submitLabel' => 'Save changes'])
    </form>
</x-layouts.app>

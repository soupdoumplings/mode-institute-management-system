<x-layouts.app title="Add course · Atelier Institute">
    <x-page-heading eyebrow="New course" title="Set the syllabus" description="Add a new learning experience to the institute's course edit." />
    <form action="{{ route('courses.store') }}" method="POST" class="max-w-3xl">
        @csrf
        @include('courses._form', ['submitLabel' => 'Create course'])
    </form>
</x-layouts.app>

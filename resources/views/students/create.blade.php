<x-layouts.app title="Add student · Atelier Institute">
    <x-page-heading eyebrow="New profile" title="A fresh face" description="Add a student to the institute register. The details can always be refined later." />
    <form action="{{ route('students.store') }}" method="POST" class="max-w-3xl">
        @csrf
        @include('students._form', ['submitLabel' => 'Create student'])
    </form>
</x-layouts.app>

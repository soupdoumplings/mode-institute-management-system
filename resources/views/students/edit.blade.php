<x-layouts.app title="Edit {{ $student->name }} · Atelier Institute">
    <x-page-heading eyebrow="Profile edit" title="{{ $student->name }}" description="Keep the register in impeccable order." />
    <form action="{{ route('students.update', $student) }}" method="POST" class="max-w-3xl">
        @csrf
        @method('PUT')
        @include('students._form', ['submitLabel' => 'Save changes'])
    </form>
</x-layouts.app>

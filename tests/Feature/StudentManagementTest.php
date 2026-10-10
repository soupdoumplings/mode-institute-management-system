<?php

use App\Models\Student;

describe('student management', function () {
    it('renders the student register', function () {
        $student = Student::factory()->create(['name' => 'Maya Sherpa']);

        $this->get(route('students.index'))
            ->assertSee('Students')
            ->assertSee($student->name);
    });

    it('creates a student with valid details', function () {
        $payload = [
            'name' => 'Maya Sherpa',
            'email' => 'maya@example.test',
            'phone' => '+977 9800000000',
            'address' => 'Kathmandu',
            'date_of_birth' => '2002-03-14',
        ];

        $this->post(route('students.store'), $payload)
            ->assertRedirect();

        $this->assertDatabaseHas('students', [
            'name' => 'Maya Sherpa',
            'email' => 'maya@example.test',
        ]);
    });

    it('rejects a student without required details', function () {
        $this->from(route('students.create'))
            ->post(route('students.store'), [])
            ->assertRedirect(route('students.create'))
            ->assertSessionHasErrors(['name', 'email', 'phone']);

        $this->assertDatabaseCount('students', 0);
    });
});

<?php

use App\Models\Course;

describe('course management', function () {
    it('renders the course edit', function () {
        $course = Course::factory()->create(['name' => 'Editorial Direction']);

        $this->get(route('courses.index'))
            ->assertSee('Courses')
            ->assertSee($course->name);
    });

    it('creates an active course with valid details', function () {
        $payload = [
            'name' => 'Creative Coding',
            'description' => 'An introduction to expressive interfaces.',
            'duration' => 12,
            'fee' => 1250.00,
            'difficulty' => 'Medium',
            'is_active' => true,
        ];

        $this->post(route('courses.store'), $payload)
            ->assertRedirect();

        $this->assertDatabaseHas('courses', [
            'name' => 'Creative Coding',
            'difficulty' => 'Medium',
            'is_active' => true,
        ]);
    });

    it('rejects an unsupported course difficulty', function () {
        $this->from(route('courses.create'))
            ->post(route('courses.store'), [
                'name' => 'Creative Coding',
                'description' => 'An introduction to expressive interfaces.',
                'duration' => 12,
                'fee' => 1250.00,
                'difficulty' => 'Advanced',
                'is_active' => true,
            ])
            ->assertRedirect(route('courses.create'))
            ->assertSessionHasErrors(['difficulty']);

        $this->assertDatabaseCount('courses', 0);
    });
});

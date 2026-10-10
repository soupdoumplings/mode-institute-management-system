<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Seed the course edit with playful, fictional workshop offerings.
     */
    public function run(): void
    {
        $courses = [
            [
                'name' => 'Aerospace for Aakash Bro',
                'description' => 'Rocket sketches, orbital plans, and a practical guide to saying "this will definitely fly" with confidence.',
                'duration' => 12,
                'fee' => 2400.00,
                'difficulty' => 'Hard',
                'is_active' => true,
            ],
            [
                'name' => 'Brainrot Media Studies',
                'description' => 'A serious-not-serious reading of internet trends, meme archaeology, and the art of making nonsense memorable.',
                'duration' => 6,
                'fee' => 850.00,
                'difficulty' => 'Medium',
                'is_active' => true,
            ],
            [
                'name' => 'Rajnitik Chiya and Debate',
                'description' => 'Make a strong cup of chiya, map an argument, and survive the family group chat with your logic intact.',
                'duration' => 8,
                'fee' => 1100.00,
                'difficulty' => 'Medium',
                'is_active' => true,
            ],
            [
                'name' => 'Krusty Krab Burger Systems',
                'description' => 'Kitchen timing, burger architecture, customer service, and keeping the secret sauce secret.',
                'duration' => 4,
                'fee' => 650.00,
                'difficulty' => 'Easy',
                'is_active' => true,
            ],
            [
                'name' => 'Tung Tung Sahur Sound Design',
                'description' => 'Build recognisable hooks, dramatic drops, and sound effects that announce themselves before breakfast.',
                'duration' => 5,
                'fee' => 790.00,
                'difficulty' => 'Easy',
                'is_active' => true,
            ],
            [
                'name' => 'Momo Economics 101',
                'description' => 'Margins, markets, and the difficult decision of whether to add one more momo to the plate.',
                'duration' => 7,
                'fee' => 900.00,
                'difficulty' => 'Easy',
                'is_active' => true,
            ],
            [
                'name' => 'Kale Dai Brand Strategy',
                'description' => 'Create a name, own the room, and build a personal brand with local confidence and global ambition.',
                'duration' => 10,
                'fee' => 1800.00,
                'difficulty' => 'Hard',
                'is_active' => true,
            ],
            [
                'name' => 'Chiya Break Product Design',
                'description' => 'Turn five minutes at the tea stall into research, prototyping, and the next big idea.',
                'duration' => 6,
                'fee' => 950.00,
                'difficulty' => 'Medium',
                'is_active' => false,
            ],
        ];

        foreach ($courses as $course) {
            Course::query()->updateOrCreate(
                ['name' => $course['name']],
                $course,
            );
        }
    }
}

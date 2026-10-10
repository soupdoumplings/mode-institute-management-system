<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Seed the register with the institute's featured characters.
     */
    public function run(): void
    {
        $students = [
            ['name' => 'Kale Dai', 'email' => 'kale.dai@mode.test', 'phone' => '+977 9800000101', 'address' => 'Thamel, Kathmandu', 'date_of_birth' => '2001-04-12'],
            ['name' => 'Tung Tung Sahur', 'email' => 'tung.sahur@mode.test', 'phone' => '+977 9800000102', 'address' => 'Boudha, Kathmandu', 'date_of_birth' => '2002-07-03'],
            ['name' => 'Biryani Babu', 'email' => 'biryani.babu@mode.test', 'phone' => '+977 9800000103', 'address' => 'Baneshwor, Kathmandu', 'date_of_birth' => '2000-11-20'],
            ['name' => 'Chiya Queen', 'email' => 'chiya.queen@mode.test', 'phone' => '+977 9800000104', 'address' => 'Patan, Lalitpur', 'date_of_birth' => '2003-02-18'],
            ['name' => 'Aakash Bro', 'email' => 'aakash.bro@mode.test', 'phone' => '+977 9800000105', 'address' => 'Bhaktapur', 'date_of_birth' => '2001-08-29'],
            ['name' => 'Sajilo Sir', 'email' => 'sajilo.sir@mode.test', 'phone' => '+977 9800000106', 'address' => 'Kirtipur, Kathmandu', 'date_of_birth' => '1999-01-15'],
            ['name' => 'Momo Maharani', 'email' => 'momo.maharani@mode.test', 'phone' => '+977 9800000107', 'address' => 'Pokhara, Kaski', 'date_of_birth' => '2002-05-25'],
            ['name' => 'Sigma Shrestha', 'email' => 'sigma.shrestha@mode.test', 'phone' => '+977 9800000108', 'address' => 'Dharan, Sunsari', 'date_of_birth' => '2000-09-09'],
            ['name' => 'Laphing Legend', 'email' => 'laphing.legend@mode.test', 'phone' => '+977 9800000109', 'address' => 'Kalanki, Kathmandu', 'date_of_birth' => '2001-12-01'],
            ['name' => 'Guff Guru', 'email' => 'guff.guru@mode.test', 'phone' => '+977 9800000110', 'address' => 'Chitwan', 'date_of_birth' => '1998-06-14'],
            ['name' => 'Jhilke Jire', 'email' => 'jhilke.jire@mode.test', 'phone' => '+977 9800000111', 'address' => 'Butwal, Rupandehi', 'date_of_birth' => '2003-03-07'],
            ['name' => 'Buba Ko Favourite', 'email' => 'buba.favourite@mode.test', 'phone' => '+977 9800000112', 'address' => 'Maitidevi, Kathmandu', 'date_of_birth' => '2000-10-30'],
        ];

        foreach ($students as $student) {
            Student::query()->updateOrCreate(
                ['email' => $student['email']],
                $student,
            );
        }
    }
}

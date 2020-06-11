<?php

use App\Course;
use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::create([
            'name' => 'English',
            'lecture' => '2',
            'laboratory' => '0',
            'practice' => '1',
        ]);
    }
}

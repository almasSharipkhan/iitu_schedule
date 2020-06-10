<?php

use Illuminate\Database\Seeder;
use App\Department;
class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = [
            [
                'name' => 'Computer Engineering and Telecommunications',
                'head_office' => "404",
            ],

        ];

        Department::insert($departments);
    }
}

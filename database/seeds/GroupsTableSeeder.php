<?php

use App\Group;
use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classes = [
            [
                'id' => 1,
                'name' => 'First class'
            ],
            [
                'id' => 2,
                'name' => 'Second class'
            ]
        ];

        Group::insert($classes);
    }
}

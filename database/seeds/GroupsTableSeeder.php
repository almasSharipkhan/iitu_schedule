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
                'name' => 'ITM-1806',
                'speciality_id' => 1,
            ],
            [
                'name' => 'CSSE-1604',
                'speciality_id' => 2,
            ],
            [
                'name' => 'IS-1604',
                'speciality_id' => 4,
            ],
            [
                'name' => 'FIN-1604',
                'speciality_id' => 5,
            ],
            [
                'name' => 'RET-1604',
                'speciality_id' => 6,
            ],
        ];

        Group::insert($classes);
    }
}

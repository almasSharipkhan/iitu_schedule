<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            PermissionsTableSeeder::class,
            RolesTableSeeder::class,
            PermissionRoleTableSeeder::class,
            //GroupsTableSeeder::class,
            UsersTableSeeder::class,
            RoleUserTableSeeder::class,
            //LessonsTableSeeder::class,
        ]);
    }
}

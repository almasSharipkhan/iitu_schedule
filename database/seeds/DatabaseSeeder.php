<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            DepartmentsTableSeeder::class,
            SpecialitiesTableSeeder::class,
            GroupsTableSeeder::class,
            PermissionsTableSeeder::class,
            RolesTableSeeder::class,
            PermissionRoleTableSeeder::class,
            UsersTableSeeder::class,
            RoleUserTableSeeder::class,
            AuditoriesTableSeeder::class,
            CoursesTableSeeder::class,
            //LessonsTableSeeder::class,
        ]);
    }
}

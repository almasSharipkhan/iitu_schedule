<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'iitu_id'        => 1,
                'name'           => 'Admin',
                'surname'        => 'Adminov',
                'patronymic'     => 'Adminovich',
                'email'          => 'admin@admin.com',
                'group_id'       => null,
                'speciality_id'  => null,
                'department_id'  => null,
                'password'       => '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei',
                'remember_token' => null,
            ],/*
            [
                'iitu_id'        => 2,
                'name'           => 'Madina',
                'surname'        => 'Ipalakova',
                'patronymic'     => 'Tolegenovna',
                'email'          => 'teacher@teacher.com',
                'password'       => '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei',
                'remember_token' => null,
                'class_id'       => null,
            ],
            [
                'iitu_id'        => 3,
                'name'           => 'Nurzhan',
                'surname'        => 'Mukazhanov',
                'patronymic'     => 'Kakenovich',
                'email'          => 'teacher2@teacher2.com',
                'password'       => '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei',
                'remember_token' => null,
                'class_id'       => null,
            ],
            [
                'iitu_id'        => 4,
                'name'           => 'Teacher',
                'surname'        => 'Teacherov',
                'patronymic'     => 'Teacherovich',
                'email'          => 'teacher3@teacher3.com',
                'password'       => '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei',
                'remember_token' => null,
                'class_id'       => null,
            ],
            [
                'iitu_id'        => 5,
                'name'           => 'Nurzhan',
                'surname'        => 'Duzbayev',
                'patronymic'     => 'Tokuzhaevich',
                'email'          => 'teacher4@teacher4.com',
                'password'       => '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei',
                'remember_token' => null,
                'class_id'       => null,
            ],
            [
                'iitu_id'        => 6,
                'name'           => '',
                'surname'        => 'Sharipkhan',
                'patronymic'     => 'Adminovich',
                'email'          => 'teacher5@teacher5.com',
                'password'       => '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei',
                'remember_token' => null,
                'class_id'       => null,
            ],
            [
                'iitu_id'        => 21622,
                'name'           => 'Almas',
                'surname'        => 'Sharipkhan',
                'patronymic'     => 'Kablanuly',
                'email'          => '21622@iitu.kz',
                'password'       => '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei',
                'remember_token' => null,
                'class_id'       => 1,
            ],*/
        ];

        User::insert($users);
    }
}

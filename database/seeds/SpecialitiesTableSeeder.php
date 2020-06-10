<?php

use Illuminate\Database\Seeder;
use App\Speciality;
class SpecialitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Speciality::create([
            'id' => 1,
            'code'=>'5B070300',
            'name'=>'Информационные системы',
            'department_id'=>1

        ]);
        Speciality::create([
            'id' => 2,
            'code'=>'5B070400',
            'name'=>'Вычислительная техника и программное обеспечение',
            'department_id'=>1
        ]);
        Speciality::create([
            'id' => 3,
            'code'=>'5B070500',
            'name'=>'Математическое и компьютерная моделирование',
            'department_id'=>1
        ]);
        Speciality::create([
            'id' => 4,
            'code'=>'5B070700',
            'name'=>'Менеджмент в IT',
            'department_id'=>1
        ]);
        Speciality::create([
            'id' => 5,
            'code'=>'5B070400',
            'name'=>'Журналистика',
            'department_id'=>1
        ]);
        Speciality::create([
            'id' => 6,
            'code'=>'5B070900',
            'name'=>'Финансы в IT',
            'department_id'=>1
        ]);
        Speciality::create([
            'id' => 7,
            'code'=>'5B070200',
            'name'=>'Информатика',
            'department_id'=>1
        ]);
        Speciality::create([
            'id' => 8,
            'code'=>'5B170200',
            'name'=>'Системы информационной безопасности',
            'department_id'=>1
        ]);
        Speciality::create([
            'id' => 9,
            'code'=>'5B071900',
            'name'=>'Радиотехника,ы электроника и телекоммуникации',
            'department_id'=>1
        ]);
        Speciality::create([
            'id' => 10,
            'code'=>'5B011100',
            'name'=>'Педогогическая информатика',
            'department_id'=>1
        ]);
        //*************** *  new spec ***************/
        Speciality::create([
            'id' => 11,
            'code'=>'В011',
            'name'=>'Подготовка учителей информатики',
            'department_id'=>1
        ]);
        Speciality::create([
            'id' => 12,
            'code'=>'В010 ',
            'name'=>'Подготовка учителей физики',
            'department_id'=>1
        ]);
        Speciality::create([
            'id' => 13,
            'code'=>'В044',
            'name'=>'Менеджмент и управление',
            'department_id'=>1
        ]);
        Speciality::create([
            'id' => 14,
            'code'=>'В046',
            'name'=>'Финансы, экономика, банковское и страховое дело',
            'department_id'=>1
        ]);
        Speciality::create([
            'code'=>'В042',
            'name'=>'Журналистика и репортерское дело',
            'department_id'=>1
        ]);
        Speciality::create([
            'id' => 16,
            'code'=>'В057',
            'name'=>'Информационные технологии',
            'department_id'=>1
        ]);
        Speciality::create([
            'id' => 17,
            'code'=>'В058',
            'name'=>'Информационная безопасность',
            'department_id'=>1
        ]);
        Speciality::create([
            'id' => 18,
            'code'=>'В059',
            'name'=>'Коммуникации и коммуникационные технологии',
            'department_id'=>1
        ]);
    }
}

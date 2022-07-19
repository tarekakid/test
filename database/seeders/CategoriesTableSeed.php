<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'category' =>'Саморазвитие / Личная эффе'
            ],
            [
                'category' =>'Деловые/Бизнес-процессы'
            ],
            [
                'category' =>'Деловые/Найм'
            ],
            [
                'category' =>'Деловые/Реклама'
            ],
            [
                'category' =>'Деловые/Управление бизнесом'
            ],
            [
                'category' =>'Деловые/Управление людьми'
            ],
            [
                'category' =>'Деловые/Управление проектами'
            ],
            [
                'category' =>'Детские/Воспитание'
            ],
            [
                'category' =>'Дизайн/Общее'
            ],
            [
                'category' =>'Дизайн/Logo'
            ],
            [
                'category' =>'Дизайн/Web дизайн'
            ],
            [
                'category' =>'Разработка/PHP'
            ],
            [
                'category' =>'Разработка/HTML и CSS'
            ],
            [
                'category' =>'Разработка/Проектирование'
            ]
        ];
        foreach ($categories as $key => $value )
        {
            Categories::create($value);
        }
    }
}

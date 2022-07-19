<?php

namespace Database\Seeders;

use App\Models\Types;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypesTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            [
                'type' => 'Книга'
            ],
            [
                'type' => 'Статья'
            ],
            [
                'type' => 'Видео'
            ],
            [
                'type' => 'Сайт/Блог'
            ],
            [
                'type' => 'Подборка'
            ],
            [
                'type' => 'Ключевые идеи книги'
            ]
        ];

        foreach($types as $key => $value)
        {
            Types::create($value);
        }
    }
}

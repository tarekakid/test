<?php

namespace Database\Seeders;

use App\Models\Tags;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagsTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            [
                'tag' => 'Продуктивность'
            ],
            [
                'tag' => 'Личная эффективность'
            ],
            [
                'tag' => 'Языки программирования'
            ]
        ];
        foreach ($tags as $key => $value)
        {
            Tags::create($value);
        }
    }
}

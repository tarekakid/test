<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TypesTableSeed::class);
        $this->call(CategoriesTableSeed::class);
        $this->call(TagsTableSeed::class);
        $this->call(MaterialsTableSeed::class);
    }
}

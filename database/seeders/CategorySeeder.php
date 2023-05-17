<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Career',
        ]);

        Category::create([
            'name' => 'Skill',
        ]);

        Category::create([
            'name' => 'Travel',
        ]);

        Category::create([
            'name' => 'Relationship',
        ]);

        Category::create([
            'name' => 'Item',
        ]);

    }
}

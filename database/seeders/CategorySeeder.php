<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    
    public function run(): void
    {
        Category::create([
            'name_category' => 'desayunos',
        ]);

         Category::create([
            'name_category' => 'ensaladas',
        ]);

         Category::create([
            'name_category' => 'entrantes',
        ]);

         Category::create([
            'name_category' => 'principales',
        ]);

         Category::create([
            'name_category' => 'postres',
        ]);
    }
}

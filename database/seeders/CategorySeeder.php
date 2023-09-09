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
            'name_category'=> 'Desayunos',
        ]);

        Category::create([
            'name_category'=> 'Pescados',
        ]);

        Category::create([
            'name_category'=> 'Platos vegetarianos',
        ]);
        Category::create([
            'name_category'=> 'Ensaladas',
        ]);
    }
}

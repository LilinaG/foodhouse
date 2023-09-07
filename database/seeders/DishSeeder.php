<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dish;

class DishSeeder extends Seeder
{
    
    public function run(): void
    {
        Dish::create([
            'category_id' => '1',
            'name_dish' => 'tortilla',
            'description_short' => 'tortilla de patata',
            'description_detail' => 'tortilla de patata muy rica',
            'photo' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fspanishsabores.com%2Fbest-spanish-omelet-recipe%2F&psig=AOvVaw0xbdEvgjHPgfc4JiL7eQ0g&ust=1694079026395000&source=images&cd=vfe&opi=89978449&ved=0CBAQjRxqFwoTCNiV-abWlYEDFQAAAAAdAAAAABAE',
            'price' => 3.50,
            'allergens' => 'huevo'
        ]);

        Dish::create([
            'category_id' => '1',
            'name_dish' => 'tortilla de calabacín',
            'description_short' => 'tortilla de calabacín',
            'description_detail' => 'tortilla de calabacín muy rica',
            'photo' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fspanishsabores.com%2Fbest-spanish-omelet-recipe%2F&psig=AOvVaw0xbdEvgjHPgfc4JiL7eQ0g&ust=1694079026395000&source=images&cd=vfe&opi=89978449&ved=0CBAQjRxqFwoTCNiV-abWlYEDFQAAAAAdAAAAABAE',
            'price' => 3.50,
            'allergens' => 'huevo'
        ]);
    }
}

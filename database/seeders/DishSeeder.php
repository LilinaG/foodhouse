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
            'name_dish' => 'Bowl de Acai',
            'description_short' => 'Acai mezclado con frutas frescas, granola y miel.',
            'description_detail' => 'Nuestro Bowl de Acai es una explosión de sabor y energía. Combinamos el acai brasileño con frutas frescas, crujiente granola y un toque de miel para crear un desayuno nutritivo y delicioso que te dará un impulso energético desde el principio del día.',
            'photo' => 'https://s1.eestatic.com/2021/10/20/como/620949308_212231446_1706x960.jpg',
            'price' => 9.50,
            'allergens' => 'Frutos secos '
        ]);

        Dish::create([
            'category_id' => '1',
            'name_dish' => 'Tostadas de aguacate',
            'description_short' => 'Tostadas de pan integral con aguacate, tomate y huevo pochado',
            'description_detail' => 'Nuestras Tostadas de Aguacate son un homenaje a la simplicidad y el sabor fresco. Pan integral tostado cubierto con aguacate maduro, rodajas de tomate fresco y un huevo pochado perfectamente. Una opción saludable y deliciosa para empezar tu día.',
            'photo' => 'https://imag.bonviveur.com/untar-el-aguacate-en-el-pan-de-centeno-tostado.jpg',
            'price' => 10.50,
            'allergens' => 'Gluten y Huevo'
        ]);

        Dish::create([
            'category_id' => '1',
            'name_dish' => 'Smoothie de espinacas y plátano',
            'description_short' => 'Con espinacas, plátano, leche de almendra y miel.',
            'description_detail' => '¿Buscas una forma refrescante de comenzar tu mañana? Prueba nuestro Smoothie de Espinacas y Plátano. Con espinacas frescas, plátano maduro, leche de almendra y un toque de miel, este batido es una fuente de energía y nutrientes.',
            'photo' => 'https://cdn.pixabay.com/photo/2015/04/19/14/46/smoothie-729923_1280.jpg',
            'price' => 6.80,
            'allergens' => 'Frutos secos'
        ]);

        Dish::create([
            'category_id' => '1',
            'name_dish' => 'Tortitas de avena',
            'description_short' => 'Tortitas de avena con frutas frescas y yogur griego.',
            'description_detail' => 'Nuestras Tortitas de Avena son una opción reconfortante y saludable. Acompañadas de frutas frescas y yogur griego, estas tortitas son la elección perfecta para aquellos que desean disfrutar de un desayuno dulce sin sacrificar la nutrición.',
            'photo' => 'https://t1.uc.ltmcdn.com/es/posts/0/7/6/como_hacer_tortitas_de_avena_y_platano_50670_orig.jpg',
            'price' => 8.90,
            'allergens' => 'Gluten y trigo'
        ]);

        Dish::create([
            'category_id' => '1',
            'name_dish' => 'Salmón a la parrilla',
            'description_short' => 'Salmón fresco con espárragos y puré de coliflor.',
            'description_detail' => 'El Salmón a la Parrilla es una opción elegante y saludable. Servido con espárragos y un puré de coliflor cremoso, cada bocado ofrece un equilibrio perfecto de proteínas y verduras.',
            'photo' => 'https://es.cravingsjournal.com/wp-content/uploads/2022/09/pescado-a-la-parrilla-5-500x500.jpg',
            'price' => 16.20,
            'allergens' => 'Pescado'
        ]);


        Dish::create([
            'category_id' => '1',
            'name_dish' => 'Bowl de burrito',
            'description_short' => 'Arroz integral, frijoles negros, aguacate, pico de gallo y pollo o tofu.',
            'description_detail' => 'Este Bowl de Burrito Saludable es una fiesta para los sentidos. Arroz integral, frijoles negros, aguacate, pico de gallo y pollo o tofu se combinan para ofrecer una experiencia de sabor inspirada en la comida mexicana, pero saludable.',
            'photo' => 'https://healthyfitnessmeals.com/wp-content/uploads/2018/08/Grilled-chicken-burrito-bowls-10-500x500.jpg',
            'price' => 11.50 ,
            'allergens' => 'Gluten'
        ]);


        Dish::create([
            'category_id' => '1',
            'name_dish' => 'Tofu a la parrilla con glaseado de jengibre',
            'description_short' => 'Tofu a la parrilla con glaseado de jengibre y acompañado de vegetales al vapor.',
            'description_detail' => 'El Tofu a la Parrilla con Glaseado de Jengibre es una opción vegetariana llena de sabor. El tofu a la parrilla se cubre con un glaseado de jengibre y se sirve con vegetales al vapor para una cena equilibrada.',
            'photo' => 'https://nomadasgourmet.com/wp-content/uploads/2023/06/salsa-teriyaki-casera-7400504.jpg',
            'price' => 13.10,
            'allergens' => 'ninguno'
        ]);

        Dish::create([
            'category_id' => '1',
            'name_dish' => 'Ensalada de remolacha y queso de cabra',
            'description_short' => 'Remolachas asadas, rúcula, nueces y queso de cabra con vinagreta balsámica.',
            'description_detail' => 'Nuestra Ensalada de Remolacha y Queso de Cabra es una mezcla de sabores y texturas. Remolachas asadas, rúcula, nueces y queso de cabra se combinan con una vinagreta balsámica para crear una ensalada sofisticada.',
            'photo' => 'https://i.blogs.es/5d9aef/estherclemente_ensalada-morada_-0001/450_1000.jpg',
            'price' => 10.60,
            'allergens' => 'Lácteos'
        ]);
    }
}

<?php

namespace Database\Factories;

use App\Models\Productos;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;



$factory->define(Productos::class, function (Faker $faker) {
    return [
        'category_id' => factory(\App\CategoriaProducto::class),
        'title' => $faker->sentence(4),
        'slug' => $faker->slug,
        'image' => $faker->randomElement(['img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg']),
        'description' => $faker->paragraph,
    ];
});


// class ProductosFactory extends Factory
// {
//     /**
//      * The name of the factory's corresponding model.
//      *
//      * @var string
//      */
//     protected $model = Productos::class;

//     /**
//      * Define the model's default state.
//      *
//      * @return array
//      */
//     public function definition()
//     {
//         return [
//             //
//         ];
//     }
// }

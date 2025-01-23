<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Asegúrate de que la carpeta existe
        if (!is_dir(storage_path('app/public/posts'))) {
            mkdir(storage_path('app/public/posts'), 0755, true);
        }

        return [
            'url' => 'posts/' . fake()->image('public/storage/posts', 640,480,null,true),
            
        ];
    }
}

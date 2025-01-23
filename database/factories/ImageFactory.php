<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\File;

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
        $directory = storage_path('app/public/posts');

        // // Verificar si la carpeta no existe y crearla si es necesario
        // if (!is_dir($directory)) {
        //     mkdir($directory, 0755, true);
        // }

        // Generar la imagen sin eliminar la carpeta cada vez
        $imagePath = fake()->image(
            $directory, // Carpeta donde se genera la imagen
            640,        // Ancho
            480,        // Alto
            null,       // Categoría (null para cualquier categoría)
            false       // Devolver solo el nombre del archivo
        );

        // Retornar la URL en el formato deseado
        return [
            'url' => 'posts/' . $imagePath, // Ajustamos el prefijo a "posts/"
        ];
    }
}

<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = Post::factory(100)->create();

        foreach ($posts as $post){
            Image::factory(1)->create([
                'imageable_id' => $post->id,
                'imageable_type' => Post::class

            ]);
            //->tags() se puede usar gracias a la relacion que establecimos
            $post->tags()->attach([//->attach asigna el valor a ese campo
                rand(1,4),//rand() asigna valores randoms, en este caso simulan el id de la categoria
                rand(5,8)
            ]);
        }
    }
}

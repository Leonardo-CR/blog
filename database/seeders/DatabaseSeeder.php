<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;

use App\Models\Tag;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $directory = storage_path('app/public/posts');

        File::deleteDirectory($directory);
        File::makeDirectory($directory,0755, true);

        Category::factory(4)->create();
        Tag::factory(8)->create();

        

        $this->call([
            UserSeeder::class,
            PostSeeder::class
        ]);
        
        

        
    }
}

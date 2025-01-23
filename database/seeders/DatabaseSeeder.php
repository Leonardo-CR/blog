<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;

use App\Models\Tag;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        
        Storage::makeDirectory('public/posts');

        Category::factory(4)->create();
        Tag::factory(8)->create();

        

        $this->call([
            UserSeeder::class,
            PostSeeder::class
        ]);
        
        

        
    }
}

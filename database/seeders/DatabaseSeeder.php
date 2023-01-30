<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(Admin::class);

        Category::create([
            'name' => 'Young Lamb', 
            'description' => 'Lamb of age below than 2 years old. Their meat, very the most tender. Hmmm, yummie..',
            'image' => 'test', 
        ]);
        Category::create([
            'name' => 'Mature Lamb', 
            'description' => 'Lamb of age between 2 to 4 years old. Their meat, very the most tender and juicy. Hmmm, yummie..',
            'image' => 'test', 
        ]);
        Category::create([
            'name' => 'Golden Lamb', 
            'description' => 'Lamb of age more than 4 years old. Their meat, very the most juicy. Hmmm, yummie..',
            'image' => 'test', 
        ]);
    }
}

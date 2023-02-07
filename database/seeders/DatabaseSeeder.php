<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Menu;
use App\Models\Category;
use App\Models\Table;
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

        Menu::create([
            'name' => 'Full House Festive Rack of Lamb Family', 
            'description' => 'A whole family of lamb\'s leg flavoured with rosemary, cloves, orange and cranberries makes the best festive day of the year.',
            'image' => 'test',
            'price' => '399.99', 
        ]);
        Menu::create([
            'name' => 'Full House Delish Rack of Lamb Family', 
            'description' => 'A whole family of roasted rack of lambs is the perfect showstopper, especially when it comes to Easter dinner.',
            'image' => 'test',
            'price' => '399.99', 
        ]);
        Menu::create([
            'name' => 'Lamb Kebab Sticks and Veges Too', 
            'description' => 'A classic in every way, this Kebab Sticks will not go wrong while seasoned with a blend of Mediterranean Archipelagos Veges.',
            'image' => 'test',
            'price' => '199.99', 
        ]);
        Menu::create([
            'name' => 'Seared Lamb Steak with Potato Mash & Mint Sauce', 
            'description' => 'Known as the salmon of the land, these lean lamb steaks and vitamin-packed sides become the perfect couple of the day.',
            'image' => 'test',
            'price' => '179.99', 
        ]);
        Menu::create([
            'name' => 'Relish Lamb Steak With Olive and Tomatoes', 
            'description' => 'Behold, our signature dish from the gardens of Ovis Aries. Fed and served with tomatoes, surely one of its kind.',
            'image' => 'test',
            'price' => '179.99', 
        ]);
        Menu::create([
            'name' => 'Roast Gold Lamb Stew with Garlic and Rosemary', 
            'description' => 'All the flavours of only golden roast lamb, baked into a hearty stew. Serve over buttered cous for over the night.',
            'image' => 'test',
            'price' => '159.99', 
        ]);

        Table::create([
            'name' => 'Front #1', 
            'guest_number' => '4',
            'location' => 'Front',
            'status' => 'Complicated', 
            'image' => 'test', 
        ]);
        Table::create([
            'name' => 'Inside #1', 
            'guest_number' => '4',
            'location' => 'Inside',
            'status' => 'Complicated', 
            'image' => 'test', 
        ]);
        Table::create([
            'name' => 'Outside #1', 
            'guest_number' => '6',
            'location' => 'Outside',
            'status' => 'Complicated', 
            'image' => 'test', 
        ]);
    }
}

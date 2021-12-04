<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Seeder;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        category::firstOrCreate([
            "name"=>"Pasta's",
            "featured"=>true,
            "active"=>true

        ]);
        category::firstOrCreate([
            "name"=>"Sauzen",
            "featured"=>true,
            "active"=>true

        ]);
        category::firstOrCreate([
            "name"=>"Carpaccio's",
            "featured"=>true,
            "active"=>true
        ]);
        category::firstOrCreate([
            "name"=>"Dolce",
            "featured"=>false,
            "active"=>true
        ]);
        category::firstOrCreate([
            "name"=>"Frisdranken",
            "featured"=>false,
            "active"=>true
        ]);
        category::firstOrCreate([
            "name"=>"Insalata",
            "featured"=>false,
            "active"=>true
        ]);
        category::firstOrCreate([
            "name"=>"Mozzarella",
            "featured"=>false,
            "active"=>true
        ]);

        category::all()->each(function (category $category) {
            if ($category->media()->count() === 0) {
                echo "Creating picture for {$category->id}\n";
                $category
                    ->addMediaFromUrl('https://source.unsplash.com/random')
                    ->toMediaCollection('category');
            }
        });
    }
}

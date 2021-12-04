<?php

namespace Database\Seeders;

use App\Models\item;
use Illuminate\Database\Seeder;

class itemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        item::firstOrCreate([
            "category_id"=>28,
            "name"=>"Pasta",
            "description"=>"this is a description!",
            "price"=>2.30,
            "featured"=>true,
            "active"=>true

        ]);
        item::firstOrCreate([
            "category_id"=>29,
            "name"=>"tomaat",
            "description"=>"this is a description!",
            "price"=>5.70,
            "featured"=>true,
            "active"=>true

        ]);
        item::firstOrCreate([
            "category_id"=>30,
            "name"=>"water",
            "description"=>"this is a description!",
            "price"=>1.30,
            "featured"=>true,
            "active"=>true
        ]);
        item::firstOrCreate([
            "category_id"=>31,
            "name"=>"mozzarella parma",
            "description"=>"this is a description!",
            "price"=>22.00,
            "featured"=>true,
            "active"=>true
        ]);
        item::firstOrCreate([
            "category_id"=>32,
            "name"=>"Homemade Panna Cotta",
            "description"=>"this is a description!",
            "price"=>8.0,
            "featured"=>true,
            "active"=>true
        ]);
        item::firstOrCreate([
            "category_id"=>33,
            "name"=>"Carpaccio runds",
            "description"=>"this is a description!",
            "price"=>9.00,
            "featured"=>true,
            "active"=>true
        ]);
        item::firstOrCreate([
            "category_id"=>35,
            "name"=>"insalata camogli",
            "description"=>"this is a description!",
            "price"=>7.50,
            "featured"=>true,
            "active"=>true
        ]);

        item::all()->each(function (item $item) {
            if ($item->media()->count() === 0) {
                echo "Creating picture for {$item->id}\n";
                $item
                    ->addMediaFromUrl('https://source.unsplash.com/random')
                    ->toMediaCollection('item');
            }
        });
    }
}

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
        item::Create([
            "category_id"=>1,
            "name"=>"Pasta",
            "description"=>"this is a description!",
            "price"=>2.30,
            "featured"=>true,
            "active"=>true

        ]);
        item::Create([
            "category_id"=>2,
            "name"=>"tomaat",
            "description"=>"this is a description!",
            "price"=>5.70,
            "featured"=>true,
            "active"=>true

        ]);
        item::Create([
            "category_id"=>3,
            "name"=>"water",
            "description"=>"this is a description!",
            "price"=>1.30,
            "featured"=>true,
            "active"=>true
        ]);
        item::Create([
            "category_id"=>4,
            "name"=>"mozzarella parma",
            "description"=>"this is a description!",
            "price"=>22.00,
            "featured"=>true,
            "active"=>true
        ]);
        item::Create([
            "category_id"=>5,
            "name"=>"Homemade Panna Cotta",
            "description"=>"this is a description!",
            "price"=>8.0,
            "featured"=>true,
            "active"=>true
        ]);
        item::Create([
            "category_id"=>6,
            "name"=>"Carpaccio runds",
            "description"=>"this is a description!",
            "price"=>9.00,
            "featured"=>true,
            "active"=>true
        ]);
        item::Create([
            "category_id"=>7,
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

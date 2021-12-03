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
        category::create([
            "name"=>"Pasta's",
            "featured"=>true,
            "active"=>true

        ]);
        category::create([
            "name"=>"Sauzen",
            "featured"=>true,
            "active"=>true

        ]);
        category::create([
            "name"=>"Voorbind's",
            "featured"=>true,
            "active"=>true

        ]);

        //piemeltjes
    }
}

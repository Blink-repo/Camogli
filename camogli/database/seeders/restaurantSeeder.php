<?php

namespace Database\Seeders;

use App\Models\restaurant;
use Illuminate\Database\Seeder;

class restaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        restaurant::firstOrCreate([
            'name' => 'comogli',
            'slogan' => '',
            'maopen' =>  'closed',
            'maclose' =>  'closed',
            'diopen' => '11:00',
            'diclose' =>  '7:15',
            'woopen' => '11:00',
            'woclose' =>  '7:15',
            'doopen' => '11:00',
            'doclose' =>  '7:15',
            'vropen' => '11:00',
            'vrclose' =>  '7:15',
            'zaopen' =>  '11:00',
            'zaclose' => '7:15',
            'zoopen' => 'closed',
            'zoclose' =>  'closed',
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\order;
use App\Models\orderDetails;
use Illuminate\Database\Seeder;

class orderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $order = order::firstOrCreate([
            'status' => 'order placed',
            'pickup_name' => 'Ibrahim Alou Issa',
            'pickup_time' => '18:00',
            'payment_type' => 'contant',
            'total_amount' => '10',
        ]);

        orderDetails::firstOrCreate([
            'order_id' => $order->id,
            'item_id' => '2',
            'quantity' => '1',
        ]);

        orderDetails::firstOrCreate([
            'order_id' => $order->id,
            'item_id' => '5',
            'quantity' => '2',
        ]);

        $order = order::firstOrCreate([
            'status' => 'order placed',
            'pickup_name' => 'Mohammed Haibout',
            'pickup_time' => '16:00',
            'payment_type' => 'contant',
            'total_amount' => '23',
        ]);

        orderDetails::firstOrCreate([
            'order_id' => $order->id,
            'item_id' => '3',
            'quantity' => '1',
        ]);

        $order = order::firstOrCreate([
            'status' => 'order placed',
            'pickup_name' => 'Maarten Segers',
            'pickup_time' => '12:30',
            'payment_type' => 'contant',
            'total_amount' => '9.50',
        ]);

        orderDetails::firstOrCreate([
            'order_id' => $order->id,
            'item_id' => '2',
            'quantity' => '1',
        ]);

        orderDetails::firstOrCreate([
            'order_id' => $order->id,
            'item_id' => '5',
            'quantity' => '3',
        ]);

        orderDetails::firstOrCreate([
            'order_id' => $order->id,
            'item_id' => '4',
            'quantity' => '1',
        ]);

        orderDetails::firstOrCreate([
            'order_id' => $order->id,
            'item_id' => '6',
            'quantity' => '4',
        ]);

    }
}

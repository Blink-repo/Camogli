<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\item;
use App\Models\order;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    function index()
    {
        $categories = category::all();
        $items = item::all();
        $orders = order::all();
        $total = 0;

        foreach ($orders as $order){
            $total += $order->total_amount;
        }

        $count = array([
            "categories" => count($categories),
            "items" => count($items),
            "orders" => count($orders),
            "total" => $total
        ]);

        return view('admin.dashboard')->with('stats', $count);
    }
}

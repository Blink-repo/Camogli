<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\item;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    function index()
    {
        $categories = category::all();
        $items = item::all();

        $count = array([
            "categories" => count($categories),
            "items" => count($items)
        ]);

        return view('admin.dashboard')->with('stats', $count);
    }
}

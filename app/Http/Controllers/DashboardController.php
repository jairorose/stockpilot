<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class DashboardController extends Controller
{
    public function index() 
    {
        $itemCount = Item::count();
        $lowStockItems = Item::whereColumn('minimum_stock', '>', 'stock_amount')->get();
        $lowStockCount = $lowStockItems->count();
        
        // echo "<pre>";
        // var_dump($lowStockCount);
        // echo "</pre>";
        // die();

        return view('dashboard', compact(
            'itemCount',
            'lowStockItems',
            'lowStockCount'
        ));
    }
}

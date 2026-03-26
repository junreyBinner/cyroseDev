<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Order;
use App\Models\User;

class AdminController extends Controller
{

    public function dashboard()
    {

        $products = Product::count();
        $orders = Order::count();
        $users = User::count();

        return view('admin.dashboard', compact(
            'products',
            'orders',
            'users'
        ));
    }
}

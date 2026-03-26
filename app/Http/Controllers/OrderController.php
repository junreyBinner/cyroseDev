<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{

    public function checkout()
    {

        $carts = Cart::where('user_id', Auth::id())->with('product')->get();

        if ($carts->count() == 0) {
            return redirect('/cart');
        }

        $total = 0;

        foreach ($carts as $cart) {
            $total += $cart->product->price * $cart->quantity;
        }

        $order = Order::create([
            'user_id' => Auth::id(),
            'total_price' => $total,
            'status' => 'pending'
        ]);

        foreach ($carts as $cart) {

            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $cart->product_id,
                'quantity' => $cart->quantity,
                'price' => $cart->product->price
            ]);
        }

        Cart::where('user_id', Auth::id())->delete();

        return redirect('/my-orders');
    }

    public function myOrders()
    {
        $orders = Order::where('user_id', Auth::id())
            ->with('items.product')
            ->latest()
            ->get();

        return view('orders.index', compact('orders'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    public function index()
    {
        $carts = Cart::where('user_id', Auth::id())->with('product')->get();

        return view('cart.index', compact('carts'));
    }

    public function add(Request $request)
    {

        $product = Product::findOrFail($request->product_id);

        $cart = Cart::where('user_id', Auth::id())
            ->where('product_id', $product->id)
            ->first();

        if ($cart) {

            $cart->quantity += 1;
            $cart->save();
        } else {

            Cart::create([
                'user_id' => Auth::id(),
                'product_id' => $product->id,
                'quantity' => 1
            ]);
        }

        return redirect('/cart');
    }

    public function remove($id)
    {
        Cart::findOrFail($id)->delete();

        return redirect('/cart');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;

class OrderController extends Controller
{
        public function makeOrder(OrderRequest $request)
    {
        $product = \App\Product::find($request->product);
        $price = $product->price * $request->volume;
        
        \App\Order::create([
            'product_id' => $request->product,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'price' => $price,
        ]);

        return redirect()->route('orders.list');
    }

    public function ordersList()
    {
        $orders = \App\Order::all();

        return view('order.list', compact('orders'));
    }
}


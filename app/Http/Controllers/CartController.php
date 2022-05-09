<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Orders;

class CartController extends Controller
{
    public function showProducts () {

        $prodobj = Products::all();
        return view ('cart.index', compact('prodobj'));
    }

    public function addProducts (Request $request) {

        $order = new Orders();

        $order->userid = $request->input('userid');
        $order->product_name = $request->input('product_name');
        $order->cost = $request->input('cost');
        $order->quantity = $request->input('quantity');
        $order->final_cost = $request->input('final_cost');

        $order->save();

        return redirect( route('cart.index'));
    }

    public function checkoutList ($id) {
        $order = Orders::find($id);
        return view ('cart.checkout', compact('order'));
    }
}

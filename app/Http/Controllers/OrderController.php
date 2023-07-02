<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function show()
    {
        $orders = Order::all();
        return view('order', compact('orders'));
    }

    public function complete(Order $order)
    {
        $order->delete();
        return redirect('/order');
    }
} 

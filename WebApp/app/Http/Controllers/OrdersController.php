<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderLine;

class OrdersController extends Controller
{
    public function storeOrderLine(Request $request)
    {
        $request->validate([
            'order_id' => 'required',
            'book_id' => 'required',
            'quantity' => 'required',
            'total' => 'required',
        ]);

        return OrderLine::create($request->all());
    }

    public function storeOrder(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'subtotal' => 'required',
            'total' => 'required',
            'confirmation_number' => 'required',
        ]);

        return Order::create($request->all());
    }

    public function index()
    {
        $response = Order::all();
        return response($response, 201);
    }

}

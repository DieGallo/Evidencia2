<?php

// app/Http/Controllers/OrderController.php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function search(Request $request)
    {
        $invoiceNumber = $request->input('invoice_number');
        $order = Order::where('invoice_number', $invoiceNumber)->first();
        return view('welcome', compact('order'));
    }
}

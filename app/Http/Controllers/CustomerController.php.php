<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        // Método para mostrar todos los clientes
        $customers = Customer::all();
        return view('customers.index', compact('customers'));
    }

    // Otros métodos según sea necesario, como store, update, destroy, etc.
}

<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomersController extends Controller
{
    public function index()
    {
        $customers = Customer::paginate(9);
        return view('user.customers', compact('customers'));
    }
}

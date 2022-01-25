<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Product;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function __invoke(Customer $customer)
    {
        return $customer;
        // $customer->products()->attach($product->id);
    }
}

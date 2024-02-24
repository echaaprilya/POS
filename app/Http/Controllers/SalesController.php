<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function showSalesPage()
    {
        return view('sales');
    }
}

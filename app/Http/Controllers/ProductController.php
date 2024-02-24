<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function foodAndBeverage()
    {
        return view('products.food_beverage');
    }

    public function beautyAndHealth()
    {
        return view('products.beauty_health');
    }

    public function homeCare()
    {
        return view('products.home_care');
    }

    public function babyAndKid()
    {
        return view('products.baby_kid');
    }
}

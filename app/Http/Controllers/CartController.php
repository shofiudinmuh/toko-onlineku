<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(): View
    {
        return view('e-commerce.cart');
    }
}

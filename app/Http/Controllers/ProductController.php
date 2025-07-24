<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $stock=5;
        $title = "catalogue-des-t-shirts";  // variable

        return view('product' , ['stock' => $stock]);
    }

    public function show(int $jeanJacque, int $id)
    {
        return view('product-sheet', ['alina' => $jeanJacque, 'toto' => $id]);
    }
}
 
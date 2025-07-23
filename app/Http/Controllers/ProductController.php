<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   
public function index()
{
return view('Product');



}
 public function show(int $id)
    {
        return view('product-sheet', ['id' => $id]);
    }
}
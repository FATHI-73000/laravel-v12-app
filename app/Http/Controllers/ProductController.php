<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $produits = [
            ['nom' => 'T-Shirt Bleu', 'stock' => 15],
            ['nom' => 'T-Shirt Rouge', 'stock' => 5],
            ['nom' => 'T-Shirt Vert', 'stock' => 0],
        ];

        return view('product', compact('produits'));
    }

    public function show(int $jeanJacque, int $id)
    {
        return view('product-sheet', ['alina' => $jeanJacque, 'toto' => $id]);
    }
}

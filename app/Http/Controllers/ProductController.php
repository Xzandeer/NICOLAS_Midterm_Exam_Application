<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function index()
    {
        $theme = 'Anime';

        $products = [
            ['name' => 'Jujutsu Kaisen', 'price' => 300],
            ['name' => 'Attack on Titan', 'price' => 300],
            ['name' => 'One Piece', 'price' => 300],
        ];

        return view('blade', compact('theme', 'products'));
    }
}

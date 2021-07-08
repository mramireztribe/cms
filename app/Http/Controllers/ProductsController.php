<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $title = "WELCOME TO MY LARAVEL 8 COURSE";
        $description = "CREATED BY MANNY";
        $data = [
            'productOne' => 'iPhone',
            'productTwo' => 'Samsung'
        ];

        // return view('products.index', compact('title', 'description'));
        // return view('products.index')->with('title', $title);
        //return view('products.index')->with('data', $data);
        
    }
}

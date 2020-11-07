<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    public function create()
    {
        return view("week4.homework.create");
    }
    public function store(Request $request)
    {
        Products::create([
            "title" => $request->input("title"),
            "description" => $request->input("description"),
        ]);
    }
    public function display()
    {
        return view("week4.homework.display");
    }
}

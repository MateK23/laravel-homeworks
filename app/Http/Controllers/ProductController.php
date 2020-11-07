<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware("CanPost");
    }
    public function create()
    {
        return view("week4.homework.create");
    }
    public function store(Request $request)
    {
        Products::create([
            "title" => $request->input("title"),
            "text" => $request->input("text"),
            "short_description" => $request->input("short_description"),
        ]);
        return Products::get();
    }
    public function display()
    {
        return Products::get();
        //return view("week4.homework.display")->title('$title');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware("CanPost");
    }
    public function index()
    {
        return Posts::get();
    }
    public function create()
    {
        return view("week4.create");
    }
    public function store(Request $request)
    {
        // $post = new Posts;
        // $post->title = $request->input("title");
        // $post->description = $request->input("description");
        // $post->save();
        Posts::create([
            "title" => $request->input("title"),
            "description" => $request->input("description"),
        ]);
    }
}

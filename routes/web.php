<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Http\Request;
use App\Http\Controllers\PostController;
use App\Posts;




// Week 2

Route::get('/week2_route', function () {
    return view('week2.form');
});

Route::post('/week2_post', function (Request $req) {
    $data = [
        [
            "name" => $req->post()['name'],
        ]
    ];
    return view("week2.table", ["newdata" => $data]);
})->name("week2_postroute");

Route::get("/week2_get/{id}", function ($id) {
    return $id;
});

// Route::post('/testpost', function (Request $req) {
//     return $req->post()['name'];
// })->name("testpostroute");

// Week 3

Route::get('/week3_page', function () {
    return view('week3.inside');
});

// Week 4

Route::get('/index', function () {
    return App\Posts::get();
});

Route::get('/', "PostController@index")->name("index");
Route::get('/posts/create', "PostController@create")->name("createposts");
Route::post("/posts/store", "PostController@store")->name("storeposts");

// Week 4 Homework
Route::get('/products/create', "ProductsController@create")->name("createproducts");
Route::post("/products/store", "ProductsController@store")->name("storeproducts");
Route::get("/products/display", "ProductsController@display")->name("displayproducts");

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});








// Week 2

Route::get('/testroute', function () {
    return view('week2.form');
});

Route::post('/testpost', function (Request $req) {
    $data = [
        [
            "name" => $req->post()['name'],
        ]
    ];
    return view("week2.table", ["newdata" => $data]);
})->name("testpostroute");

Route::get("/testget/{id}", function ($id) {
    return $id;
});

// Route::post('/testpost', function (Request $req) {
//     return $req->post()['name'];
// })->name("testpostroute");

// Week 3

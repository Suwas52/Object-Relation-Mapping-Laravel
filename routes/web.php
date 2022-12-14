<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Product;

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

// Route::get('/', function () {
//     $users = User::all();
//     return view('welcome',['users' => $users]);
// });

Route::get('/', function () {
    
    $users = User::all();
    return view('welcome', compact('users'));
});

Route::get('/product', function () {
    
    $products = Product::all();
    return view('product', compact('products'));
});
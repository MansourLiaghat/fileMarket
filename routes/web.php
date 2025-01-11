<?php

use Illuminate\Support\Facades\Route;
use App\Models\Category;

Route::get('',function (){
    return view('pages.product.productsAll');
});

Route::get('/admin' , function (){
    return view('pages.admin.index');
});

Route::get('/users' , function (){
    return view('pages.users.users');
});

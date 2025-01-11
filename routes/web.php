<?php

use Illuminate\Support\Facades\Route;
use App\Models\Category;

Route::get('',function (){
    return view('front.product.productsAll');
});

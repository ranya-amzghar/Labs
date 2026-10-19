<?php

use Illuminate\Support\Facades\Route;
use App\Models\Categorie;

Route::get('/', function () {
    $categories = Categorie::all();

    return view('categories', compact('categories'));
});
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;


class PostController extends Controller
{
    public function post() {
        $categories = Category::all();
        return view('', compact('categories'));
    }
}

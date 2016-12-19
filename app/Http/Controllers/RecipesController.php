<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class RecipesController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function index()
    {
        $posts = Post::Paginate(5);
        //dd($posts);
        return view('index', compact('posts'));
    }

}

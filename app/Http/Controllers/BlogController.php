<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
    public function index()
{
    $posts = Post::Paginate(5);
    //dd($posts);
    return view('index', compact('posts'));
 }
//
}

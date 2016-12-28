<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class RecipesController extends Controller
{
//    public function home()
//    {
//        return view('index');
//    }

    public function index()
    {
        $posts = Post::Paginate(5);
        //dd($posts);
        return view('index', compact('posts'));
    }

    public function addblog()
    {
        return view('addblog');
    }

    public function editblog()
    {
        return view('edit');
    }

    public function updateblog()
    {
        return view('update');
    }

    public function viewblog(post $post)
    {


        return view('view', compact('post'));
    }

    public function destroy()
    {
        $posts = Post::Paginate(5);
        //dd($posts);
        return view('index', compact('posts'));
    }
}

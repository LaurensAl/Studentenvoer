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
public function update()
{
    $file = request()->file('banner');
    $file->StoreAs('images/', "banner.jpg");
//    request()->file('banner')->store('images');

    return back()->with('status', 'Your image has been uploaded successfully!');

}
}

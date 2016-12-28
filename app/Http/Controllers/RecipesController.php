<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;

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

    public function viewblog(post $post)
    {
        return view('view', compact('post'));
    }

    public function editblog(post $post)
    {
        return view('edit', compact('post'));
    }

    public function updateblog(request $req)
    {
        $req->hasFile('foto');
        $foto = $req->file('foto');
        $name = $foto->getClientOriginalName();
        $foto->move(public_path() . '/images/', $name);

        $post = new Post;
        $post->title = $req['title'];
        $post->content = $req['content'];
        $post->ingredients = $req['ingredients'];
        $post->foto = $name;
        $post->user_id = Auth::user()->id;

        $post->save();
        return back()->with('status', 'Update was a succes!');
    }

    public function editblogupdate(request $req)
    {
        $id = $req->id;
        $content = Post::find($id);
       if($req->hasFile('foto')) {
           $foto = $req->file('foto');
           $name = $foto->getClientOriginalName();
           $foto->move(public_path() . '/images/', $name);
       }
        $post = array(
        'title' => $req['title'],
        'content' => $req['content'],
        'ingredients' => $req['ingredients']);

        $content->fill($post);
        $content->save();
        return back()->with('status', 'Update was a succes!');
    }

    public function destroy()
    {
        $posts = Post::Paginate(5);
        //dd($posts);
        return view('index', compact('post'));
    }
}

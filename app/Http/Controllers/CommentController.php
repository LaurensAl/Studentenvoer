<?php

namespace App\Http\Controllers;
use App\Comments;
use Illuminate\Http\Request;
use App\Post;
class CommentController extends Controller
{
    public function store(request $req, $post_id){

        $this->validate($req, array(
            'name'  => 'required|max:80',
            'email'  => 'required|email|max:80',
            'comment'  => 'required|min:5|max:255'
        ));

        $post = Post::find($post_id);

        $comment = new Comments();
        $comment->name = $req->name;
        $comment->email = $req->email;
        $comment->comment = $req->comment;
        $comment->post()->associate($post);

        $comment->save();

        return redirect()->route('view.blog', [$post->slug]);


    }
}

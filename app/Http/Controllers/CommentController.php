<?php

namespace App\Http\Controllers;
use App\Comments;
use Illuminate\Http\Request;
use App\Post;
class CommentController extends Controller
{
    public function store(request $id){

        $this->validate($id, array(
            'name'  => 'required|max:80',
            'email'  => 'required|email|max:64',
            'comment'  => 'required|min:1|max:255'
        ));

        $post = Post::find($id->id);

        $comment = new Comments();
        $comment->name = $id->name;
        $comment->email = $id->email;
        $comment->comment = $id->comment;
        $comment->post()->associate($post);

        $comment->save();

        return back()->with('status', 'Comment has been added!');



    }
}

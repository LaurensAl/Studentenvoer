<?php

namespace App\Http\Controllers;
use app\comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function comment(request $req){

        $comment = new Comment;
        $comment->name = $req['name'];
        $comment->email = $req['email'];
        $comment->comments = $req['comments'];

        $comment->save();
        return back()->with('status', 'Update was a succes!');
    }
}

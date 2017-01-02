<?php

namespace App;
use App\Comments;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
//    public function Post()
//    {
//        return $this->belongsTo(post::class);
//    }

    public function comment()
    {
       return $this->BelongsTo('App\Comments', 'post_id');
    }

    protected $fillable = [
        'title', 'content', 'foto', 'ingredients',
    ];
    protected $table = "posts";

}

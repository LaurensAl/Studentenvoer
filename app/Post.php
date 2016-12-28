<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function Post()
    {
        return $this->belongsTo(post::class);
    }

    protected $fillable = [
        'title', 'content', 'foto', 'ingredients',
    ];
    protected $table = "posts";

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable = [
        'name','comments','email','posts_id' ];

    public function Post()
    {
        return $this->belongsTo(Post::class);
    }
    protected $table = "comments";
}



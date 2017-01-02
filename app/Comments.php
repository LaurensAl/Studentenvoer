<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    public function Post()
    {
        return $this->belongsTo('App\Post');
    }

    protected $fillable = [
        'name','comments','email','posts_id' ];


    protected $table = "comments";
}



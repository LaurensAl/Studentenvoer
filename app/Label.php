<?php

namespace App;
use App\Post;
use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    public function Post()
    {
        return $this->belongsTo('App\Post');
    }

    protected $fillable = [
        'healthy','fattening','vegetables', 'meat', 'easy', 'difficult', 'posts_id' ];


    protected $table = "labels";
}

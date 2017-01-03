<?php

namespace App;
use App\Post;
use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    public function Post()
    {
        return $this->belongsTo('App\Post', 'post_id');
    }

    protected $fillable = [
        'healthy','fattening','vegetables', 'meat', 'easy', 'difficult', 'post_id' ];


    protected $table = "labels";
}

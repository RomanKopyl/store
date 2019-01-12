<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function user()
    {
        return $this->belohgTo(User::class);
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'post_id',
        'comment'
    ];

    public function posts()
    {
        return $this->belongsTo(Post::class);
    }
}

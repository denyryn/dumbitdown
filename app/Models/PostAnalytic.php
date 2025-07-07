<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostAnalytic extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'post_id',
        'view_count',
        'like_count',
        'share_count',
        'comment_count',
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}

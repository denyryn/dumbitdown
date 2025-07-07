<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostEdit extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'post_id',
        'user_id',
        'title_before',
        'content_before',
        'title_after',
        'content_after',
        'reason',
        'edited_at',
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function editor() // Using 'editor' instead of 'user' for clarity
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

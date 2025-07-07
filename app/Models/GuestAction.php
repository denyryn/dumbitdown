<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuestAction extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'ip_address',
        'user_agent',
        'action',
        'post_id',
        'performed_at',
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}

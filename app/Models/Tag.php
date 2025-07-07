<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /** @use HasFactory<\Database\Factories\TagFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'slug',
        'description',
    ];

    protected static function booted()
    {
        static::creating(function ($tag) {
            $tag->name = \Illuminate\Support\Str::title($tag->name);
            $tag->slug = \Illuminate\Support\Str::slug($tag->name);
        });

        static::updating(function ($tag) {
            $tag->name = \Illuminate\Support\Str::title($tag->name);
            $tag->slug = \Illuminate\Support\Str::slug($tag->name);
        });
    }

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_tags');
    }
}

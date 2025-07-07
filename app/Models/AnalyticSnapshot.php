<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnalyticSnapshot extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'snapshot_date',
        'total_views',
        'total_likes',
        'total_shares',
        'total_comments',
    ];
}

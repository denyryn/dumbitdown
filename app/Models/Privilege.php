<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Privilege extends Model
{
    /** @use HasFactory<\Database\Factories\PrivilegeFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
    ];

    protected static function booted()
    {
        static::creating(function ($privilege) {
            $privilege->name = Str::title($privilege->name);
            $privilege->slug = Str::slug($privilege->name);
        });

        static::updating(function ($privilege) {
            if ($privilege->isDirty('name')) {
                $privilege->name = Str::title($privilege->name);
                $privilege->slug = Str::slug($privilege->name);
            }
        });
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_privilege');
    }
}

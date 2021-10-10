<?php

namespace App\Models;

use App\Traits\UsesUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Election extends Model
{
    use HasFactory, UsesUuid;

    protected $fillable = [
        'name',
        'description',
        'contestable_categories',
        'join_code',
        'candidate_code'
    ];

    protected $casts = [
        'start_at' => 'datetime',
        'stop_at' => 'datetime'
    ];

    protected static function booted()
    {
        static::creating(function ($election) {
            $join_code = Str::random(8);
            $candidate_code = Str::random(8);
            $election->join_code = Str::upper($join_code);
            $election->candidate_code = Str::upper($candidate_code);
        });
    }
}

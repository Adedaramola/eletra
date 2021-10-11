<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Voter extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'voting_id',
        'email',
        'has_voted'
    ];


    public function election()
    {
        return $this->belongsTo(Election::class);
    }
}

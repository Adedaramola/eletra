<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voter extends Model
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

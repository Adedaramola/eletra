<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    protected $fillable = [
        'position',
        'name',
        'email',
        'photo_url',
        'manifesto',
        'votes'
    ];

    public function election()
    {
        return $this->belongsTo(Election::class);
    }
}

<?php

namespace App\Policies;

use App\Models\Election;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ElectionPolicy
{
    use HandlesAuthorization;

    public function delete(User $user, Election $election)
    {
        return $user->id === $election->user_id;
    }
}

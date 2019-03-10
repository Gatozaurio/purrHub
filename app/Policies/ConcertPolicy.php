<?php

namespace App\Policies;

use App\User;
use App\Concert;
use Illuminate\Auth\Access\HandlesAuthorization;

class ConcertPolicy
{
    use HandlesAuthorization;

     /**
     * Determine whether the user can modify the concert.
     *
     * @param  \App\User  $user
     * @param  \App\Concert  $concert
     * @return mixed
     */
    public function modify(User $user, Concert $concert)
    {
        // Devuelve un booleano true si es correcto y false si no lo es
        return $concert->user_id == $user->id || $user->admin == 'Y';
    }
}

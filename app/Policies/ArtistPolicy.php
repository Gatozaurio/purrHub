<?php

namespace App\Policies;

use App\User;
use App\Artist;
use Illuminate\Auth\Access\HandlesAuthorization;

class ArtistPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     * @param  \App\User  $user
     * @param  \App\Artist  $artist
     * @return mixed
     */
    public function modify(User $user, Artist $artist){
        return $artist->user_id == $user ->id;
    }
}

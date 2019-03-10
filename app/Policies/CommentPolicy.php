<?php

namespace App\Policies;

use App\User;
Use App\Comment;
use Illuminate\Auth\Access\HandlesAuthorization;

class CommentPolicy
{
    use HandlesAuthorization;

   /**
     * Create a new policy instance.
     * @param  \App\User  $user
     * @param  \App\Comment  $comment
     * @return mixed
     */
    public function modify(User $user, Comment $comment){
        return $comment->user_id == $user ->id || $user->admin == 'Y';
    }
}

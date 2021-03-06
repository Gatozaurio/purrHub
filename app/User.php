<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'admin'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

	public function concerts()
	{
		return $this->belongsToMany(Concert::class);
    }
    public function comments()
	{
		return $this->hasMany(Comment::class);
    }
    
    public function ownsConcert(Concert $concert){
        return $this->id == $concert->user_id;
    }
    public function ownsArtist(Artist $artist){
        return $this->id == $artist->user_id;
    }
    public function ownsComment(Comment $comment){
        return $this->id == $comment->user_id;
    }
}

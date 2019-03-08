<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'user_id', 'concert_id', 'message'
    ];

    public function users()
	{
		return $this->belongsToMany(User::class);
    }
    public function concerts()
	{
		return $this->belongsToMany(Concert::class);
	}
}

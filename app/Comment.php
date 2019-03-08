<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'message',
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

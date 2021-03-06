<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Concert extends Model
{
    // Se debe utilizar uno u otro
    //protected $fillable = ['name', 'slug', 'artists', 'price', 'city', 'location', 'address', 'date', 'schedule', 'ticket', 'info']; // especifica qué campos no están protegidos y permite crear conciertos con arrays asociativos
    protected $guarded = ['id', 'created_at', 'updated_at']; // Se especifican los campos protegidos

	public function artists()
	{
		return $this->belongsToMany(Artist::class);
	}

	public function users()
	{
		return $this->belongsToMany(User::class);
	}
	
	public function comments()
	{
		return $this->hasMany(Comment::class);
	}
}

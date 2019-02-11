<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at']; // Se especifican los campos protegidos

	public function concerts(){
		return $this->belongsToMany(Concert::class);
	}
}

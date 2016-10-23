<?php

namespace App;
use App\User;
use App\Facility;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Foundation\Auth\User as Authenticatable;

class ShelterResource extends Model
{
	// protected $fillable = [];  // allows array assigning
    
    // gets the client information 
    public function facility() {
        return $this->hasOne('App\Facility', 'id', 'facility_id');
    }
}
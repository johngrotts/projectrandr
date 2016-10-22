<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Foundation\Auth\User as Authenticatable;

class Facility extends Model
{
	protected $fillable = ['facility_name', 'facility_description', 'facility_street_1', 'facility_street_2', 'facility_city', 'facility_state', 'facility_zip', 'facility_phone', 'is_shelter'];  // allows array assigning
    
}
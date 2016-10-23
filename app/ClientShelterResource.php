<?php

namespace App;
use App\User;
use App\Facility;
use App\Client;
use App\ShelterResource;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Foundation\Auth\User as Authenticatable;

class ClientShelterResource extends Model
{
	protected $fillable = ['UUID', 'shelter_resource_id'];  // allows array assigning

	public $timestamps = false;

    
}
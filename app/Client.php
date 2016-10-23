<?php

namespace App;
use App\User;
use App\Facility;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Foundation\Auth\User as Authenticatable;

class Client extends Model
{
	protected $fillable = ['First_Name', 'Middle_Name', 'Last_Name', 'DOB', 'SSN', 'UUID'];  // allows array assigning

    
}
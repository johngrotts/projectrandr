<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Facility;
use App\Http\Requests;

class ShelterResourcesController extends Controller
{
    
    /**
     * Create a new controller instance.
     * Requires authentification on this facility controllers
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Pulls all agencies
     * 
     * @return void
     */
    public function index() {
        $sResources = ShelterResources::all();
    	return view('shelterresources.index', compact('sResources'));
    }
}

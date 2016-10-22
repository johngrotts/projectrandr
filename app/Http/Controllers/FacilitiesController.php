<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Facility;
class FacilitiesController extends Controller
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
        $facilities = Facility::all();
    	return view('facilities.index', compact('facilities'));
    }

    /**
     * Individual facility information
     * 
     * @return void
     */
    public function show(Facility $facility) {
        return view('facilities.show', compact('facility'));
    
    }
}

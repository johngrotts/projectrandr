<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Facility;
use App\ShelterResource;


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
        if ($facility->is_shelter == 1) {
            $sResources = ShelterResource::where('facility_id', $facility->id)->get();
            //dd($sResources);
            return view('facilities.show', compact('facility', 'sResources'));
        }
        else {
            return view('facilities.show', compact('facility'));
        }
    }
}

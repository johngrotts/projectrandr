<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MapController extends Controller
{
    //
    /**
     * 
     * 
     * @return void
     */
    public function index() {
    	return view('maps.index');
    }
}

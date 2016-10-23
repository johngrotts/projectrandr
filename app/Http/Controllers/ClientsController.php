<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Client;

class ClientsController extends Controller
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
    	$clients = Client::orderBy('Last_Name', 'asc')->get();
    	return view('clients.index', compact('clients'));
    }

    /**
     * 
     * 
     * @return void
     */
    public function show($clientID) {
    	$client = Client::where('UUID', $clientID)->firstOrFail();
    	return view('clients.show', compact('client'));
    }

    /**
     * 
     * 
     * @return void
     */
    public function store(Request $request) {
    	return "here";
    }
}

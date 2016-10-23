<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Client;
use App\ShelterResource;
use App\Facility;
use App\ClientShelterResource;

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
    	$facilities = Facility::where('is_shelter', 1)->get();
    	$sResources = ShelterResource::where('total_beds', '>', 'filled_beds')->get();
    	//dd(ClientShelterResource::where('UUID', $clientID)->firstOrFail());
    	$clirec = ClientShelterResource::where('UUID', $clientID)->first();
    	if ( is_null($clirec)) {
    		$csrec = "TRUE";
    	}
    	else {
    		$csrec = "FALSE";
    	}
    	return view('clients.show', compact('client', 'facilities', 'sResources', 'csrec'));
    }

    /**
     * 
     * 
     * @return void
     */
    public function create() {
    	return view('clients.create');
    }

    /**
     * 
     * 
     * @return void
     */
    public function search() {
    	return view('clients.search');
    }
    
    /**
     * 
     * 
     * @return void
     */
    public function store(Request $request) {
    	$clientid = Client::max('UUID')+1;
    	//dd($clientid);
    	// creates the client
    	$newClient = Client::create([
            'First_Name' => $request['First_Name'],
            'Middle_Name' => $request['Middle_Name'],
            'Last_Name' => $request['Last_Name'],
            'DOB' => $request['DOB'],
            'SSN' => $request['SSN'],
            'UUID' =>$clientid
        ]);
    	return "here";
    }

    public function findClient(Request $request) {
    	//dd();
        $clients = Client::where('First_Name', $request->First_Name)->orWhere('Last_Name', $request->Last_Name)->get();
        return view('clients.clientconfirm', compact('clients'));
    }

    /**
     * 
     * 
     * @return void
     */
    public function assignbed(Request $request) {
    	if ($request->assignbed == "TRUE") {
    		$createConn = ClientShelterResource::create([
    			'UUID' => $request['clientid'],
    			'shelter_resource_id' => $request['shelter_id']
    		]);
    	}
    	else {
    		$deleteConn = ClientShelterResource::where('UUID', $request['clientid'])->delete();
    		
    	}
    	return view('clients.search');
    }

    
}

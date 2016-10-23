@extends('layouts.app')

@section('content')
<h1> Clients </h1>
<div class="table-responsive container-fluid">
    <table class="table table-striped table-condensed">
        <thead>
            <tr>
                <th class="col-md-1">Last Name</th>
                <th class="col-md-1">First Name</th>
                <th class="col-md-1">DOB</th>
                <th class="col-md-1">SSN</th>
                <th class="col-md-1">Gender</th>
                <th class="col-md-1"></th>
                <th class="col-md-1"></th>
                <th class="col-md-1"></th>
                <th class="col-md-1"></th>
                <th class="col-md-1"></th>
                <th class="col-md-1"></th>
                <th class="col-md-1"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $client->Last_Name }}</td>
                <td>{{ $client->First_Name }}</td>
                <td>{{ $client->DOB }}</td>
                <td>{{ $client->SSN }}</td>
                <td>@if($client->gender == 0)Male @else Female @endif</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
    <hr>
    <h3>Find a Shelter</h3>
    @if ($csrec == "TRUE")
    <form method="POST" action="/clients/assignbed" class="client-form">
        {{ csrf_field() }} {{-- token that protects the form --}}
        <input name="clientid" type="hidden" value="{{ $client->UUID }}">
        <div class="form-group">
            <label for="client_id">Facility</label> 
            <select class="form-control" name="shelter_id"> 
            <option value=''></option>
            @foreach ($sResources as $sResource)
                <option value="{{ $sResource->id }}">{{ $sResource->facility->facility_name }} </option>
            @endforeach
            </select>
        </div>
        <input name="assignbed" type="hidden" value="TRUE">
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Assign a Bed</button>
        </div>
    </form>
    @else
    <form method="POST" action="/clients/assignbed" class="client-form">
        {{ csrf_field() }} {{-- token that protects the form --}}
        <input name="shelterid" type="hidden" value="{{ $client->shelter_resource_id }}">
        <input name="clientid" type="hidden" value="{{ $client->UUID }}">
        <input name="assignbed" type="hidden" value="FALSE">
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Done with Bed</button>
        </div>
    </form>
    @endif


</div>
@endsection
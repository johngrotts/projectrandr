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
    Assign to a bed?
    
</div>
@endsection
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
                <th class="col-md-1"></th>
                <th class="col-md-1"></th>
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
                <td>{{ $client->DOB }}</td>
                <td>{{ $client->DOB }}</td>
                <td>{{ $client->DOB }}</td>
                <td>{{ $client->DOB }}</td>
                <td>{{ $client->DOB }}</td>
                <td>{{ $client->DOB }}</td>
                <td>{{ $client->DOB }}</td>
                <td>{{ $client->DOB }}</td>
                <td>{{ $client->DOB }}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
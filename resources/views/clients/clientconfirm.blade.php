@extends('layouts.app')

@section('content')
<h1> Clients </h1>
<div class="table-responsive container-fluid">
    <table class="table table-striped table-condensed">
        <thead>
            <tr>
                <th class="col-md-2">Last Name</th>
                <th class="col-md-2">First Name</th>
                <th class="col-md-1">DOB</th>
                <th class="col-md-1"></th>
            </tr>
        </thead>
        <tbody>
        @foreach ($clients as $client)
            <tr>
                <td>{{ $client->Last_Name }}</td>
                <td>{{ $client->First_Name }}</td>
                <td>{{ $client->DOB }}</td>
                <td><a href="/clients/{{ $client->UUID }}" class="btn btn-default btn-xs">Select</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
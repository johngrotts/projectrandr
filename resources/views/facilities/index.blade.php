@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">Choose a facility</div>
            <div class="panel-body">
            <div class="container-fluid">
                <div class="col-md-3"><h3>Name</h3></div>
                <div class="col-md-3"><h3>Street</h3></div>
                <div class="col-md-2"><h3>City</h3></div>
                <div class="col-md-1"><h3>State</h3></div>
                <div class="col-md-1"><h3>Zip</h3></div>
                <div class="col-md-2"><h3>Phone</h3></div>
                @foreach ($facilities as $facility)
                <div class="row">
                    <div class="col-md-3"><a href="/facilities/{{ $facility->id }}">{{ $facility->facility_name }}</a></div>
                    <div class="col-md-3">{{ $facility->facility_street_1 }}</div>
                    <div class="col-md-2">{{ $facility->facility_city }}</div>
                    <div class="col-md-1">{{ $facility->facility_state }}</div>
                    <div class="col-md-1">{{ $facility->facility_zip }}</div>
                    <div class="col-md-2">{{ $facility->facility_phone }}</div>
                    <br>
                </div>
                @endforeach
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading"><h2>{{ $facility->facility_name }}</h2></div>
            <div class="panel-body">
            <div class="row">
                <div class="col-md-3"><h3>Street</h3></div>
                <div class="col-md-3"></div>
                <div class="col-md-2"><h3>City</h3></div>
                <div class="col-md-1"><h3>State</h3></div>
                <div class="col-md-1"><h3>Zip</h3></div>
                <div class="col-md-2"><h3>Phone</h3></div>
                <div class="col-md-3">{{ $facility->facility_street_1 }}</div>
                <div class="col-md-3">{{ $facility->facility_street_2 }}</div>
                <div class="col-md-2">{{ $facility->facility_city }}</div>
                <div class="col-md-1">{{ $facility->facility_state }}</div>
                <div class="col-md-1">{{ $facility->facility_zip }}</div>
                <div class="col-md-2">{{ $facility->facility_phone }}</div>
            </div>
            <hr>
                @if ($facility->is_shelter == 1)
            <div class="row">
                <div class="col-md-3"><h4>Free Beds?</h4></div>
                <div class="col-md-2"><h4>Total Beds</h4></div>
                <div class="col-md-2"><h4>Filled Beds</h4></div>
                <div class="col-md-1"><h4>Accepts Children?</h4></div>
                <div class="col-md-1"><h4>Accepts Men?</h4></div>
                <div class="col-md-1"><h4>Accepts Women?</h4></div>
                <div class="col-md-1"><h4>Vetran</h4></div>
                <div class="col-md-1"><h4>Disability</h4></div>
                <div class="col-md-3">@if($facility->shelterResource->total_beds - $facility->shelterResource->filled_beds > 0)Yes @else No @endif</div>
                <div class="col-md-2">{{ $facility->shelterResource->total_beds }}</div>
                <div class="col-md-2">{{ $facility->shelterResource->filled_beds }}</div>
                <div class="col-md-1">@if($facility->shelterResource->accepts_children == 1)Yes @else No @endif</div>
                <div class="col-md-1">@if($facility->shelterResource->accepts_men == 1)Yes @else No @endif</div>
                <div class="col-md-1">@if($facility->shelterResource->accepts_women == 1)Yes @else No @endif</div>
                <div class="col-md-1">@if($facility->shelterResource->vetran == 1)Yes @else No @endif</div>
                <div class="col-md-1">@if($facility->shelterResource->disability == 1)Yes @else No @endif</div>
            </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
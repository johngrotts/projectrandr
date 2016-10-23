@extends('../layouts.app')
<!-- client create file -->
@section('content')
<h1>Project Relief and Recovery</h1>

        
<form action="/clients/clientconfirm" method="POST"/>
	{{ csrf_field() }} {{-- token that protects the form --}}
    <label>First name:</label>
    <input type="text" name="First_Name" />
    <label>Last name:</label>
    <input type="text" name="Last_Name" />
    <br/>
    <label>Date of Birth:</label>
    <input type="text" name="DOB" />
    <br/>
    <p1>Do you have an existing profile? Let's Check!</p1></br>
    <button type="submit">Submit</button><br/>
</form>

	<!-- displays errors -->
	@if (count($errors))
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif

@endsection
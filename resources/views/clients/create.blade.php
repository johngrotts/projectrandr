@extends('../layouts.app')
<!-- client create file -->
@section('content')
	<h1> Add a New Client</h1>

	<form method="POST" action="/clients" class="client-form">
	{{ csrf_field() }} {{-- token that protects the form --}}
		<div class="form-group">
			<label for="First_Name">First Name</label> 
			<input type="text" name="First_Name" class="form-control" value="{{ old('First_Name') }}" placeholder="First Name">
		</div>
		<div class="form-group">
				<label for="Middle_Name">Middle Name</label> 
			<input type="text" name="Middle_Name" class="form-control" value="{{ old('Middle_Name') }}" placeholder="Middle Name">
		</div>
		<div class="form-group">
				<label for="Last_Name">Last Name</label> 
			<input type="text" name="Last_Name" class="form-control" value="{{ old('Last_Name') }}" placeholder="Last Name">
		</div>
		<div class="form-group">
				<label for="SSN">SSN</label> 
			<input type="text" name="SSN" class="form-control" value="{{ old('SSN') }}" placeholder="SSN">
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-primary">Add Client</button>
		</div>
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
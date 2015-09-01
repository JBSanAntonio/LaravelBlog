<!DOCTYPE html>
<html lang="en">
<head>
	@yield('title')

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/calculator.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
	
    <title>Portfolio</title>
 
</head>

<body>

{{-- add navbar with login here --}}
@include('partials.resportf-navbar')
{{-- 
@include('partials.header') --}}
	
	
	@if (Session::has('successMessage'))
    	<div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
	@endif
	@if (Session::has('errorMessage'))
    	<div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
	@endif

	@if($errors->has())

		<div class="alert alert-danger" role="alert">
			<ul>
				{{-- added html for validation to show in all files --}}
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

	<main class ="container">
	@yield('content')
	</main>

{{-- latest compiled and minified Javascript --}}
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
@include('partials.resportf-footer')
</html>
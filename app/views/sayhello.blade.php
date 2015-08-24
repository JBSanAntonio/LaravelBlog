@extends('layouts.master')

@section('content')

	@if($name =='')
		<h1>You have a name, yo</h1>
	@else
	{{-- below is same as <?php echo strip_tages(htmlsepcialchars($name)...) --}}
		<h1>Hello, {{{ $name}}}!</h1>
	@endif

	@foreach($ads as $ad)
		<h1>{{{ $ad->title}}}</h1>
		<p>{{{ $ad->description}}}</p>
	@endforeach


@stop
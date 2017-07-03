@extends('layouts.app')

@section('content')
<div class="container">

	@if(isset($abouts))
		<h2>Užsakymo taisymas - {{$abouts->name}}</h2>
		{!! Form::model($abouts, ['route' => ['about.update', $abouts->id], 'method' => 'put']) !!}
	@else
		{!! Form::open(['route' => ['about.store'], 'method' => 'POST']) !!}
	@endif

	<div class="form-group">
		<h4>Antraštė</h4>
		{!! Form::text('title', null) !!}
	</div>

	<div class="form-group">
		<h4>Komentaras</h4>
		{!! Form::textarea('comment', null) !!}
	</div>





	{!! Form::submit('Saugoti', ['class' => 'btn btn-primary']) !!}
		{!! Form::close() !!}

		
		@if(isset($abouts))


			{!! Form::open(['route'=> ['about.destroy', $abouts->id], 'method' => 'DELETE']) !!}
			{!! Form::submit('Ištrinti', ['class' => 'btn btn-danger']) !!}



		{!! Form::close() !!}
		@endif
</div>
 @endsection
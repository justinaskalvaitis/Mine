@extends('layouts.app')

@section('content')

<div class="container">

	@if(isset($contacts))
		<h2>Kontaktų taisymas - {{$contacts->name}}</h2>
		{!! Form::model($contacts, ['route' => ['contacts.update', $contacts->id], 'method' => 'put']) !!}
	@else
		{!! Form::open(['route' => ['contacts.store'], 'method' => 'POST']) !!}
	@endif

	<div class="form-group">
		<h4>Antraštė</h4>
		{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'title']) !!}
	</div>

	<div class="form-group">
		<h4>Adresas</h4>
		{!! Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'address']) !!}
	</div>

	<div class="form-group">
		<h4>Elektroninis paštas</h4>
		{!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'email']) !!}
	</div>

	<div class="form-group">
		<h4>Telefonas</h4>
		{!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'phone']) !!}
	</div>

	<div class="form-group">
		<h4>Darbo valandos</h4>
		{!! Form::textarea('hours', null, ['class' => 'form-control', 'placeholder' => 'hours']) !!}
	</div>

	<div class="form-group">
		<h4>Žemėlapis</h4>
		{!! Form::textarea('map', null, ['class' => 'form-control', 'placeholder' => 'map']) !!}
	</div>

	{!! Form::submit('Saugoti', ['class' => 'btn btn-primary']) !!}




	{!! Form::close() !!}
</div>
@endsection
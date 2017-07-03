@extends('layouts.app')

@section('content')
<div class="container">
	@if(isset($orders))
		<h2>Užsakymo taisymas - {{$orders->name}}</h2>
		{!! Form::model($orders, ['route' => ['orders.update', $orders->id], 'method' => 'put']) !!}
	@else
		{!! Form::open(['route' => ['orders.store'], 'method' => 'POST']) !!}
		<h2 class="thumbnail">Klauskite kas domina, su jumis susisieksime kelių valandų bėgyje.</h2>
	@endif

	<div class="form-group">
		<h4>Vardas</h4>
		{!! Form::text('name', null) !!}
	</div>

	<div class="form-group">
		<h4>Namų adresas</h4>
		{!! Form::text('address', null) !!}
	</div>

	<div class="form-group">
		<h4>Elektroninis paštas</h4>
		{!! Form::text('email', null) !!}
	</div>

	<div class="form-group">
		<h4>Phone</h4>
		{!! Form::text('phone', null) !!}
	</div>

	<div class="form-group">
		<h4>Komentaras</h4>
		{!! Form::textarea('comment', null) !!}
	</div>

	

	{!! Form::submit('Išsaugoti', ['class' => 'btn connectbtn']) !!}
	{!! Form::close() !!}

	@if(Auth::user() && Auth::user()->isAdmin())
		@if(isset($orders))


		{!! Form::open(['route'=> ['orders.destroy', $orders->id], 'method' => 'DELETE']) !!}
		{!! Form::submit('Ištrinti', ['class' => 'btn connectbtn']) !!}



		{!! Form::close() !!}
		@endif
	@endif
</div>
@endsection
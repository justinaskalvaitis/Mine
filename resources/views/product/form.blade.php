 @extends('layouts.app')
 
 @section('content')
<div class="container">
 
		@if(isset($products))
		<h2>Produkto - {{$products->title}} - tvarkymas</h2>
		{!! Form::model($products, ['route' => ['products.update', $products->id], 'method' => 'put']) !!}
		@else
		{!! Form::open(['route' => ['products.store'], 'method' => 'POST']) !!}
		@endif
	
 
	<div class="form-group">
	<h4>Antraštė</h4>
	{!! Form::text('title', null) !!}
	</div>
 
	<div class="form-group">
	<h4>Aprašymas</h4>
	{!! Form::textarea('description', null) !!}
	</div>
 
	<div class="form-group">
	<h4>Kaina</h4>
	{!! Form::text('price', null) !!}
	</div>

	<div class="form-group">
	<h4>Tipas(kategorija)</h4>
	{!! Form::text('type', null) !!}
	</div>
	
	<div class="form-group">
	<h4>Nuotrauka</h4>
	{!!Form::text('photo', null, ['class' => 'form-control']) !!}
	</div>
	



	{!! Form::submit('Saugoti', ['class' => 'btn btn-primary']) !!}
	{!! Form::close() !!}

	@if(Auth::user() && Auth::user()->isAdmin())
		@if(isset($products))

		
		{!! Form::open(['route'=> ['products.destroy', $products->id], 'method' => 'DELETE']) !!}
		{!! Form::submit('Trinti', ['class' => 'btn btn-danger']) !!}
		@endif



		{!! Form::close() !!}
	@endif
</div>
 @endsection
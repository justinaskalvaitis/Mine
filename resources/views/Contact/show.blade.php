@extends('layouts.app')

@section('content')
<div class="container contact">
	<div class="row">
		<div class="col-md-5 contactstwo">
			<h2><strong>Kontaktai</strong></h2>		
				<p><strong>{{ $contacts['title']}}</strong></p>
				<p><strong>Adresas: {{ $contacts['address']}}</strong></p>
				<p><strong>El. paštas: {{ $contacts['email']}}</strong></p>
				<p><strong>Telefonas: {{ $contacts['phone']}}</strong></p>		
		</div>
		<div class="col-md-7 contact">
			<strong>{!! $contacts->hours !!}</strong>
			@if(Auth::user() && Auth::user()->isAdmin())
				<a href="{{ route('contacts.edit', $contacts->id) }}" class="btn btn-success">Keisti</a>
			@endif
		</div>
		
	</div>
</div>
<div >
	{!! $contacts['map'] !!}
</div>


@endsection
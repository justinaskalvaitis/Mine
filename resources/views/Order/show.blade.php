@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10  thumbnail">
			<h2>{{ $order->name }}</h2>
			<ul>
				<li>Elektorninis paštas: {{$order->email}} </li>	
				<li>Adresas: {{ $order->address }} eur</li>			
				<li>Telefonas: {{ $order->phone }}</li>
				<li>Klausimai: {{ $order->comment }}</li>

			</ul>
		</div>
	</div>
</div>
@endsection
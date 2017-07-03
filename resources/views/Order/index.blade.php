@extends('layouts.app')

@section('content')
<div class="container">
<h2>Užsakymai</h2>
	@foreach($orders->chunk(3) as $chunk)
	<div class="row">
		@foreach($chunk as $order)
			<div class="col-md-4">
				<div class="thumbnail">
					<a href ="{{ route('orders.show', $order->id) }}"><p>{{ $order->name }}</p></a>
 						
 						<p>{{ $order->phone }}</p>
 						<p>{{ $order->created_at }}</p>
 						@if(Auth::user() && Auth::user()->isAdmin())
							<a href="{{ route('orders.edit', $order->id) }}" class="btn btn-success">Keisti</a>
						@endif
						
 					</div>
 				</div>
 		@endforeach
					
	</div>
	@endforeach
				
</div>
@endsection
@extends('layouts.tech')

@section('content')
<div class="container">
	<div class="connectbtnhover">
		<a href="{{ route('orderstwo.create2') }}" class="connectbtn col-md-offset-5"><i class="fa fa-envelope" aria-hidden="true"></i> Turite klausimų?</a>
	</div>

<h2><strong>Produktai</strong></h2>
	@foreach($products->chunk(3) as $chunk)
	<div class="row">

		@foreach($chunk as $product)
			<div class="col-md-4">
				<div class="thumbnail">

					<a href ="{{ route('tech.show', $product->id) }}"><img src="{{ $product->photo }}"></a>
					<p><strong>{{ $product->title }}</strong></p>
 						<p><strong>{{ $product->description }}</strong></p>
						<p><strong>Kaina: {{ $product->price }} Eur </strong></p>
						@if(Auth::user() && Auth::user()->isAdmin())
							<a href="{{ route('tech.edit', $product->id) }}" class="btn btn-success">Keisti</a>
						@endif
 					</div>
 				</div>
 		@endforeach
					
	</div>
	@endforeach
				
</div>
@endsection
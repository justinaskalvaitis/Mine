@extends('layouts.juice')

@section('content')
<div class="container">
	

<h2><strong>Išpilstymo taros</strong></h2>
	@foreach($products->chunk(3) as $chunk)
	<div class="row">

		@foreach($chunk as $product)
			<div class="col-md-4">
				<div class="thumbnail">

					<a href ="{{ route('juice.show', $product->id) }}"><img src="{{ $product->photo }}"></a>
					<p><strong>{{ $product->title }}</strong></p>
 						<p><strong>{{ $product->description }}</strong></p>
						<p><strong>Kaina: {{ $product->price }} Eur </strong></p>
						@if(Auth::user() && Auth::user()->isAdmin())
							<a href="{{ route('juice.edit', $product->id) }}" class="btn btn-success">Keisti</a>
						@endif
 					</div>
 				</div>
 		@endforeach
					
	</div>
	@endforeach
				
</div>
@endsection
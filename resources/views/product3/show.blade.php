@extends('layouts.juice')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-offset-3 thumbnail">
			<h3><strong>{{ $products->title }}</strong></h3>

			<img src="{{ $products->photo }}" class="img-responsive" width="500" >
			<p><strong>{{$products->description}}</strong></p>
		</div>
	</div>
</div>
@endsection
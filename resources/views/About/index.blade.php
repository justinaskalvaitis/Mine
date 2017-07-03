@extends('layouts.app')

@section('content')
<div class="container">
		@foreach($abouts->chunk(1) as $chunk)
	<div class="row">
		@foreach($chunk as $about)
			<div class="col-md-12">
				<div class="thumbnail aboutUs">
 						<h3><strong>{{ $about->title }}</strong></h3>
 						<p><strong>{{ $about->comment }}</strong></p>
 						@if(Auth::user() && Auth::user()->isAdmin())
						<a href="{{ route('about.edit', $about->id) }}" class="btn btn-success">Keisti</a>
						@endif
 					</div>
 				</div>
 		@endforeach
					
	</div>
	@endforeach

</div>
@endsection
@extends('layouts.codiexp')
@section('contenido')
<section id="highlights" class="wrapper style3">
	<div class="title">video</div>
	<div class="container">
		<div class="row aln-left">        
			<div class="col-12 col-12-medium">
				@forelse($videos as $video)
					<iframe width="560" height="315" src="{{$video->url}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					<a class="btn btn-primary" href="{{ URL::previous() }}" role="button">Volver</a><p></p>
				@empty
					<label for="">ningun video registrado</label>
					<a class="btn btn-primary" href="{{ URL::previous() }}" role="button">Volver</a><p></p>
				@endforelse
			</div> 
		</div>
	</div>
</section>
@endsection
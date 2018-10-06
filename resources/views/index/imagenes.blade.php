@extends('layouts.codiexp')
@section('contenido')
<section id="highlights" class="wrapper style3">
	<div class="title">Imagenes</div>
	<div class="container">
	    <div class="row">
	    	<div class="row aln-left">
	    		<div class="col-12 col-12-medium">
                    @forelse($imagenes as $ima )
                        <!--a href="#" class="css3-4" data-target="#modal-vista-{{$ima->id}}" data-toggle="modal"</a>-->
                        <img src="{{asset('images/proyectos/'.$ima->imagen)}}" alt="..." class="" width="800px" height="500px">
                        <a class="btn btn-primary" href="{{ URL::previous() }}" role="button">Volver</a><p></p>
                    @empty
                        <label for="">ninguna imagen registrada</label> 
                        <a class="btn btn-primary" href="{{ URL::previous() }}" role="button">Volver</a><p></p>
                    @endforelse
                </div>                
            </div> 
        </div>
    </div>
</section>
@endsection
@extends('layouts.codiexp')
@section('contenido')
<section>
	<div class="container">
	<h3>Nuestros Miembros</h3>
		<div class="row aln-center">
			
        @foreach($investigador as $in)
			<div class="col-4 col-12-medium">
       
				<section class="highlight">
					<img src="{{asset('images/perfil/'.$in->foto)}}" class="image" alt="" width="250px" height="250px" />
					<h3><a href="#">{{$in->nombre}} {{$in->apellido}}</a></h3>
					<p>{{ substr($in->perfil, 0, 200)}}...</p>
					<ul class="actions">
						<li><a href="{{route('investigador',$in->id)}}" class="button style1">Leer más</a></li>
                    </ul>        
                </section>
           
            </div>
            @endforeach
		</div>
	</div>
</section>

@endsection
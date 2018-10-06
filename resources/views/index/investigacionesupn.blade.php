@extends('layouts.codiexp')
@section('contenido')
<section>	
	<div class="container">
		<!--header class="center">
    		<h2>Investigaciones</h2>
    	</header-->
		<div class="row aln-center">
        @foreach($investigacion as $in)
			<div class="col-4 col-12-medium">
       
				<section class="highlight">
					<!--a href="#" class="image featured-rounded-circle"><img src="{{asset('images/perfil/'.$in->foto)}}" alt="" height: 50px width: 50px  /></a> -->
					<h3><a href="#">{{$in->titulo}}</a></h3>
					<p>{{ substr($in->descripcion, 0, 200)}}...</p>
					<ul class="actions">
						<li><a href="{{route('investigacion',$in->id)}}" class="button style1">Leer más</a></li>
                    </ul>        
                </section>
           
            </div>
            @endforeach
		</div>
	</div>
</section>

@endsection
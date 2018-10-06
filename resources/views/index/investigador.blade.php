@extends('layouts.codiexp')
@section('contenido')
@if(count($investigador)>0)
<section id="highlights" class="wrapper style3">
	<div class="title">{{$investigador[0]->nombre.' '.$investigador[0]->apellido}}</div>
	<div class="container">
		<div class="row aln-left">
        
			<div class="col-4 col-12-medium">       
				<section class="highlight">
					<a  class="image featured">
                        <img src="{{asset('images/perfil/'.$investigador[0]->foto)}}" alt="" width="150px" height="200px"  />
                    </a>
                </section>
            </div>
            <div class="col-4 col-12-medium">
                <div class="info-prof" style="overflow: hidden;display: block;">
                    <h2 class="hidden-xs">Perfil</h2>
                    <p>{{$investigador[0]->perfil}}</p>
                </div>
            </div>
           @if($inves==true)
            <div class="col-4 col-12-medium">
                <div class="info-prof" style="overflow: hidden;display: block;">
                    <h2 class="hidden-xs">Investigaciones</h2>
                    @foreach($investigador as $in)
                    <p>{{$in->titulo}}</p>
                    @endforeach
                </div>
            </div>
            @endif
		</div>
	</div>
</section>
@else
<section id="highlights" class="wrapper style3">
	<div class="title"></div>
	<div class="container">
		<div class="row aln-left">
        
			<div class="col-4 col-12-medium">       
				<section class="highlight">
					Realizando investigación se publicara pronto
                </section>
            </div>
            
		</div>
	</div>
</section>
@endif
@endsection
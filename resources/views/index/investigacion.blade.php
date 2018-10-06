@extends('layouts.codiexp')
@section('contenido')

	<section>
		<div class="row aln-left">
            <div class="table-wrapper">
				<table class="alt">
					<thead>
						<tr>
                            <th>Titulo</th>
                            <th>Año</th>
                            <th>Imagenes</th>
                            <th>video</th>
						</tr>
					</thead>
					<tbody>
                        <tr>
                            <td>{{$investigacion[0]->titulo}}</td>
                            <td>{{$investigacion[0]->año}}</td>
                            <td><a href="{{route('imagenes',$investigacion[0]->id)}}" class="button primary small">Imagenes</a></td>
                            <td><a class="button primary small" href="{{route('video',$investigacion[0]->id)}}" role="button">video</a></td>
                        </tr>
					</tbody>
                </table>
				<div>
					<embed src="{{asset('archivos/'.$investigacion[0]->ruta.'#toolbar=0')}}" width="900" height="1064">
				</div>               
            </div>
        </div>
    </section>

@endsection
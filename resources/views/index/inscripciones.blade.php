@extends('layouts.codiexp')
@section('contenido')
<div class="row">
		<div class="clas-lg-6 col-md-6 col-sm-6 col-xs-12">
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif
		</div>
	</div>
<section>
    <header>
	    <h2>Inscripciones de la Comunidad de Investigación Científica Experimental</h2>
    </header>
    <form method="post" action="{{url('inscripciones')}}">
        {{csrf_field()}}
        <div class="row gtr-uniform">
            <div class="col-6 col-12-xsmall">
                <label for="nombres">Nombres</label>
	        	<input type="text" name="nombres" id="nombres" value="" placeholder="Nombres" value="{{ old('nombres') }}" >
            </div>
            <div class="col-6 col-12-xsmall">
                <label for="apellidos-paterno">Apellidos Paterno</label>
				<input type="text" name="apellidos-paterno" id="apellidos-paterno" value="" placeholder="Apellidos Paterno" value="{{ old('apellido-paterno') }}" >
            </div>
            <div class="col-6 col-12-xsmall">
                <label for="apellidos-materno">Apellidos Materno</label>
				<input type="text" name="apellidos-materno" id="apellidos-materno" value="" placeholder="Apellidos Materno" value="{{ old('apellidos-materno') }}" >
            </div>
            <div class="col-6 col-12-xsmall">
                <label for="ciclo">Ciclo</label>
				<select name="ciclo" id="ciclo">
                <option value="">seleccione...</option>
                @for ($i = 1; $i < 11; $i++)
					<option value="{{ $i }}">{{ $i }}</option>
                @endfor
				</select>
            </div>
            <div class="col-6 col-12-small">
                <label for="curso-aldayg">Carrera</label>
				<input type="text" name="carrera" id="carrera" value="" placeholder="carrera" value="{{ old('carrera') }}" >
            </div>
            <div class="col-6 col-12-xsmall">
                <label for="telefono">Número de teléfono</label>
				<input type="text" name="telefono" id="telefono" value="" placeholder="Número de teléfono" value="{{ old('telefono') }}">
            </div>
            <div class="col-6 col-12-xsmall">
                <label for="correo">Correo Institucional (n00000000@upn.pe) </label>
				<input type="email" name="correo" id="correo" value="" placeholder="Correo Institucional" value="{{ old('correo') }}" >
            </div>
            <div class="col-6 col-12-xsmall">
                <label for="correo1">Correo alternativo</label>
				<input type="email" name="correo1" id="correo1" value="" placeholder="Correo alternativo" value="{{ old('correo1') }}" >
            </div>
            <div class="col-12 col-12-small">
                <label for="declaracion">Declaro que la información personal brindada es veráz, así como también me comprometo a cumplir con las cláusulas estipuladas por la comunidad.</label>
				<input type="radio" id="declaracion" name="declaracion" value="si" >
                <label for="declaracion">Si</label>
            </div>
            <div class="col-6 col-12-xsmall">
                <button type="submit" class="primary" >Enviar</button>
            </div>
		</div>
    </form>
</section>
@endsection
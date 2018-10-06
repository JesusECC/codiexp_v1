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
	    <h2>Inscripciones del evento </h2>
    </header>
    <form method="post" action="{{ url('evento/save') }}">
        @csrf
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
                <label for="Carrera">Carrera</label>
				<input type="text" name="carrera" id="carrera" value="" placeholder="carrera" value="{{ old('carrera') }}" >
            </div>
            <div class="col-6 col-12-small">
                <label for="sede">Sede</label>
                <select name="sede" id="sede">
                    <option value="">seleccione...</option>
                    <option value="Comas">Comas</option>
                    <option value="sjl">San Juan de Lurigancho</option>
                    <option value="Los Olivos">Los Olivos</option>
                    <option value="Breña">Breña</option>
                    <option value="Trujillo1">Trujillo (Campus El Molino)</option>
                    <option value="Trujillo2">Trujillo (Campus San isidro)</option>
                    <option value="Cajamarca">Cajamarca</option>       
                </select>             
				<!-- <input type="text" name="sede" id="sede" value="" placeholder="sede" value="{{ old('sede') }}" > -->
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
                <label for="declaracion">interesado en:</label>
				<div class="col-4 col-4-small">
                    <input type="radio" id="Hackathon_Cisco" name="Hackathon_Cisco" value="si" >
                    <label for="Hackathon_Cisco">Hackathon Cisco</label>

                    <input type="radio" id="Concurso_Hult_Prize" name="Concurso_Hult_Prize" value="si" >
                    <label for="Concurso_Hult_Prize">Concurso Hult Prize</label>

                    <input type="radio" id="Cursos_Cisco" name="Cursos_Cisco" value="si" >
                    <label for="Cursos_Cisco">Cursos Cisco</label>
                </div>
                <div class="col-4 col-4-small">
                    <input type="radio" id="Cursos_Emprendimiento" name="Cursos_Emprendimiento" value="si" >
                    <label for="Cursos_Emprendimiento">Cursos Emprendimiento</label>

                    <input type="radio" id="Certificaciones_Cisco" name="Certificaciones_Cisco" value="si" >
                    <label for="Certificaciones_Cisco">Certificaciones Cisco</label>

                    <input type="radio" id="Comunidad_Investigacion" name="Comunidad_Investigacion" value="si" >
                    <label for="Comunidad_Investigacion">Comunidad de Investigacion</label>
                </div>
            </div>

            <div class="col-6 col-12-xsmall">
                <button type="submit" class="primary" >Enviar</button>
            </div>
		</div>
    </form>
</section>
@endsection
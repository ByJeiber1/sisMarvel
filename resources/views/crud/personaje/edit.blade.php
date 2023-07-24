@extends ('layouts.admin')
@section ('contenido')
<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Personaje: {{$personaje->perNombre1}}</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif
            <form method="POST" action="{{ route('personaje.update', $personaje->personajeID) }}">
            @csrf
            @method('PATCH')
            <div class="form-group">
            	<label for="nombre">Nombre</label>
            	<input type="text" name="perNombre1" class="form-control" value="{{ $personaje->perNombre1 }}" placeholder="Nombre...">
            </div>
			<div class="form-group">
            	<label for="nombre2">Nombre2</label>
            	<input type="text" name="perNombre2" class="form-control" value="{{ $personaje->perNombre2 }}"  placeholder="Nombre...">
            </div>
			<div class="form-group">
            	<label for="apellido">Apellido</label>
            	<input type="text" name="perApellido1" class="form-control" value="{{ $personaje->perApellido1 }}"  placeholder="Apellido...">
            </div>
			<div class="form-group">
            	<label for="apellido2">Apellido2</label>
            	<input type="text" name="perApellido2" class="form-control" value="{{ $personaje->perApellido2 }}"  placeholder="Apellido...">
            </div>
			<div class="form-group">
            	<label for="ColorPelo">ColorPelo</label>
            	<input type="text" name="perColorPelo" class="form-control" value="{{ $personaje->perColorPelo }}"  placeholder="ColorPelo...">
            </div>
			<div class="form-group">
            	<label for="ColorOjos">ColorOjos</label>
            	<input type="text" name="perColorOjos" class="form-control" value="{{ $personaje->perColorOjos }}"  placeholder="ColorOjos...">
            </div>
			<div class="form-group">
            	<label for="EdoMarital">EdoMarital</label>
            	<input type="text" name="perEdoMarital" class="form-control" value="{{ $personaje->perEdoMarital }}"  placeholder="EdoMarital...">
            </div>
			<div class="form-group">
            	<label for="FraseMasCelebre">FraseMasCelebre</label>
            	<input type="text" name="perFraseMasCelebre" class="form-control" value="{{ $personaje->perFraseMasCelebre }}"  placeholder="FraseMasCelebre...">
            </div>
			<div class="form-group">
            	<label for="Genero">Genero</label>
            	<input type="text" name="perGenero" class="form-control" value="{{ $personaje->perGenero }}"  placeholder="Genero...">
            </div>
			<div class="form-group">
            	<label for="PrimeraAparicionComic">PrimeraAparicionComic</label>
            	<input type="text" name="perPrimeraAparicionComic" class="form-control" value="{{ $personaje->perPrimeraAparicionComic }}"  placeholder="PrimeraAparicionComic...">
            </div>
			<div class="form-group">
            	<label for="personajeCivil">personajeCivil</label>
            	<input type="text" name="personajeCivil" class="form-control" value="{{ $personaje->personajeCivil }}"  placeholder="personajeCivil...">
            </div>
			<div class="form-group">
            	<label for="personajeHeroe">personajeHeroe</label>
            	<input type="text" name="personajeHeroe" class="form-control" value="{{ $personaje->personajeHeroe }}"  placeholder="personajeHeroe...">
            </div>
			<div class="form-group">
            	<label for="personajeVillano">personajeVillano</label>
            	<input type="text" name="personajeVillano" class="form-control" value="{{ $personaje->personajeVillano }}"  placeholder="personajeVillano...">
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
            </form>
            
		</div>
	</div>
@stop
@extends ('layouts.admin')
@section ('contenido')
<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nueva Personaje</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::open(array('url'=>'crud/personaje','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}
            <div class="form-group">
            	<label for="nombre">Nombre</label>
            	<input type="text" name="perNombre1" class="form-control" placeholder="Nombre...">
            </div>
			<div class="form-group">
            	<label for="nombre2">Nombre2</label>
            	<input type="text" name="perNombre2" class="form-control" placeholder="Nombre...">
            </div>
			<div class="form-group">
            	<label for="apellido">Apellido</label>
            	<input type="text" name="perApellido1" class="form-control" placeholder="Apellido...">
            </div>
			<div class="form-group">
            	<label for="apellido2">Apellido2</label>
            	<input type="text" name="perApellido2" class="form-control" placeholder="Apellido...">
            </div>
			<div class="form-group">
            	<label for="ColorPelo">ColorPelo</label>
            	<input type="text" name="perColorPelo" class="form-control" placeholder="ColorPelo...">
            </div>
			<div class="form-group">
            	<label for="ColorOjos">ColorOjos</label>
            	<input type="text" name="perColorOjos" class="form-control" placeholder="ColorOjos...">
            </div>
			<div class="form-group">
            	<label for="EdoMarital">EdoMarital</label>
            	<input type="text" name="perEdoMarital" class="form-control" placeholder="EdoMarital...">
            </div>
			<div class="form-group">
            	<label for="FraseMasCelebre">FraseMasCelebre</label>
            	<input type="text" name="perFraseMasCelebre" class="form-control" placeholder="FraseMasCelebre...">
            </div>
			<div class="form-group">
            	<label for="Genero">Genero</label>
            	<input type="text" name="perGenero" class="form-control" placeholder="Genero...">
            </div>
			<div class="form-group">
            	<label for="PrimeraAparicionComic">PrimeraAparicionComic</label>
            	<input type="text" name="perPrimeraAparicionComic" class="form-control" placeholder="PrimeraAparicionComic...">
            </div>
			<div class="form-group">
            	<label for="personajeCivil">personajeCivil</label>
            	<input type="text" name="personajeCivil" class="form-control" placeholder="personajeCivil...">
            </div>
			<div class="form-group">
            	<label for="personajeHeroe">personajeHeroe</label>
            	<input type="text" name="personajeHeroe" class="form-control" placeholder="personajeHeroe...">
            </div>
			<div class="form-group">
            	<label for="personajeVillano">personajeVillano</label>
            	<input type="text" name="personajeVillano" class="form-control" placeholder="personajeVillano...">
            </div>


            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

			{!!Form::close()!!}		
            
		</div>
	</div>
@stop
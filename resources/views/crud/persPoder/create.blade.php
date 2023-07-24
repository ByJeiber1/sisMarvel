@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nueva persPoder</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif
		</div>	
	</div>

			{!!Form::open(array('url'=>'crud/persPoder','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}
	<div class="row">
	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label>PersonajeID</label>
				<select name="personajeID" class="form-control">
					@foreach ($personajes as $pod)
					<option value="{{$pod->personajeID}}">{{$pod->personajeID}}</option>
					@endforeach
				</select>
            </div>
		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label>PoderID</label>
				<select name="poderID" class="form-control">
					@foreach ($poderes as $pod)
					<option value="{{$pod->poderID}}">{{$pod->poderID}}</option>
					@endforeach
				</select>
            </div>
		</div>
		
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
            	<label for="obtencionPoder">Obtencion Poder</label>
            	<input type="text" name="obtencionPoder" class="form-control" placeholder="obtencionPoder...">
            </div>
		</div>

		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label>Personaje Hereda</label>
				<select name="personajeHerencia" class="form-control">
					@foreach ($personajes as $pod)
					<option value="{{$pod->personajeID}}">{{$pod->personajeID}}</option>
					@endforeach
				</select>
            </div>
		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
		</div>

	</div>
            
			{!!Form::close()!!}		

@stop
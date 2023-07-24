@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo medPelicula</h3>
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
		

			{!!Form::open(array('url'=>'crud/medPelicula','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}
            <div class="row">
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label>directorCI</label>
				<select name="medPelDirectorCI" class="form-control">
					@foreach ($directores as $pod)
					<option value="{{$pod->directorCI}}">{{$pod->directorCI}}</option>
					@endforeach
				</select>
            </div>
		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
            	<label for="medPelDuracion">Duracion Peli</label>
            	<input type="text" name="medPelDuracion" class="form-control" placeholder="Duracion Peli...">
            </div>
		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
            	<label for="medPelTipo">Tipo Pelicula</label>
            	<input type="text" name="medPelTipo" class="form-control" placeholder="Tipo Peli...">
            </div>
		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
            	<label for="medPelCostProd">Costo Peli</label>
            	<input type="text" name="medPelCostProd" class="form-control" placeholder="Costo Peli...">
            </div>
		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
            	<label for="medPelGananc">Ganancia Pelicula</label>
            	<input type="text" name="medPelGananc" class="form-control" placeholder="Ganancia Peli...">
            </div>
		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
            	<label for="medPelDistrib">Distribuidor</label>
            	<input type="text" name="medPelDistrib" class="form-control" placeholder="Distribuidor Peli...">
            </div>
		</div>

		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
		</div>

			{!!Form::close()!!}		
            
		</div>
	</div>
@stop
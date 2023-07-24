@extends ('layouts.admin')
@section ('contenido')
<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nueva medSerie</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::open(array('url'=>'crud/medSerie','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}
            <div class="form-group">
            	<label for="medSerCanalTrans">medSerCanalTrans</label>
            	<input type="text" name="medSerCanalTrans" class="form-control" placeholder="medSerCanalTrans...">
            </div>
			<div class="form-group">
            	<label for="medSerCreador">medSerCreador</label>
            	<input type="text" name="medSerCreador" class="form-control" placeholder="medSerCreador">
            </div>
			<div class="form-group">
            	<label for="medSerTipo">medSerTipo</label>
            	<input type="text" name="medSerTipo" class="form-control" placeholder="medSerTipo">
            </div>
			<div class="form-group">
            	<label for="medSerTotEps">medSerTotEps</label>
            	<input type="text" name="medSerTotEps" class="form-control" placeholder="medSerTotEps">
            </div>
            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

			{!!Form::close()!!}		
            
		</div>
	</div>
@stop
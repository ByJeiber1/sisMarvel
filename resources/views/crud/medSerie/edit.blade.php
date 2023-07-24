@extends ('layouts.admin')
@section ('contenido')
<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar medSerie: {{$medSerie->medSerID}}</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif
            <form method="POST" action="{{ route('medSerie.update', $medSerie->medSerID) }}">
            @csrf
            @method('PATCH')
			<div class="form-group">
            	<label for="medSerCanalTrans">medSerCanalTrans</label>
            	<input type="text" name="medSerCanalTrans" class="form-control" value="{{ $medSerie->medSerCanalTrans }}" placeholder="medSerCanalTrans...">
            </div>
			<div class="form-group">
            	<label for="medSerCreador">medSerCreador</label>
            	<input type="text" name="medSerCreador" class="form-control" value="{{ $medSerie->medSerCreador }}" placeholder="medSerCreador">
            </div>
			<div class="form-group">
            	<label for="medSerTipo">medSerTipo</label>
            	<input type="text" name="medSerTipo" class="form-control" value="{{ $medSerie->medSerTipo }}" placeholder="medSerTipo">
            </div>
			<div class="form-group">
            	<label for="medSerTotEps">medSerTotEps</label>
            	<input type="text" name="medSerTotEps" class="form-control" value="{{ $medSerie->medSerTotEps}}" placeholder="medSerTotEps">
            </div>
            
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
            </form>
            
		</div>
	</div>
@stop
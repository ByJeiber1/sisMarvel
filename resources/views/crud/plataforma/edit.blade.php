@extends ('layouts.admin')
@section ('contenido')
<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Plataforma: {{$plataforma->platfNombre}}</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif
            <form method="POST" action="{{ route('plataforma.update', $plataforma->platfID) }}">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="platfNombre" class="form-control" value="{{ $plataforma->platfNombre }}" placeholder="Nombre...">
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
            </form>
            
		</div>
	</div>
@stop
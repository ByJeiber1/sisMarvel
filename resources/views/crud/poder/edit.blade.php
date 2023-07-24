@extends ('layouts.admin')
@section ('contenido')
<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Poder: {{$poder->poderNombre}}</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif
            <form method="POST" action="{{ route('poder.update', $poder->poderID) }}">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="poderNombre" class="form-control" value="{{ $poder->poderNombre }}" placeholder="Nombre...">
            </div>
			<div class="form-group">
                <label for="Descripcion">Descripcion</label>
                <input type="text" name="poderDescripcion" class="form-control" value="{{ $poder->poderDescripcion }}" placeholder="Descripcion...">
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
            </form>
            
		</div>
	</div>
@stop
@extends ('layouts.admin')
@section ('contenido')
<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar compañia: {{$compannia->companniaNombre}}</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif
            <form method="POST" action="{{ route('compannia.update', $compannia->companniaID) }}">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="companniaNombre" class="form-control" value="{{ $compannia->companniaNombre }}" placeholder="Nombre...">
            </div>
			<div class="form-group">
                <label for="Descripcion">Descripcion</label>
                <input type="text" name="companniaDescrp" class="form-control" value="{{ $compannia->companniaDescrp }}" placeholder="Descripcion...">
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
            </form>
            
		</div>
	</div>
@stop
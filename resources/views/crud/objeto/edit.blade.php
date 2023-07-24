@extends ('layouts.admin')
@section ('contenido')
<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Objeto: {{$objeto->objetoID}}</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif
            <form method="POST" action="{{ route('objeto.update', $objeto->objetoID) }}">
            @csrf
            @method('PATCH')
			<div class="row">
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div class="form-group">
						<label>Tipo Objeto</label>
						<select name="objetoTipoFK" class="form-control">
							@foreach ($tipoObjetos as $pod)
							<option value="{{$pod->tipoObjetoID}}">{{$pod->tipoObjetoID}}</option>
							@endforeach
						</select>
					</div>
				</div>

				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div class="form-group">
						<label for="objetoNombre">Nombre Objeto</label>
						<input type="text" name="objetoNombre" class="form-control" value="{{ $objeto->objetoNombre }}" placeholder="objetoNombre...">
					</div>
				</div>
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div class="form-group">
						<label for="objetoMaterialFabricacion">objeto Material Fabricacion</label>
						<input type="text" name="objetoMaterialFabricacion" class="form-control" value="{{ $objeto->objetoMaterialFabricacion }}" placeholder="objetoMaterialFabricacion...">
					</div>
				</div>
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div class="form-group">
						<label for="objetoDescripcion">objeto Descripcion</label>
						<input type="text" name="objetoDescripcion" class="form-control" value="{{ $objeto->objetoDescripcion }}" placeholder="objetoDescripcion...">
					</div>
				</div>
				
            
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
            </form>
            
		</div>
	</div>
@stop
@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar persPoder: {{$personajes->persNombre1}}</h3>
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
            <form method="POST" action="{{ route('persPoder.update', $personajes->personajeID) }}">
            @csrf
            @method('PATCH')
    <div class="row">
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
                <label>Poder</label>
				<select name="poderID" class="form-control">
					@foreach ($poderes as $pod)
                        @if ($pod->poderID==$persPoder->poderID)
                        <option value="{{$pod->poderID}}" select>{{$pod->poderNombre}}></option>
                        @else
                        <option value="{{$pod->poderID}}">{{$pod->poderNombre}}></option>
                        @endif
					<option value="{{$pod->poderID}}">{{$pod->poderNombre}}</option>
					@endforeach
				</select>
            </div>
		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
            <label>Personaje</label>
				<select name="personajeID" class="form-control">
					@foreach ($personajes as $pod)
                        @if ($pod->personajeID==$persPoder->personajeID)
                        <option value="{{$pod->personajeID}}" select>{{$pod->poderNombre}}></option>
                        @else
                        <option value="{{$pod->poderID}}">{{$pod->poderNombre}}></option>
                        @endif
					<option value="{{$pod->persID}}">{{$pod->perNombre1}}</option>
					@endforeach
				</select>
            </div>
		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
            	<label for="Descripcion">Obtencion Poder</label>
            	<input type="text" name="obtencionPoder" value="{{persPoder->obtencionPoder}}"  class="form-control" placeholder="obtencionPoder...">
            </div>
		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label>Personaje Hereda</label>
				<select name="personajeHerencia" class="form-control">
					@foreach ($personajes as $pod)
                        @if ($pod->personajeID==$persPoder->personajeID)
                        <option value="{{$pod->personajeID}}" select>{{$pod->perNombre1}}></option>
                        @else
                        <option value="{{$pod->personajeID}}">{{$pod->perNombre1}}></option>
                        @endif
					<option value="{{$pod->personajeID}}">{{$pod->perNombre1}}</option>
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
            </form>
            

@stop
@extends ('layouts.admin')
@section ('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Listado de Compañias <a href="compannia/create" class="btn btn-success">Nuevo</a></h3>
        {!! Form::open(array('url'=>'crud/compannia','method'=>'GET','autocomplete'=>'off','role'=>'search', 'id' => 'form-busqueda')) !!}
        <div class="form-group">
            <div class="input-group">
                <input type="text" class="form-control" name="searchText" placeholder="Buscar..." value="{{$searchText}}">
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-primary">Buscar</button>
                </span>
            </div>
        </div>
        {{Form::close()}}
    </div>
</div>


<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                    <th>compannia ID</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Opciones</th>
                </thead>
                @foreach ($compannias as $pod)
                <tr>
                    <td>{{$pod->companniaID}}</td>
                    <td>{{$pod->companniaNombre}}</td>
                    <td>{{$pod->companniaDescrp}}</td>
                    <td>
                        
                        <a href="{{ route('compannia.edit', $pod->companniaID) }}"><button class="btn btn-info">Editar</button></a>
                        <a href="" data-target="#modal-delete-{{$pod->companniaID}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                    </td>
                </tr>
                @include('crud.compannia.modal')
                @endforeach
            </table>
        </div>
        {{$compannias->render()}}
    </div>
</div>

@endsection
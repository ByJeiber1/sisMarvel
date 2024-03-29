@extends ('layouts.admin')
@section ('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Listado de Poderes <a href="poder/create"><button class="btn btn-success">Nuevo</button></a></h3>
        @include('crud.poder.search')
    </div>
    
</div>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                    <th>poderID</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Opciones</th>
                </thead>
                @foreach ($poderes as $pod)
                <tr>
                    <td>{{$pod->poderID}}</td>
                    <td>{{$pod->poderNombre}}</td>
                    <td>{{$pod->poderDescripcion}}</td>
                    <td>
                        
                        <a href="{{ route('poder.edit', $pod->poderID) }}"><button class="btn btn-info">Editar</button></a>
                        <a href="" data-target="#modal-delete-{{$pod->poderID}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                    </td>
                </tr>
                @include('crud.poder.modal')
                @endforeach
            </table>
        </div>
        {{$poderes->render()}}
    </div>
</div>

@endsection
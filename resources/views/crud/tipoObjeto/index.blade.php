@extends ('layouts.admin')
@section ('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Listado de tipo de Objetos <a href="tipoObjeto/create"><button class="btn btn-success">Nuevo</button></a></h3>
        @include('crud.tipoObjeto.search')
    </div>
    
</div>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                    <th>ID de tipoObjeto</th>
                    <th>Nombre de tipoObjeto</th>
                    <th>Opciones</th>
                </thead>
                @foreach ($tipoObjetos as $pod)
                <tr>
                    <td>{{$pod->tipoObjetoID}}</td>
                    <td>{{$pod->tipoObjetoNombre}}</td>
                    <td>
                        
                        <a href="{{ route('tipoObjeto.edit', $pod->tipoObjetoID) }}"><button class="btn btn-info">Editar</button></a>
                        <a href="" data-target="#modal-delete-{{$pod->tipoObjetoID}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                    </td>
                </tr>
                @include('crud.tipoObjeto.modal')
                @endforeach
            </table>
        </div>
        {{$tipoObjetos->render()}}
    </div>
</div>

@endsection
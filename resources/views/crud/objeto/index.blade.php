@extends ('layouts.admin')
@section ('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Listado de Objetos <a href="objeto/create"><button class="btn btn-success">Nuevo</button></a></h3>
        @include('crud.objeto.search')
    </div>
    
</div>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                    <th>Id objeto</th>
                    <th>objetoTipoFK</th>
                    <th>Objeto Nombre</th>
                    <th>Objeto Material Fabricacion</th>
                    <th>Objeto Descripcion</th>
                    <th>Opciones</th>
                </thead>
                @foreach ($objetos as $ocu)
                <tr>
                    <td>{{$ocu->objetoID}}</td>
                    <td>{{$ocu->objetoTipoFK}}</td>
                    <td>{{$ocu->objetoNombre}}</td>
                    <td>{{$ocu->objetoMaterialFabricacion}}</td>
                    <td>{{$ocu->objetoDescripcion}}</td>
                    <td>
                        
                        <a href="{{ route('objeto.edit', $ocu->objetoID) }}"><button class="btn btn-info">Editar</button></a>
                        <a href="" data-target="#modal-delete-{{$ocu->objetoID}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                    </td>
                </tr>
                @include('crud.objeto.modal')
                @endforeach
            </table>
        </div>
        {{$objetos->render()}}
    </div>
</div>

@endsection
@extends ('layouts.admin')
@section ('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Listado de Ocupacion <a href="ocupacion/create"><button class="btn btn-success">Nuevo</button></a></h3>
        @include('crud.ocupacion.search')
    </div>
    
</div>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                    <th>ocupacionID</th>
                    <th>ocupacionNombre</th>
                    <th>Opciones</th>
                </thead>
                @foreach ($ocupaciones as $ocu)
                <tr>
                    <td>{{$ocu->ocupacionID}}</td>
                    <td>{{$ocu->ocupacionNombre}}</td>
                    <td>
                        
                        <a href="{{ route('ocupacion.edit', $ocu->ocupacionID) }}"><button class="btn btn-info">Editar</button></a>
                        <a href="" data-target="#modal-delete-{{$ocu->ocupacionID}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                    </td>
                </tr>
                @include('crud.ocupacion.modal')
                @endforeach
            </table>
        </div>
        {{$ocupaciones->render()}}
    </div>
</div>

@endsection
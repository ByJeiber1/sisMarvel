@extends ('layouts.admin')
@section ('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Listado de Plataforma <a href="plataforma/create"><button class="btn btn-success">Nuevo</button></a></h3>
        @include('crud.plataforma.search')
    </div>
    
</div>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                    <th>platfID</th>
                    <th>platfNombre</th>
                    <th>Opciones</th>
                </thead>
                @foreach ($plataformas as $pla)
                <tr>
                    <td>{{$pla->platfID}}</td>
                    <td>{{$pla->platfNombre}}</td>
                    <td>
                        
                        <a href="{{ route('plataforma.edit', $pla->platfID) }}"><button class="btn btn-info">Editar</button></a>
                        <a href="" data-target="#modal-delete-{{$pla->platfID}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                    </td>
                </tr>
                @include('crud.plataforma.modal')
                @endforeach
            </table>
        </div>
        {{$plataformas->render()}}
    </div>
</div>

@endsection
@extends ('layouts.admin')
@section ('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Listado de Directores <a href="director/create"><button class="btn btn-success">Nuevo</button></a></h3>
        @include('crud.director.search')
    </div>
    
</div>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                    <th>director CI</th>
                    <th>director Nombre</th>
                    <th>Opciones</th>
                </thead>
                @foreach ($directores as $ocu)
                <tr>
                    <td>{{$ocu->directorCI}}</td>
                    <td>{{$ocu->directorNombre}}</td>
                    <td>
                        
                        <a href="{{ route('director.edit', $ocu->directorCI) }}"><button class="btn btn-info">Editar</button></a>
                        <a href="" data-target="#modal-delete-{{$ocu->directorCI}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                    </td>
                </tr>
                @include('crud.director.modal')
                @endforeach
            </table>
        </div>
        {{$directores->render()}}
    </div>
</div>

@endsection
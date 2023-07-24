@extends ('layouts.admin')
@section ('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Listado de medPelicula <a href="medPelicula/create"><button class="btn btn-success">Nuevo</button></a></h3>
        @include('crud.medPelicula.search')
    </div>
    
</div>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                    <th>Id Pelicula</th>
                    <th>CI Director</th>
                    <th>Director Nombre</th>
                    <th>Duracion Pelicula</th>
                    <th>Tipo Pelicula</th>
                    <th>Costo Produccion</th>
                    <th>Ganancia</th>
                    <th>Distribuidor</th>
                    <th>Opciones</th>
                </thead>
                @foreach ($medPeliculas as $ocu)
                <tr>
                    <td>{{$ocu->medPelID}}</td>
                    <td>{{$ocu->medPelDirectorCI}}</td>
                    <td>{{$ocu->directorNombre}}</td>
                    <td>{{$ocu->medPelDuracion}}</td>
                    <td>{{$ocu->medPelTipo}}</td>
                    <td>{{$ocu->medPelCostProd}}</td>
                    <td>{{$ocu->medPelGananc}}</td>
                    <td>{{$ocu->medPelDistrib}}</td>
                    <td>
                        
                        <a href="{{ route('medPelicula.edit', $ocu->medPelID) }}"><button class="btn btn-info">Editar</button></a>
                        <a href="" data-target="#modal-delete-{{$ocu->medPelID}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                    </td>
                </tr>
                @include('crud.medPelicula.modal')
                @endforeach
            </table>
        </div>
        {{$medPeliculas->render()}}
    </div>
</div>

@endsection
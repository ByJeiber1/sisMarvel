@extends ('layouts.admin')
@section ('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Listado de Personaje <a href="personaje/create"><button class="btn btn-success">Nuevo</button></a></h3>
        @include('crud.personaje.search')
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                    <th>personajeID</th>
                    <th>Nombre</th>
                    <th>Nombre 2</th>
                    <th>Apellido 1</th>
                    <th>Apellido 2</th>
                    <th>Color Pelo</th>
                    <th>Color Ojos</th>
                    <th>Estado Marital</th>
                    <th>FraseMas Celebre</th>
                    <th>Genero</th>
                    <th>Primera Aparicion Comic</th>
                    <th>CodCivil'</th>
                    <th>CodHeroe</th>
                    <th>CodVillano</th>
                    <th>Opciones</th>
                </thead>
                @foreach ($personajes as $per)
                <tr>
                    <td>{{$per->personajeID}}</td>
                    <td>{{$per->perNombre1}}</td>
                    <td>{{$per->perNombre2}}</td>
                    <td>{{$per->perApellido1}}</td>
                    <td>{{$per->perApellido2}}</td>
                    <td>{{$per->perColorPelo}}</td>
                    <td>{{$per->perColorOjos}}</td>
                    <td>{{$per->perEdoMarital}}</td>
                    <td>{{$per->perFraseMasCelebre}}</td>
                    <td>{{$per->perGenero}}</td>
                    <td>{{$per->perPrimeraAparicionComic}}</td>
                    <td>{{$per->personajeCivil}}</td>
                    <td>{{$per->personajeHeroe}}</td>
                    <td>{{$per->personajeVillano}}</td>
                    <td>
                        
                        <a href="{{ route('personaje.edit', $per->personajeID) }}"><button class="btn btn-info">Editar</button></a>
                        <a href="" data-target="#modal-delete-{{$per->personajeID}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                    </td>
                </tr>
                @include('crud.personaje.modal')
                @endforeach
            </table>
        </div>
        {{$personajes->render()}}
    </div>
</div>

@endsection
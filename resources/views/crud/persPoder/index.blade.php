@extends ('layouts.admin')
@section ('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Listado de Poderes <a href="persPoder/create"><button class="btn btn-success">Nuevo</button></a></h3>
        @include('crud.persPoder.search')
    </div>
    
</div>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                    <th>poderID</th>
                    <th>personajeID</th>
                    <th>obtencionPoder</th>
                    <th>personajeHerencia</th>
                    <th>Opciones</th>
                </thead>
                @foreach ($persPoders as $pod)
                <tr>
                    <td>{{$pod->poderID}}</td>
                    <td>{{$pod->personajeID}}</td>
                    <td>{{$pod->obtencionPoder}}</td>
                    <td>{{$pod->personajeHerencia}}</td>
                    <td>
                        
                        <a href="{{ route('persPoder.edit', $pod->poderID) }}"><button class="btn btn-info">Editar</button></a>
                        <a href="" data-target="#modal-delete-{{$pod->poderID}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                    </td>
                </tr>
                @include('crud.persPoder.modal')
                @endforeach
            </table>
        </div>
        {{$persPoders->render()}}
    </div>
</div>

@endsection
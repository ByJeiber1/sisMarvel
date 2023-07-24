@extends ('layouts.admin')
@section ('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Reporte 1 </h3>
        <h3>Series que han tenido más episodios que el promedio</h3>
        <h3>promedio:{{ $promedio }}</h3>
    </div>
    
</div>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                    <th>Id Serie</th>
                    <th>Canal Transmision</th>
                    <th>Creador Serie</th>
                    <th>Tipo Serie</th>
                    <th>Total episodios</th>
                </thead>
                @foreach ($series as $ocu)
                <tr>
                    <td>{{$ocu->medSerID}}</td>
                    <td>{{$ocu->medSerCanalTrans}}</td>
                    <td>{{$ocu->medSerCreador}}</td>
                    <td>{{$ocu->medSerTipo}}</td>
                    <td>{{$ocu->medSerTotEps}}</td>
                </tr>
                @endforeach
            </table>
        </div>
        {{$series->render()}}
    </div>
</div>

@endsection
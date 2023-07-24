@extends ('layouts.admin')
@section ('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Reporte 2 </h3>
        <h3>Imprima las películas que tengan más de 2 horas y media de duración, sean de tipo
animada, cuya ganancia sea mayor al promedio de todas las películas del mismo
tipo, ordenadas cronológicamente por el costo de producción.</h3>
        <h3>promedio:{{ $promedio }}</h3>
    </div>
    
</div>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                    <th>medPelID</th>
                    <th>medPelDuracion</th>
                    <th>medPelTipo</th>
                    <th>medPelCostProd</th>
                    <th>medPelGananc</th>
                </thead>
                @foreach ($peliculas as $ocu)
                <tr>
                    <td>{{$ocu->medPelID}}</td>
                    <td>{{$ocu->medPelDuracion}}</td>
                    <td>{{$ocu->medPelTipo}}</td>
                    <td>{{$ocu->medPelCostProd}}</td>
                    <td>{{$ocu->medPelGananc}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection
@extends('layouts.admin')

@section('contenido')
<!DOCTYPE html>
<html>
<head>
    <title>Reporte - Sedes por Organización</title>
    <style>
        

        h1 {
            color: #007BFF;
            margin-bottom: 20px;
        }

        h2 {
            color: #333;
            margin-bottom: 10px;
        }

        ul {
            list-style: none;
            padding-left: 0;
            margin-top: 0;
            margin-bottom: 20px;
        }

        li {
            color: #555;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <h1>Reporte - Mostrar todas las sedes por organizacion</h1>
    @foreach($organizaciones as $organizacion)
        <h2>{{ $organizacion->orgNombre }}</h2>
        <ul>
            @foreach($organizacion->sedes as $sede)
                <li><strong>Nombre de la Sede:</strong> {{ $sede->sedeNombre }}</li>
                <li><strong>Tipo de Edificación:</strong> {{ $sede->sedeTipoEdificacion }}</li>
                <li><strong>Ubicación:</strong> {{ $sede->sedeUbicacion }}</li>
                <br>
            @endforeach
        </ul>
    @endforeach
</body>
</html>
@endsection
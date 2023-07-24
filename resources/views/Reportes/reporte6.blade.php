@extends('layouts.admin')

@section('contenido')
<!DOCTYPE html>
<html>
<head>
    <title>Reporte - Poderes heredados con "Super" en su nombre y al menos 2 villanos</title>
</head>
<body>
    <div style="padding: 20px;">
        <h1>Poderes heredados con "Super" en su nombre y al menos 2 villanos</h1>
        <ul>
            @foreach($poderes as $poder)
                <li><strong>Nombre del poder:</strong> {{ $poder->poderNombre }}</li>
                <li><strong>Descripción del poder:</strong> {{ $poder->poderDescripcion }}</li>
                
                <li>Personajes que poseen este poder:</li>
            <ul>
                @foreach($poder->personajes as $personaje)
                    <li>{{ $personaje->perNombre1 }} {{ $personaje->perApellido1 }}</li>
                @endforeach
            </ul>
            <br>
            @endforeach
            
        </ul>
    </div>
</body>
</html>
@endsection

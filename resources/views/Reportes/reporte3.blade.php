@extends('layouts.admin')

@section('contenido')
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Reporte - Los 5 objetos más usados</title>
</head>
<body>
<div style="text-align: center;">
<h1>Los 5 objetos más usados por héroes o villanos</h1>
<ul style="list-style: none; padding: 0;">
@foreach($objetosMasUsados as $objeto)
<li style="margin-bottom: 10px; padding: 10px; background-color: #f2f2f2; border-radius: 5px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
<span style="font-weight: bold;">{{ $objeto->objetoNombre }}</span> - Usado {{ $objeto->personajes_count }} veces
</li>
@endforeach
</ul>
</div>
</body>
</html>
@endsection
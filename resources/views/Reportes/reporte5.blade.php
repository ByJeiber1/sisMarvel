@extends('layouts.admin')

@section('contenido')
<!DOCTYPE html>
<html>
<head>
    <title>Reporte - Superhéroes y supervillanos con poderes artificiales y que han sido líderes</title>
    <style>
       

        h1 {
            color: #007BFF;
            font-size: 24px;
            text-align: center;
            margin-bottom: 20px;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .li3 {
            margin-bottom: 10px;
            padding: 10px;
            background-color: #f2f2f2;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>Superhéroes y supervillanos con poderes artificiales y que han sido líderes</h1>
    <ul>
        @foreach($personajes as $personaje)
            <li class="li3">{{ $personaje->perNombre1 }} {{ $personaje->perApellido1 }}</li>
        @endforeach
    </ul>
</body>
</html>
@endsection
@extends('layouts.admin')

@section('contenido')
<!DOCTYPE html>
<html>
<head>
    <style>
        
        h1 {
            margin-bottom: 20px;
        }
        select {
            padding: 5px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        button {
            padding: 8px 15px;
            background-color: #4CAF50;
            border: none;
            color: white;
            cursor: pointer;
            border-radius: 4px;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    
    <h1>Reporte - Mostrar todos los datos (menos password) de los usuarios dependiendo del tipo de cuenta seleccionado
    </h1>
    <br>
    <h1>Seleccionar tipo de cuenta:</h1>
    <form action="{{ route('reporte.usuarios') }}" method="get">
        <select name="tipo_cuenta">
            
            <option value="gratis">Gratis</option>
            <option value="vip">VIP</option>
            <option value="premium">Premium</option>
        </select>
        <button type="submit">Generar Reporte</button>
    </form>

    @if(isset($usuarios))
        <h1>Usuarios según tipo de cuenta:</h1>
        <table>
            <tr>
                <th>Nombre1</th>
                <th>Nombre2</th>
                <th>Apellido1</th>
                <th>Apellido2</th>
                <th>Fecha de Nacimiento</th>
                <th>Username</th>
                <th>País</th>
                <th>Ciudad</th>
                <th>Tipo de Cuenta</th>
            </tr>
            @foreach($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->usuNombre1 }}</td>
                <td>{{ $usuario->usuNombre2 }}</td>
                <td>{{ $usuario->usuApell1 }}</td>
                <td>{{ $usuario->usuApell2 }}</td>
                <td>{{ $usuario->usuFechNac }}</td>
                <td>{{ $usuario->usuUsername }}</td>
                <td>{{ $usuario->usuPais }}</td>
                <td>{{ $usuario->usuCiudad }}</td>
                <td>{{ $usuario->usuTipoCuenta }}</td>
            </tr>
            @endforeach
        </table>
    @endif
</body>
</html>
@endsection
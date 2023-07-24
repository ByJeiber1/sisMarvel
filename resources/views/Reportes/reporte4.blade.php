@extends('layouts.admin')

@section('contenido')
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Reporte - Las 3 locaciones con más combates</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            font-size: 36px;
            margin-bottom: 30px;
        }

        ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .li2 {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 15px;
            padding: 15px;
            font-size: 18px;
        }

        .place {
            font-weight: bold;
        }

        .combats {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #007bff;
            color: #fff;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            font-size: 24px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Las 3 locaciones con más combates</h1>
        <ul>
            @foreach($locacionesMasCombates as $lugar)
                <li class="li2">
                    <span class="place">{{ $lugar->lugarNombre }}</span>
                    <span class="combats">{{ $lugar->combates_count }}</span>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
</ul>
</div>
</body>
</html>
@endsection
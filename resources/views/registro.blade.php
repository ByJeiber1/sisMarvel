<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('img/desktop-wallpaper-6-marvel-comics-marvel-universe.jpg');
            background-size: cover;
        }
        h1 {
            text-align: center;
            color: #fff;
            background-color: #f00;
            padding: 10px;
        }
        form {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 16px;
            margin-bottom: 20px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            font-size: 16px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #444;
        }
        .error {
            color: red;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>Registro de usuario</h1>

    <form method="POST" action="{{ route('registro') }}">
        @csrf

        <div>
            <label for="usuEmail">Correo electrónico:</label>
            <input type="email" id="usuEmail" name="usuEmail" value="{{ old('usuEmail') }}" required>
            @error('usuEmail')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="usuNombre1">Primer nombre:</label>
            <input type="text" id="usuNombre1" name="usuNombre1" value="{{ old('usuNombre1') }}" required>
            @error('usuNombre1')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="usuNombre2">Segundo nombre:</label>
            <input type="text" id="usuNombre2" name="usuNombre2" value="{{ old('usuNombre2') }}">
            @error('usuNombre2')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="usuApell1">Primer apellido:</label>
            <input type="text" id="usuApell1" name="usuApell1" value="{{ old('usuApell1') }}" required>
            @error('usuApell1')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="usuApell2">Segundo apellido:</label>
            <input type="text" id="usuApell2" name="usuApell2" value="{{ old('usuApell2') }}">
            @error('usuApell2')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="usuFechNac">Fecha de nacimiento:</label>
            <input type="date" id="usuFechNac" name="usuFechNac" value="{{ old('usuFechNac') }}" required>
            @error('usuFechNac')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="usuPassword">Contraseña:</label>
            <input type="password" id="usuPassword" name="usuPassword" required>
            @error('usuPassword')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="usuUsername">Nombre de usuario:</label>
            <input type="text" id="usuUsername" name="usuUsername" value="{{ old('usuUsername') }}" required>
            @error('usuUsername')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        
        <div>
            <label for="usuTipoCuenta">Tipo decuenta:</label>
            <select id="usuTipoCuenta" name="usuTipoCuenta" required>
                <option value="" disabled selected>Seleccione una opción</option>
                <option value="gratis">Gratis</option>
                <option value="vip">VIP</option>
                <option value="premium">Premium</option>
            </select>
            @error('usuTipoCuenta')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <input type="submit" value="Registrarse">
        </div>
    </form>
</body>
</html>

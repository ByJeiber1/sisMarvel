<!DOCTYPE html>
<html>
<head>
    <title>Iniciar sesión</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('img/1003204.jpg');
            background-size: 100% 100%;
            background-position: center center;
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
        input[type="email"],
        input[type="password"] {
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
        .register {
            margin-top: 20px;
            text-align: center;
            background-color: #fff;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>Iniciar sesión</h1>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <label for="usuEmail">Correo electrónico:</label>
            <input type="email" id="usuEmail" name="usuEmail" value="{{ old('usuEmail') }}" required>
            @error('usuEmail')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
            @error('password')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <input type="submit" value="Iniciar sesión">
        </div>
    </form>

    <div class="register">
        <p>¿No tienes una cuenta? <a href="{{ route('registro') }}">Registrar</a></p>
    </div>
</body>
</html>
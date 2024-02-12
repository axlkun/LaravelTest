<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form class="formulario" method="POST" enctype="multipart/form-data" action="{{route('inicia-sesion')}}">
    @csrf
            <fieldset>
                <legend>Credenciales</legend>

                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" placeholder="Ingresa tu correo" required>

                <label for="contraseña">Contraseña:</label>
                <input type="password" id="contraseña" name="password" placeholder="Ingresa tu contraseña" required>

                <input type="checkbox" name="remember"> Mantener sesión activa<br>
            </fieldset>

            <button type="submit">Iniciar sesión</button>

        </form>

</body>
</html>
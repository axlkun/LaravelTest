<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <h1>Registro</h1>

    <form class="formulario" method="POST" enctype="multipart/form-data" action="{{route('validar-registro')}}">
            <fieldset>
                <legend>Credenciales</legend>

                <label for="email">Nombre:</label>
                <input id="nombre" name="nombre" placeholder="Ingresa tu nombre" required>

                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" placeholder="Ingresa tu correo" required>

                <label for="contraseña">Contraseña:</label>
                <input type="password" id="contraseña" name="password" placeholder="Ingresa tu contraseña" required>
            </fieldset>

            <button type="submit">Registrarse</button>

        </form>

</body>
</html>
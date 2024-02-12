<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>

<body>
    <h1>Registro</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form class="formulario" method="POST" enctype="multipart/form-data" action="{{route('validar-registro')}}">
        @csrf
        <fieldset>
            <legend>Credenciales</legend>

            <label for="name">Nombre:</label>
            <input id="name" name="name" placeholder="Ingresa tu nombre" value="{{ old('name') }}" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" placeholder="Ingresa tu correo" value="{{ old('email') }}" required>

            <label for="contraseña">Contraseña:</label>
            <input type="password" id="contraseña" name="password" placeholder="Ingresa tu contraseña" value="{{ old('password') }}" required>
        </fieldset>

        <button type="submit">Registrarse</button>

    </form>

</body>

</html>
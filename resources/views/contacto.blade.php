<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
    <h1>FORMULARIO DE CONTACTO</h1>
    <form action="contacto" method="POST">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
         @endif

        <h3>{{ $tipo }}</h3>

        @csrf
        <label for="correo">Correo</label><br>
        <input type="email" 
        name="correo" 
        id="nombre"
             
        @if ($tipo == 'alumno')
            value="@alumno.com"
        @else
            value="@gmail.com"
        @endif
        ><br>
        <textarea name="comentario"></textarea><br>
        <input type="submit" value="Enviar">

    </form>
</body>
</html>
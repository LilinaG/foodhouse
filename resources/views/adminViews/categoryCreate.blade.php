<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{route('adminViews.categoryIndex')}}">Volver</a>

    <h3>Crear nueva categoria</h3>

    <form method="POST" action="{{ route('adminViews.categoryStore') }}">
        @csrf
        <label>Nombre:</label>
        <input type="text" name="name_category">

        <input type="submit" value="Crear">



    </form>
</body>
</html>
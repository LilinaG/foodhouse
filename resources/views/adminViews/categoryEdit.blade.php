
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('adminViews.categoryIndex') }}">Volver<a>
    <h3>Modificar categoria</h3>
    <form method = "POST" action="{{ route('adminViews.categoryUpdate', $category ->id) }}">
        @method('PUT')
        @csrf
        <label>Nombre:</label>
        <input type="text" name="name_category" value="{{$category->name_category}}">

        <input type="submit" value="Modificar">
    </form>
</body>
</html>



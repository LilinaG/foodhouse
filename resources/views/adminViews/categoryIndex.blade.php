<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
</head>
<body>
    <h1>Categorias</h1>
    <ul>
        @foreach($categories as $category)
            <li>{{$category -> name_category}}</li>
        @endforeach
    </ul>
</body>

</html>


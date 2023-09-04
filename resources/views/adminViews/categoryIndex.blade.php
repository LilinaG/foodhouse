<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
</head>
<body>
    <h1>Categorias</h1>
    <a href="{{ route('adminViews.categoryCreate')}}">Nueva categoria</a>
    @if($categories->isEmpty())
        <p>No hay categorias</p>
    @else
        <ul>
            @foreach($categories as $category)
                <li>
                    {{$category -> name_category}}
                    <a href="{{ route('adminViews.categoryEdit', $category->id) }}"><button>MODIFICAR</button></a>
                    <form method="POST" action="{{ route('adminViews.categoryDestroy', $category->id) }}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="BORRAR">
                    </form>
                    
                </li>
            @endforeach
        </ul>
    @endif
</body>

</html>


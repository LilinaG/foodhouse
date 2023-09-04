@extends('layouts.app')

@section('content')

<div class="container">

@if(Session::has('message'))
    <div class="alert alert-success">
        {{ Session::get('message') }}
    </div>
@endif

<a href="{{ route('adminViews.categoryCreate')}}" class="btn btn-dark">Nueva categoría</a>
<a href="{{ url('/dishes') }}" class="btn btn-dark">Platos</a>


<br/>
<br/>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>ID</th>
            <th>Categoría</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)
        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name_category}}</td>
            <td>
                <a href="{{ route('adminViews.categoryEdit', $category->id) }}" class="btn btn-secondary">Editar</a>
                <form action="{{ route('adminViews.categoryDestroy', $category->id) }}" class="d-inline" method="post">
                    @csrf
                    {{ method_field ('DELETE') }}
                    <button type="submit" class="btn btn-dark" onclick="return confirm('¿Quieres borrar esta categoría?')">
                    Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>

@endsection



<!-- <body>
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
 -->

@extends('layouts.admin')

@section('content')

<div class="container">

@if(Session::has('message'))
    <div class="alert alert-success">
        {{ Session::get('message') }}
    </div>
@endif

<h2>Platos</h2>
<br/>
<a href="{{ route('dishes.create') }}" class="btn btn-dark">Nuevo plato</a>
<br/>
<br/>



<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>ID</th>
            <th>Nombre plato</th>
            <th>Categoría</th>
            <th>Descripción corta</th>
            <th>Descripción detallada</th>
            <th>Imagen plato</th>
            <th>Precio</th>
            <th>Alérgenos</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($dishes as $dish)
        <tr>
            <td>{{$dish->id}}</td>
            <td>{{$dish->name_dish}}</td>
            <td>{{$dish->category->name_category}}</td>
            <td>{{$dish->description_short}}</td>
            <td>{{$dish->description_detail}}</td>
            <td>{{$dish->photo}}</td>
            <td>{{$dish->price}}</td>
            <td>{{$dish->allergens}}</td>
            <td>
                <a href="{{ url('admin/dishes/'.$dish->id.'/edit')}}" class="btn btn-secondary">Editar</a>

                <form action="{{ url('admin/dishes/'.$dish->id) }}" class="d-inline" method="post">
                    @csrf
                    {{ method_field ('DELETE') }}
                    <button type="submit" class="btn btn-dark" onclick="return confirm('¿Quieres borrar este plato?')">
                    Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>

@endsection

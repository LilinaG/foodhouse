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
<a href="{{ route('categories.create') }}" class="btn btn-dark">Nueva categoría</a>

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
                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-secondary">Editar</a>
                <form action="{{ route('categories.destroy', $category->id) }}" class="d-inline" method="post">
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

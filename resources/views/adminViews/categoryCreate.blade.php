@extends('layouts.app')

@section('content')

<div class="container">

<form action="{{ route('adminViews.categoryStore') }}" method="post" enctype="multipart/form-data">
@csrf
@include('adminViews.categoryForm', ['modo'=>'Crear']);

</form>
</div>
@endsection



<!-- <body>
    <a href="{{route('adminViews.categoryIndex')}}">Volver</a>

    <h3>Crear nueva categoria</h3>

    <form method="POST" 
        @csrf
        <label>Nombre:</label>
        <input type="text" name="name_category">

        <input type="submit" value="Crear">



    </form>
</body> -->

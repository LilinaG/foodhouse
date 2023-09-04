@extends('layouts.app')

@section('content')

<div class="container">


<form action="{{ route('adminViews.categoryUpdate', $category ->id) }}" method="post" enctype="multipart/form-data">

@csrf
{{ method_field('PUT') }}
@include('adminViews.categoryForm', ['modo'=>'editar']);

</form>
</div>
@endsection




    
        <!-- @method('PUT')
        @csrf
        <label>Nombre:</label>
        <input type="text" name="name_category" value="{{$category->name_category}}">

        <input type="submit" value="Modificar">
    </form>
</body> -->




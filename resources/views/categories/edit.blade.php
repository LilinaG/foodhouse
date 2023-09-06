@extends('layouts.admin')

@section('content')

<div class="container">


<form action="{{ route('categories.update', $category ->id) }}" method="post" enctype="multipart/form-data">

@csrf
{{ method_field('PUT') }}
@include('categories.form', ['modo'=>'editar']);

</form>
</div>
@endsection





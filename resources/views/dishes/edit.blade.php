@extends('layouts.admin')

@section('content')

<div class="container">


<form action="{{ url('admin/dishes/'.$dish->id) }}" method="post" enctype="multipart/form-data">

@csrf
{{ method_field('PATCH') }}
@include('dishes.form', ['modo'=>'editar']);

</form>
</div>
@endsection

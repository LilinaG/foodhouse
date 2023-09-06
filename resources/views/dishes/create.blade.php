
@extends('layouts.admin')

@section('content')

<div class="container">

<form action="{{ url('admin/dishes') }}" method="post" enctype="multipart/form-data">
@csrf
@include('dishes.form', ['modo'=>'Crear']);

</form>
</div>
@endsection
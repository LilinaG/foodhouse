@extends('layouts.admin')

@section('content')

<div class="container">

<form action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data">
@csrf
@include('categories.form', ['modo'=>'Crear']);

</form>
</div>
@endsection

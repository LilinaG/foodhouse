@extends('layouts.app')

@section('content')

<div class="container">


<form action="{{ url('order/'.$order->id) }}" method="post" enctype="multipart/form-data">

@csrf
{{ method_field('PATCH') }}
@include('order.form', ['modo'=>'editar']);

</form>
</div>
@endsection

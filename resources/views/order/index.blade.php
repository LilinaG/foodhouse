@extends('layouts.admin')

@section('content')

<div class="container">

@if(Session::has('message'))
    <div class="alert alert-success">
        {{ Session::get('message') }}
    </div>
@endif

<a href="{{ url('admin/dishes') }}" class="btn btn-dark">Volver</a>
<br/>
<br/>

<table class="table table-light">
    <thead class="thead-light">
        <tr>          
            <th>Fecha del pedido</th>
            <th>Precio total del pedido</th>
        </tr>
    </thead>
    <tbody>
        @foreach($orders as $order)
        <tr>
            <td>{{$order->date_order}}</td>
            <td>{{$order->cost_total_order}}</td>
            <td>
                <a href="{{ url('admin/order/'.$order->id.'/edit')}}" class="btn btn-secondary">Gestionar</a>

                <form action="{{ url('admin/order/'.$order->id) }}" class="d-inline" method="post">
                    @csrf
                    {{ method_field ('DELETE') }}
                    <button type="submit" class="btn btn-dark" onclick="return confirm('¿Quieres borrar este pedido?')">
                    Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>

@endsection

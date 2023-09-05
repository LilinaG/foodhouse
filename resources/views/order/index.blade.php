@extends('layouts.app')

@section('content')

<div class="container">

@if(Session::has('message'))
    <div class="alert alert-success">
        {{ Session::get('message') }}
    </div>
@endif

<a href="{{ url('order/create') }}" class="btn btn-dark">Nuevo Pedido</a>
<br/>
<br/>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>Id order</th>
            <th>Id user</th>
            <th>Fecha del pedido</th>
            <th>Id status</th>
            <th>Precio total del pedido</th>
        </tr>
    </thead>
    <tbody>
        @foreach($orders as $order)
        <tr>
            <td>{{$order->id_order}}</td>
            <td>{{$order->id_user}}</td>
            <td>{{$order->date_order}}</td>
            <td>{{$order->id_status}}</td>
            <td>{{$order->cost_total_order}}</td>
            <td>
                <a href="{{ url('/order/'.$order->id.'/edit')}}" class="btn btn-secondary">Editar</a>

                <form action="{{ url('/order/'.$order->id) }}" class="d-inline" method="post">
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

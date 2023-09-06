    
    <!--se utilizó old() para recuperar los valores anteriores si la validación falla o, en el caso de la edición, se recuperan los valores actuales del pedido.-->
    <!--
    <h2>{{ $modo }} pedido</h2>

    <div class="form-group">
    <label for="date_order">Fecha del pedido</label>
    <input type="text" class="form-control" name="date_order" value="{{ old('date_order', isset($order) ? $order->date_order : '') }}" id="date_order" >
    </div>

    <div class="form-group">
    <label for="cost_total_order">Precio total del pedido</label>
    <input type="text" class="form-control" name="cost_total_order" value="{{ old('cost_total_order', isset($order) ? $order->cost_total_order : '') }}" id="cost_total_order">
    </div>
    
    <br>    
    <input class="btn btn-dark" type="submit" value="Guardar">
    <a class="btn btn-dark" href="{{ url('order') }}"> Volver </a>

 -->
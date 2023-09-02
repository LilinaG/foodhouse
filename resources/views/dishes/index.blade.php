mostrar la lista de dish

<table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Nombre plato</th>
                <th>Descripción corta</th>
                <th>Descripción detallada</th>
                <th>Imagen plato</th>
                <th>Precio</th>
                <th>Alérgenos</th>
                <th>Acciones</th>
            </tr>
        </thead>
   
        
        <tbody>
            @foreach($dishes as $dish)
            <tr>
                <td>{{$dish->id}}</td>
                <td>{{$dish->name_dish}}</td>
                <td>{{$dish->description_short}}</td>
                <td>{{$dish->description_detail}}</td>
                <td>{{$dish->photo}}</td>
                <td>{{$dish->price}}</td>
                <td>{{$dish->allergens}}</td>
                <td>Editar | 
                    <form action="{{ url('/dishes/'.$dish->id) }}" method="post">
                        @csrf
                        {{ method_field ('DELETE') }}
                        <input type="submit" onclick="return confirm ('¿Quieres borrar este plato?') 
                        value="Eliminar">
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
</table>

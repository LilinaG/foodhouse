
    <h2>{{ $modo }} plato</h2>
    <label for="name_dish">Nombre plato</label>
    <input type="text" name="name_dish" value="{{isset ($dish->name_dish)? $dish->name_dish:'' }}" id="name" >
    <br>

    <label for="description_short">Descripción corta</label>
    <input type="text" name="description_short" value="{{ isset($dish->description_short)? $dish->description_short:''}}" id="description_short">
    <br>

    <label for="description_detail">Descripción detallada</label>
    <input type="text" name="description_detail" value="{{ isset($dish->description_detail) ? $dish->description_detail:'' }}" id="description_detail">
    <br>

    <label for="photo">Imagen plato</label>
    <input type="url" name="photo" value="{{ isset($dish->photo) ? $dish->photo:''}}" id="photo">
    <br>

    <label for="price">Precio</label>
    <input type="text" name="price" value="{{ isset($dish->price) ?  $dish->price:''}}" id="price">
    <br>

    <label for="allergens">Alérgenos</label>
    <input type="text" name="allergens" value="{{ isset ($dish->allergens) ? $dish->allergens:'' }}" id="allergens">
    <br>
    
    <input type="submit" value="{{ $modo }}">
    <br>
    <a href="{{ url('dishes') }}"> Volver </a>
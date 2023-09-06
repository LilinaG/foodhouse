

    <h2>{{ $modo }} plato</h2>

    <div class="form-group">
    <label for="name_dish">Nombre plato</label>
    <input type="text" class="form-control" name="name_dish" value="{{isset ($dish->name_dish)? $dish->name_dish:'' }}" id="name" >
    </div>

    <div class="form-group">
    <label for="name_dish">Categoría</label>
    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="category_id" id="category" >
        <option selected>Categoría</option>
        @foreach ($categories as $category):
        <option value="{{$category->id}}">{{$category->name_category}}</option>
        @endforeach
    </select>
    </div>

    <div class="form-group">
    <label for="description_short">Descripción corta</label>
    <input type="text" class="form-control" name="description_short" value="{{ isset($dish->description_short)? $dish->description_short:''}}" id="description_short">
    </div>

    <div class="form-group">
    <label for="description_detail">Descripción detallada</label>
    <input type="text" class="form-control" name="description_detail" value="{{ isset($dish->description_detail) ? $dish->description_detail:'' }}" id="description_detail">
    </div>

    <div class="form-group">
    <label for="photo">Imagen plato</label>
    <input type="url" class="form-control" name="photo" value="{{ isset($dish->photo) ? $dish->photo:''}}" id="photo">
    </div>

    <div class="form-group">
    <label for="price">Precio</label>
    <input type="text" class="form-control" name="price" value="{{ isset($dish->price) ?  $dish->price:''}}" id="price">
    </div>

    <div class="form-group">
    <label for="allergens">Alérgenos</label>
    <input type="text" class="form-control" name="allergens" value="{{ isset ($dish->allergens) ? $dish->allergens:'' }}" id="allergens">
    </div>
    
    <input class="btn btn-dark" type="submit" value="Guardar">
    <a class="btn btn-dark" href="{{ route('dishes.index') }}"> Volver </a>

  
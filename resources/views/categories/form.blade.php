<h2>{{ $modo }} categoría</h2>

<div class="form-group">
<label for="name_dish">Nombre categoría</label>
<input type="text" class="form-control" name="name_category" value="{{isset ($category->name_category)? $category->name_category:'' }}" id="name" >
@error('name')
    <p>{{$message}}</p>
@enderror
</div>
<br>
<input class="btn btn-dark" type="submit" value="Guardar">
<a class="btn btn-dark" href="{{ route('categories.index') }}"> Volver </a>
formulario de creación de "dishes"

<form action="{{ url('/dishes') }}" method="post" enctype="multipart/form-data">
@csrf

    <label for="name_dish">Nombre plato</label>
    <input type="text" name="name_dish" id="name" >
    <br>

    <label for="description_short">Descripción corta</label>
    <input type="text" name="description_short" id="description_short">
    <br>

    <label for="description_detail">Descripción detallada</label>
    <input type="text" name="description_detail" id="description_detail">
    <br>

    <label for="photo">Imagen plato</label>
    <input type="url" name="photo" id="photo">
    <br>

    <label for="price">Precio</label>
    <input type="text" name="price" id="price">
    <br>

    <label for="allergens">Alérgenos</label>
    <input type="text" name="allergens" id="allergens">
    <br>
    
    <input type="submit" value="Guardar">
    <br>

</form>

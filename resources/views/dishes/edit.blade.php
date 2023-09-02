formulario de edición de los platos

<form action="{{ url('dishes/'.$dish->id) }}" method="post" enctype="multipart/form-data">

@csrf
{{ method_field('PATCH') }}
@include('dishes.form');

</form>

@extends('templates.template')

@section ('content')
@foreach ($dishes as $dish)
    
        <div class="col mb-5">
            <div class="card h-100">                                             
                <a href="{{ route('detail', $dish->id)}}">
                    <img class="card-img-top" src="{{ $dish->photo }}" alt="..." width="450" height="300" />
                </a>
                <div class="card-body p-4"> 
                    <div class="text-center">                            
                        <h5 class="fw-bolder">{{ $dish->name_dish }}</h5>
                        <p>{{ $dish->description_short }}</p>                         
                        <p class="fw-bolder">{{ $dish->price.'€' }}</p>
                    </div>
                </div>                    
                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Añadir al carrito</a></div>
                </div>
            </div>
        </div>  
                  
@endforeach
@endsection
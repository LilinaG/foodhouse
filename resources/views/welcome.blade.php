@extends('templates.template')

@section ('content')
@foreach ($dishes as $dish)

    <a href="{{ route('detailView') }}">
        <div class="col mb-5">

                    <div class="card h-100">
                                <!-- Product image-->
                            
                    
                            <img class="card-img-top" src="{{ $dish->photo }}" alt="..." width="450" height="300" />
                                <!-- Product details-->
                                <div class="card-body p-4"> 
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder">{{ $dish->name_dish }}</h5>
                                        <p>{{ $dish->description_short }}</p>
                                        
                                        <!-- Product price-->
                                        <p class="fw-bolder">{{ $dish->price.'€' }}</p>
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Añadir al carrito</a></div>
                                </div>
                    </div>
        </div>  
    </a>                
@endforeach
@endsection
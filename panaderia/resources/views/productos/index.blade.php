@extends("layouts.base")

@section("content")

<div  class=" row p-3 mb-2 bg-info">
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <img src="/images/logo.png" width="120" height="120">
    </div>
    <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 text-center" style="margin-top:40px">
        <h2> Panaderia la Macarena
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-right" style="margin-top:50px">
    <div class="mt-auto bd-highlight">
        <a href="/carrito" class="btn ml-auto" style="background-color:#1fc9d0 ">Ver Carrito
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
            </svg>
        </a>
    </diV>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <p class="card-title text-center">Conoce nuestros productos</p>
     </div>
 </div>
 <div class="row">
    <div class="col">
        <div class="container">
                <div class="row">
                    @foreach ($categories as $category)
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-4">
                            <div class="card">
                                <img src="/images/fondo2.jpg"class="card-img" alt="...">
                                <div class="card-img-overlay">
                                     <div class="card-body">
                                        <h3 class="card-title text-center text-white">{{$category->name}}</h3>
                                     </div>
                                     <div class="text-center">
                                     <a href="/productos/{{$category->id}}" class="btn btn-info text-justify">Productos</a>
                                     </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
    </div>
</div>

@extends("layouts.app")

@section("content")

<div  class=" row p-4  bg-info">
    <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
        <img src="/images/logo.png" width="120" height="120">
    </div>

    <div class="col-lg-8 col-md-4 col-sm-6 col-xs-12 text-center" style="margin-top:40px">

        <h2> Panaderia la Macarena
        <div class="mt-auto bd-highlight text-right" style="margin-top:40px">
        @if(count(Cart::getContent()))
            <a href="{{route('cart-checkout')}}" class="text-dark btn btn-light">Carrito<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                            </svg>{{count(Cart::getContent())}}
            </a>
        @endif
        </div>
    </div>

</div>
<p>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <p class="card-title text-center">Siempre ofreciendole los mejores productos a nuestros clientes.</p>
     </div>
 </div>
 </p>
 <div class="row justify-content-center">
    <div class="col-lg-10">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/images/pan5.jpg" class="d-block w-100" alt="imag-responsive" width="100" height="300">
                </div>
            </div>
        </div>
     </div>
 </div>
 <br>
<div class="container">
     <div class="row">
        @foreach ($products as $product)
             <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="card border-primary">

                    <div class="card-body">
                    <img class="card-img-top" src="/images/{{$product->product_photo}}" alt="{{$product->product_photo}}" width="50px" height="250px">
                         <h3 class="card-title text-center">{{$product->product_name}}</h3>
                        <p class="card-title  ">{{$product->product_description}}</p>
                        <p class="card-title ">Precio:  $ {{$product->product_price}}</p>
                        <div class="text-center">
                           <form action="{{route('add-cart')}}" method="post">
                           @csrf
                            <input type="hidden" name="product_id" value="{{$product->id}}">
                            <input type="submit" name="btn" class="btn btn-info" value="Agregar al carrito">
                           </form>
                         </div>
                     </div>
                </div>
                <br>
            </div>
        @endforeach
     </div>
</div>
<br>
<br>
<div class="row p-3 mb-2 bg-info">
        <div class="col-md-12 text-center">
            <p class="text-center">Copyright 2020 Panaderia la Macarena Caldas,Colombia
<br> Carrera 30a 43-34 La Dorada, Caldas</p>
        </div>
     </div>
 </div>
@endsection


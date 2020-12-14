@extends("layouts.app")

@section("content")

<div  class=" row p-4  bg-info">
    <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
        <img src="/images/logo.png" width="120" height="120">
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <form>
            <div class="form-group has-feedback">
                 <input type="text"  id="buscar" name="buscar"
                 placeholder="Buscar"/>
                 <button class="bt btn-primary">Buscar </button>
             </div>
        </form>
    </div>
    <div class="col-lg-7 col-md-4 col-sm-6 col-xs-12 text-left" style="margin-top:40px">

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
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10">
    <p class="card-title text-center">Siempre ofreciendole los mejores productos a nuestros clientes.</p>
     </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
        <p class="card-title text-left"> <a href="/productos" class="btn btn-primary"> Regresar</a></p>
     </div>
 </div>
 </p>
 <div class="row justify-content-center">
    <div class="col-lg-12">
        <h1>Confirmaciòn</h1>
        <p>Tu pedido tiene el còdigo {{$order}}</p>
    </div>
 </div>



@endsection

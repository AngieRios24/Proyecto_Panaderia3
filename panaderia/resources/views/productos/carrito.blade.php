@extends("layouts.app")

@section("content")

<div  class=" row p-4  bg-info">
    <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
        <img src="/images/logo.png" width="120" height="120">
    </div>
    <div class="col-lg-7 col-md-4 col-sm-6 col-xs-12 text-center" style="margin-top:40px">
        <h2> Panaderia la Macarena
    </div>
</div>
<br><br>
<div class="row">
    <div class="col-lg-8 text-right">
        <h1>Carrito de Compras..!</h1>
    </div>
    <div class="col-lg-2 text-right">
        <a href="/productos" class="btn btn-success"> Regresar</a>
    </div>
</div>
<br>
<div>
    <div class="col-sm-12 ">
        @if(count(Cart::getContent()))
            <div class="row justify-content-center">
                @foreach (Cart::getContent() as $product)
                    <div class="col-lg-11 col-md-4 col-sm-6 col-xs-12 text-center">
                        <div class="card border-primary">
                             <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <img class="card-img-top" src="/images/{{$product->attributes->product_photo}}" alt="{{$product->product_photo}}" width="20" height="150">
                                    </div>
                                    <div class="col-lg-3 text-center">
                                        <h3 class="card-title text-center">{{$product->name}}</h3>
                                        <div class="text-center">
                                            <form action="{{route('cart-removeitem')}}" method="POST">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$product->id}}">
                                                <input type="submit" name="btn" class="btn btn-danger" value="Eliminar Producto">
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <p>Precio:</p>
                                        <p class="card-title ">  {{number_format($product->price)}}</p>
                                    </div>
                                    <div class="col-lg-2">
                                        <p>canatidad</p>
                                        <p class="card-title"> {{number_format($product->quantity)}}</p>
                                    </div>
                                    <div class="col-lg-2">
                                        <p class="card-title">Precio Total:</p>
                                        <p class="card-title "> {{$product->price * $product->quantity}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                @endforeach
                </div>
            <div class="row">
                <div class="col-lg-11 text-right">
                    <h2>Total</h2>
                     <p>{{(Cart::getSubTotal())}}</p>
                </div>
                <div class="col-lg-11 text-right">
                    <form action="{{route('cart-clear')}}" method="POST">
                         @csrf
                        <button type="submit" class="btn btn-danger">Vaciar Carrito</button>
                    </form>
                </div>
            </div>
            <br>
            <div class="justify-content-center">
                <form action="/proceso" method="POST" >
                    @csrf
                    <div class="form-group row">
                        <label for="inputName" class="col-sm-4 col text-center"><h5>Dirección:</h5></label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="direccion" name="direccion" />
                     </div>
                    </div>
                     <div class="form-group row">
                        <label for="inputName" class="col-sm-4 col text-center"><h5>Medio de pago:</h5></label>
                            <div class="col-sm-4">
                                <select class="form-control" id="medio" name="medio">
                                    @foreach($way_to_pay as $way_to)
                                        <option value="{{$way_to->id}}">{{$way_to->way_name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <button type="submit" class="btn btn-info">Comprar</button>
                        </div>
                     </div>
                 </form>
            </div>
        </div>
           @else
            <p>No hay productos en el carrito..!</p>
        @endif
    </div>
</div>
<br>
<div class="row p-3 mb-2 bg-info">
        <div class="col-md-12 text-center">
            <p class="text-center">Copyright 2020 Panaderia la Macarena Caldas,Colombia
<br> Carrera 30a 43-34 La Dorada, Caldas</p>
        </div>
     </div>
 </div>
@endsection


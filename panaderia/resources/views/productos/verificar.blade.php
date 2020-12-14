@extends("layouts.app")
@section("content")
<div  class=" row p-3 mb-2 bg-info">
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <img src="/images/logo.png" width="120" height="120">
    </div>
    <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 text-center">
        <h2>Sistema de Gestión Panaderia la
            <br>Macarena      </h2>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12 text-center">
        <h4>Ingresa la información correspondiente</h4>
    </div>
</div>
<br>
<div class="row">
    <div class="col-lg-11 col-md-4 col-sm-6 col-xs-12 text-right">
        <a href="/products" class="btn btn-primary">Regresar</a>
    </div>
</div>
<br>
<div class="container">
    <div class="justify-content-center">
         <form action="/categories" method="POST" >
         @csrf
             <div class="form-group row">
                 <label for="inputName" class="col-sm-3 col text-center"><h5>Documento de identidad:</h5></label>
                 <div class="col-sm-9">
                     <input type="text" class="form-control" id="documento" name="documento" />
                </div>
             </div>
             <div class="form-group row">
                 <label for="inputName" class="col-sm-3 col text-center"><h5>Dirección:</h5></label>
                 <div class="col-sm-9">
                     <input type="text" class="form-control" id="direccion" name="direccion" />
                </div>
             </div>
             <br>
             <div class="row">
                <div class="col-sm-12 text-center">
                    <button type="submit" class="btn btn-info">Verificar</button>
                </div>
             </div>
        </form>
    </div>
    <h1>{{ Auth::user()->name}}</h1>
</div>
@endsection

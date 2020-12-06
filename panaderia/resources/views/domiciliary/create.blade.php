@extends("layouts.app")
@section("content")
<div  class=" row p-3 mb-2 bg-secondary">
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <img src="" alt="">
    </div>
    <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 text-center">
        <h2>Sistema de Gestión Panaderia la
            <br>Macarena      </h2>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12 text-center">
        <h4>Agregar Domiciliario</h4>
    </div>
</div>
<br>
<div class="row">
    <div class="col-lg-11 col-md-4 col-sm-6 col-xs-12 text-right">
        <a href="/domiciliary" class="btn btn-secondary">Regresar</a>
    </div>
</div>
<br>
<div class="container">
    <div class="justify-contents-center">
        <form action="/domiciliary" method="POST" >
            @csrf
             <div class="form-group row">
             <label for="inputName" class="col-sm-2 col"><h5>Documento Domiciliario:</h5></label>
                 <div class="col-sm-4">
                     <input type="text" class="form-control" id="id" name="id" />
                 </div>
                 <label for="inputName" class="col-sm-2 col"><h5>Nombre Domiciliario:</h5></label>
                 <div class="col-sm-4">
                     <input type="text" class="form-control" id="nombre" name="nombre" />
                 </div>
             </div>
             <div class="form-group row">
                <label for="inputName" class="col-sm-2 col"><h5>Apellido Domiciliario:</h5></label>
                 <div class="col-sm-4">
                     <input type="text" class="form-control" id="apellido" name="apellido" />
                 </div>
                 <label for="inputName" class="col-sm-2 col"><h5>Tipo Documento:</h5></label>
                 <div class="col-sm-4">
                     <select class="form-control" id="tipo" name="tipo">
                        @foreach($type_document as $typedocument)
                            <option value="{{$typedocument->id}}">{{$typedocument->name}}
                            </option>
                         @endforeach
                     </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputName" class="col-sm-2 col"><h5>Telefono Domiciliario:</h5></label>
                 <div class="col-sm-4">
                     <input type="text" class="form-control" id="telefono" name="telefono" />
                 </div>
                 <label for="inputName" class="col-sm-2 col"><h5>Usuario Domiciliario:</h5></label>
                 <div class="col-sm-4">
                     <input type="text" class="form-control" id="usuario" name="usuario" />
                 </div>
            </div>
            <div class="form-group row">
                <label for="inputName" class="col-sm-2 col"><h5>Contraseña Domiciliario:</h5></label>
                 <div class="col-sm-4">
                     <input type="text" class="form-control" id="contraseña" name="contraseña" />
                 </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-center">
                    <button type="submit" class="btn btn-info">Agregar</button>
                </div>
             </div>
        </form>
    </div>
</div>

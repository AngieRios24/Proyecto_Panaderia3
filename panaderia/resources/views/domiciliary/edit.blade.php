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
        <h4>Editar Domiciliario</h4>
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
       <form action="/domiciliary/{{$domiciliary->domiciliary_document}}" method="POST" >
            @csrf
            @method('PUT')
             <div class="form-group row">
             <label for="inputName" class="col-sm-2 col"><h5>Documento Domiciliario:</h5></label>
                 <div class="col-sm-4">
                     <input type="text" class="form-control" id="id" name="id" value="{{$domiciliary->domiciliary_document}}" />
                 </div>
                 <label for="inputName" class="col-sm-2 col"><h5>Nombre Domiciliario:</h5></label>
                 <div class="col-sm-4">
                     <input type="text" class="form-control" id="nombre" name="nombre" value="{{$domiciliary->domiciliary_name}}" />
                 </div>
             </div>
             <div class="form-group row">
                <label for="inputName" class="col-sm-2 col"><h5>Apellido Domiciliario:</h5></label>
                 <div class="col-sm-4">
                     <input type="text" class="form-control" id="apellido" name="apellido" value="{{$domiciliary->domiciliary_lastname}}"/>
                 </div>
                 <label for="inputName" class="col-sm-2 col"><h5>Tipo Documento:</h5></label>
                 <div class="col-sm-4">
                     <select class="form-control" id="tipo" name="tipo">
                        @foreach($type_document as $type_document)
                            <option value="{{$type_document->id}}">{{$type_document->name}}
                            </option>
                         @endforeach
                     </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputName" class="col-sm-2 col"><h5>Telefono Domiciliario:</h5></label>
                 <div class="col-sm-4">
                     <input type="text" class="form-control" id="telefono" name="telefono"value="{{$domiciliary->domiciliary_phone}}" />
                 </div>
                 <label for="inputName" class="col-sm-2 col"><h5>Usuario Domiciliario:</h5></label>
                 <div class="col-sm-4">
                     <input type="text" class="form-control" id="usuario" name="usuario" value="{{$domiciliary->domiciliary_mail}}" />
                 </div>
            </div>
            <div class="form-group row">
                <label for="inputName" class="col-sm-2 col"><h5>Contraseña Domiciliario:</h5></label>
                 <div class="col-sm-4">
                     <input type="text" class="form-control" id="contraseña" name="contraseña" value="{{$domiciliary->domiciliary_password}}"/>
                 </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-center">
                    <button type="submit" class="btn btn-info">Editar</button>
                </div>
             </div>
        </form>
    </div>
</div>

@extends("layouts.base")
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
        <h4>Agregar Productos</h4>
    </div>
</div>
<br>
<div class="row">
    <div class="col-lg-11 col-md-4 col-sm-6 col-xs-12 text-right">
        <a href="/products" class="btn btn-secondary">Regresar</a>
    </div>
</div>
<br>
<div class="container">
    <div class="justify-content-center">
         <form action="/products" method="POST" >
         @csrf
             <div class="form-group row">
             <label for="inputName" class="col-sm-2 col"><h5>Id Producto:</h5></label>
                 <div class="col-sm-4">
                     <input type="text" class="form-control" id="id" name="id" />
                 </div>
                 <label for="inputName" class="col-sm-2 col"><h5>Nombre Producto:</h5></label>
                 <div class="col-sm-4">
                     <input type="text" class="form-control" id="nombre" name="nombre" />
                 </div>

             </div>
             <div class="form-group row">
             <label for="inputName" class="col-sm-2 col"><h5>Descripcion Producto:</h5></label>
                 <div class="col-sm-4">
                     <input type="text" class="form-control" id="descripcion" name="descripcion" />
                 </div>
                 <label for="inputName" class="col-sm-2 col"><h5>Categoria Producto:</h5></label>
                 <div class="col-sm-4">
                     <select class="form-control" id="categoria_id" name="categoria_id">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}
                            </option>
                         @endforeach
                    </select>
                </div>
                <br>
                <br>
                <br>
                 <label for="inputName" class="col-sm-2 col"><h5>Precio Producto:</h5></label>
                 <div class="col-sm-4">
                     <input type="number" class="form-control" id="precio" name="precio" />
                 </div>
                 <label for="inputName" class="col-sm-2 col"><h5>Foto Producto:</h5></label>
                 <div class="col-sm-4">
                    <input type="file" class="form-control-file" id="productImag" name="productImag">
                 </div>
             </div>
             <br>
             <br>

             <div class="row">
                <div class="col-sm-12 text-center">
                    <button type="submit" class="btn btn-info">Agregar</button>
                </div>
             </div>
        </form>
    </div>
</div>
@endsection

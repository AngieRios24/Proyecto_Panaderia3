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
        <h4>Editar Productos</h4>
    </div>
</div>
<br>
<div class="col-lg-11 col-md-4 col-sm-6 col-xs-12 text-right">
        <a href="/products" class="btn btn-secondary">Regresar</a>
    </div>
<br>
<div class="container">
    <div class="justify-content-center">
         <form action="/products/{{$product->id}}" method="post" >
         @csrf
             @method('PUT')
             <div class="form-group row">
                 <label for="inputName" class="col-sm-2 col"><h5>Id  Producto:</h5></label>
                 <div class="col-sm-4">
                     <input type="text" class="form-control" id="id_producto" name="id_producto"
                     value="{{$product->id}}"/>
                 </div>
                 <label for="inputName" class="col-sm-2 col"><h5>Nombre Producto:</h5></label>
                 <div class="col-sm-4">
                     <input type="text" class="form-control" id="nombre" name="nombre" value="{{$product->product_name}}"/>
                 </div>
             </div>
             <br>
             <div class="row">

</div>
             <br>
             <div class="form-group row">
                 <label for="inputName" class="col-sm-2 col"><h5>Categoria Producto:</h5></label>
                 <div class="col-sm-4">
                     <select class="form-control" id="categoria_id" name="categoria_id" value="{{ $product->category_id}}">
                     @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}
                            </option>
                         @endforeach
                    </select>
                </div>
                 <label for="inputName" class="col-sm-2 col"><h5>Precio Producto:</h5></label>
                 <div class="col-sm-4">
                     <input type="number" class="form-control" id="precio" name="precio" value="{{$product->product_price}}" />
                 </div>
             </div>
             <br>
             <br>
             <div class="form-group row">
                 <label for="inputName" class="col-sm-2 col"><h5>Descripcion Producto:</h5></label>
                 <div class="col-sm-4">
                     <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{$product->product_description}}"/>
                 </div>
                 <label for="inputName" class="col-sm-2 col"><h5>Foto Producto:</h5></label>
                 <div class="col-sm-4">
                    <input type="file" class="form-control-file" id="productImag" name="productImag" value="{{$product->product_photo}}">
                 </div>
             </div>
             <div class="row">
                <div class="col-sm-12 text-center">
                    <button type="sibmit" class="btn btn-info">Editar</button>
                </div>
             </div>
        </form>
    </div>
</div>
@endsection

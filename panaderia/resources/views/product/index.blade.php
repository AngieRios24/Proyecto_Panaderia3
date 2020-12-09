@extends("layouts.app")

@section("content")

<div  class=" row p-3 mb-2 bg-secondary">
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
        <h4>Gestionar Productos</h4>
    </div>
</div>
<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-right">
        <form>
            <div class="form-group">
                 <input type="text"  id="buscar" name="buscar"
                 placeholder="Buscar">
                 <button class="bt btn-primary">Buscar </button>
             </div>

        </form>
    </div>
    <div class="col-lg-7 col-md-4 col-sm-6 col-xs-12 text-right">
        <a href="/products/create" class="btn btn-success">Agregar Producto</a>
        <a href="/" class="btn btn-secondary">Regresar</a>
    </div>
</div>
<div class="flex justify-center">
<div class="row justify-content-center">
        <div class="col-lg-10 text-center">
            <table class="table table-bordered table-striped">
                <thead>
                    <th class="border px-4 py-2">id</th>
                    <th class="border px-4 py-2">Nombre</th>
                    <th class="border px-4 py-">Descripción</th>
                    <th class="border px-4 py-">Precio</td>
                    <th class="border px-4 py-">Foto</td>
                    <th class="border px-4 py-2">Categoria</th>
                    <th class="border px-4 py-">Editar</th>
                    <th class="border px-4 py-">Eliminar</th>
                </thead>
                <tbody>

                @foreach ($product as $product)
                        <tr>
                        <td class="border px-4 py-2">{{$product->id}}</td>
                            <td class="border px-4 py-2">{{$product->product_name}}</td>
                            <td class="border px-4 py-2">{{$product->product_description}}</td>
                            <td class="border px-4 py-2">{{$product->product_price}}</td>
                            <td class="border px-4 py-2">{{$product->product_photo}}</td>
                            <td class="border px-4 py-2">{{$product->category_name}}</td>

                            <td class="border px-4 py-2">
                                <a class=" btn btn-warning border-green-500 hover:border-transparent rounded"
                                 href="/products/{{$product->id}}/edit">Editar</a>
                            </td>
                             <td>
                             <form action="{{route('products.destroy', $product->id)}}" method="POST">
                                     @csrf
                                     @method('DELETE')
                                    <button
                                         type="submit"
                                        class="btn btn-danger"
                                         onclick="return confirm('¿Realmente desea borrar este producto?')"
                                    >Eliminar</button>
                                </form>
                             </td>

                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>


</div>

@endsection
</body>


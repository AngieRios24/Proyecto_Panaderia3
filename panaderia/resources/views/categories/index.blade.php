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
        <h4>Gestionar Categorias</h4>
    </div>
</div>


    <div class="col-lg-11 col-md-4 col-sm-6 col-xs-12 text-right">
        <a href="/categories/create" class="btn btn-success">Agregar Categoria</a>
        <a href="/home" class="btn btn-secondary">Regresar</a>
    </div>
</div>

<div class="flex justify-center">
<div class="row justify-content-center">
        <div class="col-lg-10 text-center">
            <table class="table table-bordered table-striped">
                <thead>
                    <th class="border px-4 py-2">id</th>
                    <th class="border px-4 py-2">Nombre</th>
                    <th class="border px-4 py-">Editar</th>
                    <th class="border px-4 py-">Eliminar</th>
                </thead>
                <tbody>

                @foreach ($category as $category)

                        <tr>
                            <td class="border px-4 py-2">{{$category->id}}</td>
                            <td class="border px-4 py-2">{{$category->name}}</td>
                            <td class="border px-4 py-2">
                                <a class=" btn btn-warning border-green-500 hover:border-transparent rounded"
                                 href="/categories/{{$category->id}}/edit">Editar</a>
                            </td>
                                <td>
                                <form action="{{route('categories.destroy', $category->id)}}" method="POST">
                                     @csrf
                                     @method('DELETE')
                                    <button
                                         type="submit"
                                        class="btn btn-outline-danger"
                                         onclick="return confirm('¿Realmente desea borrar la categoria?')"
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



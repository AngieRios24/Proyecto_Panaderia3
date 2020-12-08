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
        <h4>Gestionar Vendedores</h4>
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
        <a href="/vendors/create" class="btn btn-success">Agregar vendedor</a>
        <a href="index" class="btn btn-secondary">Regresar</a>
    </div>
</div>
<div class="flex justify-center">
<div class="row justify-content-center">
        <div class="col-lg-10 text-center">
            <table class="table table-bordered table-striped">
                <thead>
                <th class="border px-4 py-2">Tipo Documento</th>
                    <th class="border px-4 py-2">Número de Documento</th>
                    <th class="border px-4 py-">Nombre</th>
                    <th class="border px-4 py-">Apellido</td>
                    <th class="border px-4 py-">Telefono</td>
                    <th class="border px-4 py-2">Correo</th>
                    <th class="border px-4 py-2">Contraseña</th>
                    <th class="border px-4 py-">Editar</th>
                    <th class="border px-4 py-">Eliminar</th>
                </thead>
                <tbody>

                @foreach ($dueno as dueno)

                        <tr>
                        <td class="border px-4 py-2">{{$typedocument->name}}</td>
                            <td class="border px-4 py-2">{{$vendor->vendor_document}}</td>
                            <td class="border px-4 py-2">{{$vendor->vendor_name}}</td>
                            <td class="border px-4 py-2">{{$vendor->vendor_lastname}}</td>
                            <td class="border px-4 py-2">{{$vendor->vendor_phone}}</td>
                            <td class="border px-4 py-2">{{$vendor->vendor_mail}}</td>
                            <td class="border px-4 py-2">{{$vendor->vendor_password}}</td>
                            <td class="border px-4 py-2">
                                <a class=" btn btn-warning border-green-500 hover:border-transparent rounded"
                                 href="/vendors/{{$vendor->vendor_document}}/edit">Editar</a>
                            </td>
                             <td>
                             <form action="{{route('vendors.destroy', $vendor->vendor_document)}}" method="POST">
                                     @csrf
                                     @method('DELETE')
                                    <button
                                         type="submit"
                                        class="btn btn-danger"
                                         onclick="return confirm('¿Realmente desea borrar este vendedor?')"
                                    >Eliminar</button>
                                </form>
                             </td>

                        </tr>
                        @endforeach
                    @endforeach

                </tbody>
            </table>
        </div>


</div>

@endsection
</body>
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
        <h4>Gestionar Pedido</h4>
    </div>
</div>
<br>
<div class="flex justify-center">
<div class="row justify-content-center">
        <div class="col-lg-10 text-center">
            <table class="table table-bordered table-striped">
                <thead>
                    <th class="border px-4 py-2">Fehca del Pedido</th>
                    <th class="border px-4 py-">Entrega de Pedidos</th>
                    <th class="border px-4 py-">Dirección Pedido</th>
                    <th class="border px-4 py-">Cantidad Pedido</th>
                    <th class="border px-4 py-">Estado Pedido</th>
                    <th class="border px-4 py-">Despachar</th>
                </thead>
                <tbody>

                @foreach ($orders as $order)

                <tr>
                            <td class="border px-4 py-2">{{$order->order_date}}</td>
                            <td class="border px-4 py-2">{{$order->order_delivery}}</td>
                            <td class="border px-4 py-2">{{$order->order_address}}</td>
                            <td class="border px-4 py-2">{{$order->order_quantity}}</td>
                            <td class="border px-4 py-2">{{$order->status_name}}</td>

                            <td class="border px-4 py-2">
                                <a class=" btn btn-info border-green-500"
                                 href="">Despachar</a>
                            </td>
                 </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


</div>

@endsection
</body>

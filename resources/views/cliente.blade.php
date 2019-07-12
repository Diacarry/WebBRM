@extends('layouts.template')
@section('inicialPage')
    <div class="row">
        <div class="col-md-9">
            <h3>REGISTRO DE COMPRAS DEL CLIENTE</h3>
        </div>
        <div class="col-md-3">
            <a href="/CrudCompra/create" class="btn btn-success">Crear regisro de producto</a>
        </div>
    </div><br>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>PRODUCTO</td>
                        <td>CANTIDAD</td>
                        <td>VALOR UNITARIO</td>
                        <td>TOTAL</td>
                    </tr>
                </thead>
                @foreach($compras as $compra)
                    <tfoot>
                        <tr>
                            <td>{{ $compra->id }}</td>
                            <td>{{ $compra->fk_inventario }}</td>
                            <td>{{ $compra->cantidad_producto }}</td>
                            <td>{{ $compra->valor_unitario_compra_producto }}</td>
                            <td>{{ $compra->total_pedido }}</td>
                        </tr>
                    </tfoot>
                @endforeach
            </table>
        </div>
    </div>
@endsection
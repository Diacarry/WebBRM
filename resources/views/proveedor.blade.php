@extends('layouts.template')
@section('inicialPage')
    <div class="row">
        <div class="col-md-6">
            <h3>REGISTRO DE ENTRADAS DE INVENTARIO</h3>
        </div>
        <div class="col-md-3">
            <a href="/CrudIngreso/create" class="btn btn-success">Crear ingreso a tienda</a>
        </div>
        <div class="col-md-3">
            <a href="/" class="btn btn-danger">Menú</a>
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
                        <td>NUMERO DEL LOTE</td>
                        <td>FECHA VENCIMIENTO</td>
                        <td>VALOR DE VENTA</td>
                    </tr>
                </thead>
                @foreach($ingresos as $ingreso)
                    <tfoot>
                        <tr>
                            <td>{{ $ingreso->id }}</td>
                            <td>{{ $ingreso->fk_inventario }}</td>
                            <td>{{ $ingreso->cantidad }}</td>
                            <td>{{ $ingreso->numero_lote }}</td>
                            <td>{{ $ingreso->fecha_vencimiento }}</td>
                            <td>{{ $ingreso->precio_unitario }}</td>
                        </tr>
                    </tfoot>
                @endforeach
            </table>
        </div>
    </div>
@endsection
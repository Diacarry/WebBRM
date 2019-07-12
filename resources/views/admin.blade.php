@extends('layouts.template')
@section('inicialPage')
    <div class="row">
        <div class="col-md-9">
            <h3>REGISTRO DE PRODUCTOS EN EL INVENTARIO</h3>
        </div>
        <div class="col-ms-3">
            <a href="/CrudInventario/create" class="btn btn-success">Crear regisro de producto</a>
        </div>
    </div><br>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <td>PRODUCTO</td>
                        <td>VALOR (unit)</td>
                        <td>CANTIDAD</td>
                    </tr>
                </thead>
                @foreach($inventarios as $inventario)
                    <tfoot>
                        <tr>
                            <td>{{ $inventario->producto }}</td>
                            <td>{{ $inventario->precio_unitario_actual }}</td>
                            <td>{{ $inventario->cantidad_disponible }}</td>
                        </tr>
                    </tfoot>
                @endforeach
            </table>
        </div>
    </div>
@endsection
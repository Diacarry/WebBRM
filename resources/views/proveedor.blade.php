@extends('layouts.template')
@section('inicialPage')
    <div class="row">
        <div class="col-md-9">
            <h3>REGISTRO DE ENTRADAS DE INVENTARIO</h3>
        </div>
        <div class="col-md-3">
            <a href="/CrudIngreso/create" class="btn btn-success">Crear ingreso a tienda</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table>
                <thead>
                    <tr>
                    <td>ID</td>
                </tr>
                </thead>
                @foreach($ingresos as $ingreso)
                    <tfoot>
                        <tr>
                            <td>{{ $ingreso->id }}</td>
                        </tr>
                    </tfoot>
                @endforeach
            </table>
        </div>
    </div>
@endsection
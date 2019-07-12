@extends('layouts.template')
@section('inicialPage')
    <div class="row">
        <div class="col-md-9">
            <h3>REGISTRAR NUEVO PRODUCTO AL INVENTARIO</h3>
        </div>
        <div class="col-md-3">
            <a href="/CrudCompra" class="btn btn-success">volver</a>
        </div>
    </div><br>
    <div class="row">
        <div class="col">
            <form action="/CrudCompra" method="POST">
                @csrf
                <div class="form-group">
                    <label for="IngresoProduct">Seleccione el producto que desea ingresar</label>
                    <select class="form-control" id="IngresoProduct" name="IngresoProduct">
                        <option>Select de Productos</option>
                        <option value="Arroz_libra">Libra arroz Roa</option>
                        <option value="Frijol_libra">Libra de frijol Rojo</option>
                    </select>
                </div>
                <div class="form-group row">
                    <label for="ProductCant" class="col-sm-2 col-form-label">CANTIDAD:</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="ProductCant" name="ProductCant" placeholder="Ingrese la cantidad disponible que esta ingresando">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Ingresar Lote</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
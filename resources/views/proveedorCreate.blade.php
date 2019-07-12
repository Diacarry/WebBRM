@extends('layouts.template')
@section('inicialPage')
    <div class="row">
        <div class="col-md-9">
            <h3>REGISTRAR DE ENTRADAS AL INVENTARIO</h3>
        </div>
        <div class="col-md-3">
            <a href="/CrudIngreso" class="btn btn-success">volver</a>
        </div>
    </div><br>
    <div class="row">
        <div class="col">
            <form action="/CrudIngreso" method="POST">
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
                    <label for="IngresoProductCant" class="col-sm-2 col-form-label">CANTIDAD:</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="IngresoProductCant" name="IngresoProductCant" placeholder="Ingrese la cantidad disponible que esta ingresando">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="NumLote" class="col-sm-2 col-form-label">NÚMERO DEL LOTE DE INGRESO:</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="NumLote" name="NumLote" placeholder="Ingrese el número del lote del producto que esta ingresando">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="FechaVencimiento" class="col-sm-2 col-form-label">FECHA DE VENCIMIENTO:</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="FechaVencimiento" name="FechaVencimiento" placeholder="Ingrese la fecha devencimiento del lote del producto">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ProductCost" class="col-sm-2 col-form-label">VALOR DE VENTA (unit):</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="ProductCost" name="ProductCost" placeholder="Ingrese el valor de venta del producto">
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
@extends('layouts.template')
@section('inicialPage')
    <div class="row">
        <div class="col-md-9">
            <h3>REGISTRAR NUEVO PRODUCTO AL INVENTARIO</h3>
        </div>
        <div class="col-md-3">
            <a href="/CrudInventario" class="btn btn-success">volver</a>
        </div>
    </div><br>
    <div class="row">
        <div class="col">
            <form action="/CrudInventario" method="POST">
                @csrf
                <div class="form-group row">
                    <label for="ProductName" class="col-sm-2 col-form-label">PRODUCTO:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="ProductName" name="ProductName" placeholder="Ingrese el Nombre del producto">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ProductCant" class="col-sm-2 col-form-label">CANTIDAD:</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="ProductCant" name="ProductCant" placeholder="Ingrese la cantidad disponible de ingreso">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ProductCost" class="col-sm-2 col-form-label">VALOR (unit):</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="ProductCost" name="ProductCost" placeholder="Ingrese el valor del producto">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Ingresar Producto</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
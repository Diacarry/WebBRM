<?php

namespace App\Http\Controllers;

use App\ingreso;
use Illuminate\Http\Request;

class IngresoController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        /*return ingreso::all();*/
        return view('proveedor',[
            'ingresos' => ingreso::all()
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('proveedorCreate');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $validData = $request->validate([
            'IngresoProduct' => 'required',
            'IngresoProductCant' => 'required|min:1|max:3',
            'NumLote' => 'required|min:5|max:10',
            'FechaVencimiento' => 'required|min:9|max:11',
            'ProductCost' => 'required|min:4|max:7'
        ]);
        $report = new ingreso();
        $report->fk_inventario = $request->get('IngresoProduct');
        $report->cantidad = $request->get('IngresoProductCant');
        $report->numero_lote = $request->get('NumLote');
        $report->fecha_vencimiento = $request->get('FechaVencimiento');
        $report->precio_unitario = $request->get('ProductCost');
        $report->save();
        return redirect('/CrudIngreso');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }
}
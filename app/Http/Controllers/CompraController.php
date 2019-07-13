<?php

namespace App\Http\Controllers;

use App\compra;
use Illuminate\Http\Request;

class CompraController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        /*return compra::all();*/
        return view('cliente',[
            'compras' => compra::all()
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('clienteCreate');
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
            'ProductCant' => 'required|min:1|max:2'
        ]);
        $report = new compra();
        $report->fk_inventario = $request->get('IngresoProduct');
        $report->cantidad_producto = $request->get('ProductCant');
        $report->valor_unitario_compra_producto = 8000; /* VALOR QUEMADO */
        $total = $report->cantidad_producto * $report->valor_unitario_compra_producto;
        $report->total_pedido = $total;
        $report->save();
        return redirect('/CrudCompra');
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
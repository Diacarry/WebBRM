<?php

namespace App\Http\Controllers;

use App\inventario;
use Illuminate\Http\Request;

class InventarioController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        /*return inventario::all();*/
        return view('admin',[
            'inventarios' => inventario::all()
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('adminCreate');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $validData = $request->validate([
            'ProductName' => 'required|min:8|max:30',
            'ProductCant' => 'required|min:1|max:2',
            'ProductCost' => 'required|min:3|max:7'
        ]);
        $report = new inventario();
        $report->producto = $request->get('ProductName');
        $report->precio_unitario_actual = $request->get('ProductCant');
        $report->cantidad_disponible = $request->get('ProductCost');
        $report->save();
        return redirect('/CrudInventario');
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
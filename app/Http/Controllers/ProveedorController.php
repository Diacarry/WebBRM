<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProveedorController extends Controller {
    public function Inicio () {
        return 'hola mundo';
        /*return view('proveedor', [
            'title' => 'PROVEEDOR'
        ]);*/
    }
}
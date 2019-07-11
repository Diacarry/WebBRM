<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProveedorController extends Controller {
    public function Inicio () {
        return view('proveedor', [
            'title' => 'PROVEEDOR'
        ]);
    }
}

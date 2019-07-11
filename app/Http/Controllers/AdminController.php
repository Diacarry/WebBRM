<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller {
    public function Inicio () {
        return view('admin', [
            'title' => 'ADMINISTRADOR'
        ]);
    }
}

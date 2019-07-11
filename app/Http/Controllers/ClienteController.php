<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller {
    public function Inicio (Request $data) {
        /*dd($data->query('titulo', 'JUMM'));*/
        return view('cliente', [
            'title' => $data->query('titulo', 'No data') /* 'CLIENTE' */
        ]);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inventario extends Model {
    public function compras () {
        return $this->hasMany(compra::class);
    }
    /*public function ingresosRelation () {
        return $this->hasMany(ingreso::class);
    }*/
}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class compra extends Model {
    public function inventario () {
        return $this->belongsTo(inventario::class);
    }
}
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCompras extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('compras', function (Blueprint $table) {
            $table->bigIncrements('id');
            /*$table->string('fk_inventario', 70);
            $table->integer('cantidad_producto');
            $table->integer('valor_unitario_compra_producto');
            $table->integer('total_pedido');*/
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('compras');
    }
}
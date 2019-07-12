<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColumnsInCompras extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('compras', function (Blueprint $table) {
            /*$table->string('fk_inventario', 70);*/
            $table->integer('cantidad_producto');
            $table->integer('valor_unitario_compra_producto');
            $table->integer('total_pedido');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('compras', function (Blueprint $table) {
            $table->dropColumn('fk_inventario');
            $table->dropColumn('cantidad_producto');
            $table->dropColumn('valor_unitario_compra_producto');
            $table->dropColumn('total_pedido');
        });
    }
}
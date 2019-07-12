<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColumnsInIngresos extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('ingresos', function (Blueprint $table) {
            $table->string('fk_inventario', 70);
            $table->integer('cantidad');
            $table->integer('numero_lote');
            $table->date('fecha_vencimiento');
            $table->integer('precio_unitario');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('ingresos', function (Blueprint $table) {
            $table->dropColumn('fk_inventario');
            $table->dropColumn('cantidad');
            $table->dropColumn('numero_lote');
            $table->dropColumn('fecha_vencimiento');
            $table->dropColumn('precio_unitario');
        });
    }
}
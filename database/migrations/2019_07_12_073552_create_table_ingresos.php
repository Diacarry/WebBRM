<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableIngresos extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('ingresos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('fk_inventario');
            $table->integer('cantidad');
            $table->integer('numero_lote');
            $table->date('fecha_vencimiento');
            $table->integer('precio_unitario');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('ingresos');
    }
}
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColumnsInInventarios extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('inventarios', function (Blueprint $table) {
            $table->string('producto', 70);
            $table->integer('precio_unitario_actual');
            $table->integer('cantidad_disponible');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('inventarios', function (Blueprint $table) {
            $table->dropColumn('producto');
            $table->dropColumn('precio_unitario_actual');
            $table->dropColumn('cantidad_disponible');
        });
    }
}
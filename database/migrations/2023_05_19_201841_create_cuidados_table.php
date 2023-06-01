<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cuidados', function (Blueprint $table) {
            $table->id();
            $table->string('tipo',45);
            $table->date('fecha');
            $table->string('descripcion_recetario',200);
            $table->date('prox_fecha')->nullable();
            $table->string('descripcion_observacion',200);
           
            $table->unsignedBigInteger('id_ambiente');
            $table->foreign('id_ambiente')->references('id')->on('ambientes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuidados');
    }
};

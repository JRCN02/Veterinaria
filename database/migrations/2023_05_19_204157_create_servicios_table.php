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
        Schema::create('servicios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',50);
            $table->string('descripcion',200);
            $table->decimal('costo');
            $table->string('imagen')->nullable();
            //Añadiendo llaves forareas relacionada con la tabla de especialidad
           // $table->unsignedBigInteger('id_ambiente');
            //$table->foreign('id_ambiente')->references('id')->on('ambientes');

            $table->unsignedBigInteger('id_especialidad');
            //$table->foreign('id_especialidad')->references('id')->on('especialidads');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicios');
    }
};

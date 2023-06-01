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
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion',255);
            $table->string('nombreM',45);
            $table->string('raza',45);
            $table->integer('edad');
            $table->date('fecha');
            $table->time('hora');
            $table->unsignedBigInteger('doctor');
            $table->string('nombreP',50);
            $table->string('apellidoP',100);

            $table->foreign('doctor')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};

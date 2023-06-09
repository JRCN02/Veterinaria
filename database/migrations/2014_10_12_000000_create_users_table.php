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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',90);
            $table->string('apellido',120);
            $table->integer('ci');
            $table->string('perfil')->nullable();
            $table->string('especialidad')->nullable();
            $table->string('user');
            $table->string('password');
            $table->string('direccion',255);
            $table->integer('celular');
            $table->string('email')->unique();
            $table->integer('estado');
            $table->timestamp('email_verified_at')->nullable();
            $table->date('fNacimiento');
            
            $table->rememberToken();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

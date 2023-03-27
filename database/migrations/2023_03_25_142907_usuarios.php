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
        Schema::create('Usuarios', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->bigIncrements('id');
            $table->string('Nombre');
            $table->string('Apellido');
            $table->string('Pais');
            $table->string('Direccion');
            $table->string('Celular');
            $table->string('NumDoc')->unique();
            $table->string('Email')->unique();
            $table->bigInteger('Perfils')->unsigned();
            $table->foreign('Perfils')->references('id')->on('Perfils')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
    }
};

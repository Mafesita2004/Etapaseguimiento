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
        Schema::create('apprentice_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('identification');
            $table->string('name');
            $table->string('last name');
            $table->string('program');
            $table->string('file');
            $table->string('phone');
            $table->string('mail');
            $table->string('contrato_inicio');
            $table->string('contrato_fin');
            $table->string('nit_empresa');
            $table->string('razon_social');
            $table->string('direccion');
            $table->string('ciudad');
            $table->string('instructor_asignado');
            $table->string('fecha_asignacion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apprentice_registrations');
    }
};

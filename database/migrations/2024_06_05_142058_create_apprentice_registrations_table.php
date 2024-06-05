<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('apprentice_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('identification');
            $table->string('name');
            $table->string('last_name');
            $table->string('program');
            $table->string('file');
            $table->string('phone');
            $table->string('email');
            $table->string('start_contract');
            $table->string('contract_end');
            $table->string('nit_company');
            $table->string('business_name');
            $table->string('address');
            $table->string('city');
            $table->string('assigned_instructor');
            $table->string('date_assignment');
            $table->string('password');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('apprentice_registrations');
    }
};

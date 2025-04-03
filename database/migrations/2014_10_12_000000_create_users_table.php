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
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('telefono')->nullable();
            $table->integer('sueldo')->default(0);
            $table->string('nss')->nullable();
            $table->string('curp')->nullable();
            $table->string('cartilla')->nullable();
            $table->string('licencia')->nullable();
            $table->string('rfc')->nullable();
            $table->string('estudios')->nullable();
            $table->date('fecha_alta')->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('mueblerias')->nullable();
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
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

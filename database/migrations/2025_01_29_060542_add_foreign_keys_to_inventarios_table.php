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
        Schema::table('inventarios', function (Blueprint $table) {
            $table->foreign(['muebles_id'], 'inventarios_ibfk_1')->references(['muebles_id'])->on('muebles')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['usuarios_id'], 'inventarios_ibfk_2')->references(['usuarios_id'])->on('usuarios')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['mueblerias_id'], 'inventarios_ibfk_3')->references(['mueblerias_id'])->on('mueblerias')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('inventarios', function (Blueprint $table) {
            $table->dropForeign('inventarios_ibfk_1');
            $table->dropForeign('inventarios_ibfk_2');
            $table->dropForeign('inventarios_ibfk_3');
        });
    }
};

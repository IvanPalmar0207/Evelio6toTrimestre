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
        Schema::create('tb__ciudades', function (Blueprint $table) {
            $table->id('id_ciudad');
            $table->string('codigo_pais');
            $table->string('nombre',50);
            $table->timestamps();
            $table->foreign("codigo_pais")->references("codigo_pais")->on("tb__paises")->onDelete("cascade")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb__ciudades');
    }
};

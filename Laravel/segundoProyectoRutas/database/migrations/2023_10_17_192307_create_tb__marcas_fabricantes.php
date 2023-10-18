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
        Schema::create('tb__marcas_fabricantes', function (Blueprint $table) {
            $table->id('id_marca');
            $table->string('codigo',50);
            $table->string('nombre',50);
            $table->foreignId('pais_origen');
            $table->timestamps();
            $table->foreign("pais_origen")->references("id_pais")->on("tb__paises");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb__marcas_fabricantes');
    }
};

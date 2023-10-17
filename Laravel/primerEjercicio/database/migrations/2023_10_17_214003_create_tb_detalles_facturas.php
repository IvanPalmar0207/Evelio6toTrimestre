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
        Schema::create('tb_detalles_facturas', function (Blueprint $table) {
            $table->string('numero_factura');
            $table->string('codigo_producto');
            $table->integer('cantidad');
            $table->timestamps();
            $table->foreign('numero_factura')->references('numero_factura')->on('tb__facturas')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_detalles_facturas');
    }
};

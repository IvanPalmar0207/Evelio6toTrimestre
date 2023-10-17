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
        Schema::create('tb_envios', function (Blueprint $table) {
            $table->id('id_envio')->unsigned();
            $table->string('numero_factura');
            $table->integer('id_cliente');
            $table->foreignId('id_transportador');
            $table->foreignId('ciudad_envio');
            $table->string('direccion_entrega',100);
            $table->tinyInteger('envio_unico');
            $table->timestamps();
            $table->foreign('numero_factura')->references('numero_factura')->on('tb__facturas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_transportador')->references('id_transportador')->on('tb__transportadoras')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('ciudad_envio')->references('id_ciudad')->on('tb__ciudades')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_envios');
    }
};

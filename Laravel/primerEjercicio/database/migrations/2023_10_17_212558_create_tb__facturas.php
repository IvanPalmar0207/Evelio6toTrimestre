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
        Schema::create('tb__facturas', function (Blueprint $table) {
            $table->id('codigo_factura')->unsigned();
            $table->string('numero_factura',50)->unique();
            $table->string('id_vendedor');
            $table->foreignId('id_cliente');
            $table->timestamp('fecha_emision');
            $table->tinyInteger('estado');
            $table->enum('forma_pago',['CONTADO','CREDITO']);
            $table->timestamps();
            $table->foreign('id_vendedor')->references('id_vendedor')->on('tb__vendedores')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_cliente')->references('id_cliente')->on('tb__clientes')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb__facturas');
    }
};

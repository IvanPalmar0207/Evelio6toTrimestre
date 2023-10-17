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
        Schema::create('tb_clientes_facturas_detalles', function (Blueprint $table) {
            $table->integer('id_cliente')->unsigned();
            $table->string('nombre',80);
            $table->string('numero_factura',50);
            $table->timestamp('fecha_emision');
            $table->tinyInteger('estado');
            $table->string('codigo_producto',50);
            $table->integer('cantidad');
            $table->timestamps();        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_clientes_facturas_detalles');
    }
};

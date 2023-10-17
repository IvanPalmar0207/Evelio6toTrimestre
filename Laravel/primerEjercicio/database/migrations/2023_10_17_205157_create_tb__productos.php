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
        Schema::create('tb__productos', function (Blueprint $table) {
            $table->id('id_producto')->unsigned();
            $table->string('codigo',50)->unique();
            $table->foreignId('id_categoria');
            $table->foreignId('id_marca');
            $table->string('descripcion',50);
            $table->enum('unidad_medida',['UNIDAD','OTRO']);
            $table->tinyInteger('disponible');
            $table->decimal('porcentaje_iva',4,2);
            $table->decimal('precio_unitario',20,2);
            $table->smallInteger('stock');
            $table->timestamps();
            $table->foreign('id_categoria')->references('id_categoria')->on('tb__categorias')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_marca')->references('id_marca')->on('tb__marcas_fabricantes')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb__productos');
    }
};

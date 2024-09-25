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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');         // Nombre del producto
            $table->text('description');    // Descripción del producto
            $table->decimal('price', 10, 2); // Precio del producto
            $table->integer('stock');       // Cantidad en stock
            $table->timestamps();           // Tiempos de creación y actualización
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

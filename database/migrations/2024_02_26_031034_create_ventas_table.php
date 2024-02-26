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
            Schema::create('ventas', function (Blueprint $table) {
                $table->id('codigoVenta')->unique();
                $table->date('fechaVenta');
                $table->string('codigoProducto')->unique();
                $table->integer('cantidad')->nullable();
                $table->decimal('subtotal', 8, 2)->nullable();
                $table->decimal('isv', 8, 2)->nullable();
                $table->decimal('total', 8, 2)->nullable();
                $table->timestamps();

                $table->foreign('codigoProducto')->references('codigoProducto')->on('productos');
          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};

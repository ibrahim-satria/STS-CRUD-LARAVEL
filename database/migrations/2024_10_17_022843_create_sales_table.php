<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Jalankan migration.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->unsignedBigInteger('product_id'); // Foreign key untuk product
            $table->decimal('total_amount', 10, 2); // Total jumlah penjualan
            $table->integer('quantity'); // Jumlah produk yang dijual
            $table->timestamps(); // Timestamps untuk mencatat created_at dan updated_at
            
            // Opsional: tambahkan foreign key constraint ke tabel products
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Balikkan perubahan (hapus tabel).
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
}

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
        Schema::create('detail_transaksis', function (Blueprint $table) {
            $table->id('id_detail_transaksi');
            $table->unsignedBigInteger('id_transaksi');
            $table->unsignedBigInteger('id_paket');
            $table->unsignedBigInteger('id_menu')->nullable();
            $table->integer('kuantitas');
            $table->decimal('subtotal', 10, 2);
            $table->timestamps();

            $table->foreign('id_transaksi')->references('id_transaksi')->on('transaksis')->onDelete('cascade');
            $table->foreign('id_paket')->references('id_paket')->on('pakets')->onDelete('cascade');
            $table->foreign('id_menu')->references('id_menu')->on('menus')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_transaksis');
    }
};

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
        Schema::create('menus', function (Blueprint $table) {
            $table->id('id_menu');
            $table->unsignedBigInteger('id_paket');
            $table->string('satuan');
            $table->string('nama_barang');
            $table->string('kategori')->nullable();
            $table->decimal('harga', 10, 2);
            $table->timestamps();

            $table->foreign('id_paket')->references('id_paket')->on('pakets')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};

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
        Schema::create('kamar', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_hotel')->references('id')->on('hotel')->onDelete('cascade');
            $table->string('tipe_kamar');
            $table->decimal('harga_per_malam', 8, 2);
            $table->string('fasilitas'); //misal wifi, AC
            $table->string('gambar')->nullable(); //URL gambar kamar
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};

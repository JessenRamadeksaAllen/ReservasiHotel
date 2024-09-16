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
        Schema::create('reservasi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_tamu')->references('id')->on('tamu')->onDelete('cascade');
            $table->foreignId('id_kamar')->references('id')->on('kamar')->onDelete('cascade');
            $table->integer('jumlah_tamu');
            $table->date('tanggal_check_in');
            $table->date('tanggal_check_out');
            $table->string('status')->default('pending');  // pending, confirmed, canceled
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};

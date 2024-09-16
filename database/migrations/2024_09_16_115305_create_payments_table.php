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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_reservasi')->references('id')->on('reservasi')->onDelete('cascade');
            $table->decimal('jumlah', 8, 2);
            $table->string('metode_pembayaran'); // Transfer bank, cash on delivery, dll.
            $table->date('tanggal_pembayaran');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};

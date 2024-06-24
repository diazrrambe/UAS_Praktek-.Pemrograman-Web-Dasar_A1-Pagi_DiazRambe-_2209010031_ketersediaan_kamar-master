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
        Schema::create('ketersediaan_kamars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kamar_id')->constrained()->onDelete('cascade');
            $table->foreignId('pasien_id')->constrained()->onDelete('cascade');
            $table->date('tanggal_check_in');
            $table->date('tanggal_check_out');
            $table->enum('status', ['ada', 'selesai', 'batal'])->default('ada');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ketersediaan_kamars');
    }
};

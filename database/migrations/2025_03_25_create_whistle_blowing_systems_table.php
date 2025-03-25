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
        Schema::create('whistle_blowing_systems', function (Blueprint $table) {
            $table->id();
            
            // Identitas Pelapor
            $table->string('nip_pelapor');
            $table->string('nama_pelapor');
            $table->string('no_telp');
            
            // Identitas Terlapor
            $table->string('nama_terlapor');
            $table->string('jabatan');
            $table->string('satuan_kerja');
            
            // Pengaduan / WBS
            $table->text('perbuatan');
            $table->text('perkara');
            
            // Status and tracking
            $table->string('status')->default('pending'); // pending, in_review, resolved, rejected
            $table->string('tracking_id')->unique();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('whistle_blowing_systems');
    }
}; 
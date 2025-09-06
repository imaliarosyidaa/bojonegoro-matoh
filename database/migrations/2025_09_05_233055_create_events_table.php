<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');                 // Judul Event
            $table->text('description')->nullable(); // Deskripsi event
            $table->string('image')->nullable();     // Path gambar event
            $table->date('date');                    // Tanggal event
            $table->time('time_start')->nullable();  // Waktu mulai
            $table->time('time_end')->nullable();    // Waktu selesai
            $table->string('location')->nullable();  // Lokasi event
            $table->decimal('price', 10, 2)->default(0); // Harga tiket (0 = gratis)
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};

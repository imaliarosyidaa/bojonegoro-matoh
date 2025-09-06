<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('tiket_pelanggan_event', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('tiket_pelanggan_id');
        $table->unsignedBigInteger('event_id');
        $table->integer('jumlah')->default(1);
        $table->timestamps();

        $table->foreign('tiket_pelanggan_id')->references('id')->on('tiket_pelanggan')->onDelete('cascade');
        $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tiket_pelanggan_event');
    }
};

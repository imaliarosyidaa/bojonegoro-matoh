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
    Schema::create('tiket_pelanggan', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id')->nullable(); // jika pelanggan login
        $table->string('nama_lengkap');
        $table->string('alamat');
        $table->string('email');
        $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
        $table->decimal('price', 10, 2)->default(0);
        $table->timestamps();

        $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tiket_pelanggan');
    }
};

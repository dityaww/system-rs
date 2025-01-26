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
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('no_rm');
            $table->string('tanggal_rm');
            $table->string('alamat');
            $table->string('kota');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->string('provinsi');
            $table->string('negara');
            $table->string('bahasa');
            $table->string('ttl');
            $table->string('umur');
            $table->string('no_hp');
            $table->string('email');
            $table->string('jenis_kelamin');
            $table->string('status_nikah');
            $table->string('agama');
            $table->string('pekerjaan');
            $table->string('pendidikan');
            $table->string('npwp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasiens');
    }
};

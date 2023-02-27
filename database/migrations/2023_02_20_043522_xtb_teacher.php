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
        Schema::create('teacher', function (Blueprint $table) {
            $table->id('id');
            $table->string('nip', 11)->unique();
            $table->string('nama_guru', 45)->nullable();
            $table->string('alamat_guru', 80)->nullable();
            $table->string('telepon_guru', 25)->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('tempat_lahir', 30)->nullable();
            $table->string('jenis_kelamin', 15)->nullable();
            $table->string('pendidikan', 25)->nullable();
            $table->string('jurusan', 35)->nullable();
            $table->string('kode_jurusan', 15)->nullable();
            $table->string('pelajaran', 60)->nullable();
            $table->string('status_kb', 15)->nullable();
            $table->string('jabatan', 30)->nullable();
            $table->string('agama', 15)->nullable();
            $table->string('email', 80)->unique()->nullable();
            $table->string('hp', 20)->nullable();
            $table->string('photo', 100)->nullable();
            $table->foreign('kode_jurusan')->references('kode_jurusan')->on('jurusan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teacher');
    }
};

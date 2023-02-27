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
        Schema::create('student_identity', function (Blueprint $table) {
            $table->id();
            $table->string('nis', 15)->unique();
            $table->string('nama_lengkap', 40)->nullable();
            $table->string('nama_panggilan', 15)->nullable();
            $table->string('jenis_kel', 10)->nullable();
            $table->string('tpt_lahir', 30)->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->string('agama', 15)->nullable();
            $table->string('almt_lengkap', 200)->nullable();
            $table->string('kode_jurusan', 5)->nullable();
            $table->string('t_ajaran', 15)->nullable();
            $table->string('kelas', 10)->nullable();
            $table->string('userid', 25)->nullable();
            $table->string('nouseri', 7)->nullable();
            $table->string('telepon', 30)->nullable();
            $table->string('nisn', 20)->nullable();
            $table->foreign('kode_jurusan')->references('kode_jurusan')->on('jurusan');
            $table->foreign('kelas')->references('kelas')->on('school_class');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_identity');
    }
};

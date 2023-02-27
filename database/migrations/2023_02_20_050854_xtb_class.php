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
        Schema::create('school_class', function (Blueprint $table) {
            $table->id('id');
            $table->string('kelas', 11)->unique();
            $table->string('nip', 11)->nullable();
            $table->string('tp', 15)->nullable();
            $table->foreign('nip')->references('nip')->on('teacher');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school_class');
    }
};

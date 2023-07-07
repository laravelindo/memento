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
        Schema::create('alamarhum', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengap');
            $table->string('tanggal_lahir');
            $table->string('kota_lahir');
            $table->string('tanggal_wafat');
            $table->string('kota_wafat');
            $table->string('shortname')->unique();
            $table->integer('inisiator_id');
            $table->string('link_foto_almarhum');
            $table->text('alasan_meninggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alamarhum');
    }
};

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
        Schema::create('cerita', function (Blueprint $table) {
            $table->id();
            $table->integer('id_kontributor')->unsigned();
            $table->string('penulis');
            $table->text('isi_cerita');
            $table->string('link_video')->nullable();
            $table->string('link_lagu');
            $table->string('relasi_dengan_almarhum');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cerita');
    }
};

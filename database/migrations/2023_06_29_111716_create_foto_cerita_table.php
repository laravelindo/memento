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
        Schema::create('foto_cerita', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_cerita')->constrained('cerita');
            $table->string('url_foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('foto_cerita', function(Blueprint $table) {
            $table->dropForeign(['id_cerita']);
            $table->dropColumn('id_cerita');
        });
    }
};

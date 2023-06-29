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
        Schema::create('sukai_almarhum', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('id_almarhum')->constrained('almarhum');
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sukai_almarhum' , function(Blueprint $table) {
            // $table->dropForeign(['id_almarhum']);
            // $table->dropColumn('id_almarhum');

            
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
    }
};

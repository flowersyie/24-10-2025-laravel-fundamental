<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): voids
    {
        Schema::table('nama', function (Blueprint $table) {
            $table->dropColumn('tabel');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): voidS
    {
       Schema::table('nama', function (Blueprint $table) {
        $table->string('tabel')->nullable();
        });
    }
};

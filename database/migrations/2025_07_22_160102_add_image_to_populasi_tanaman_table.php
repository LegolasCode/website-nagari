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
        Schema::table('populasi_tanaman', function (Blueprint $table) {
            $table->string('image')->nullable()->after('tahun'); // Tambah kolom image
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('populasi_tanaman', function (Blueprint $table) {
            $table->dropColumn('image');
        });
    }
};
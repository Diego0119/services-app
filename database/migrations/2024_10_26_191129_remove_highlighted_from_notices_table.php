<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('notices', function (Blueprint $table) {
            $table->dropColumn('highlighted'); // Elimina el campo 'highlighted'
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('notices', function (Blueprint $table) {
            $table->unsignedBigInteger('highlighted')->nullable(); // Vuelve a agregar el campo 'highlighted'
        });
    }
};

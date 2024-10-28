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
        Schema::create('highlighted_notice', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('notice_id')->index();
            $table->unsignedBigInteger('highlighted_id')->index();
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->decimal('amount_paid', 10, 2);
            $table->boolean('is_active')->default(true);
            $table->timestamps();

            $table->foreign('notice_id')
                ->references('id')
                ->on('notices')
                ->onDelete('cascade');
            $table->foreign('highlighted_id')
                ->references('id')
                ->on('highlighted')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('highlighted_notice');
    }
};

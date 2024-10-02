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
        Schema::create(
            'notices',
            function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('user_id')->index();
                $table->unsignedBigInteger('commune_id')->index();
                $table->unsignedBigInteger('category_id')->index();
                $table->string('title');
                $table->text('description');
                $table->float('price', 15, 2);
                $table->boolean('highlighted');
                $table->enum('status', allowed: [
                    'EN_REVISION',
                    'ACTIVO',
                    'PAUSADO',
                ]);

                $table->timestamps();

                $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');

                $table->foreign('commune_id')
                    ->references('id')
                    ->on('communes')
                    ->onDelete('cascade');

                $table->foreign('category_id')
                    ->references('id')
                    ->on('categories')
                    ->onDelete('cascade');
            }

        );

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notices');
    }
};

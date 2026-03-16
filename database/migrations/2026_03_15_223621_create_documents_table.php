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
        Schema::create('documents', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('folder_id')->nullable();
            $table->foreign('folder_id')->references('id')
                    ->on('folders')
                    ->onUpdate('cascade')
                    ->onDelete('set null');

            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')
                    ->on('users')
                    ->onUpdate('cascade')
                    ->onDelete('set null');

            $table->string('filename');
            $table->integer('filesize');
            $table->string('filetype', 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};

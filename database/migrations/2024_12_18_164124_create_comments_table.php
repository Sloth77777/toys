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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('user_id');
            $table->text('message');

            $table->index(['product_id'], 'comment_product_id');
            $table->index(['user_id'], 'comment_user_id');

            $table->foreign('product_id', 'comment_product_id')->on('products')->references('id')->cascadeOnDelete();
            $table->foreign('user_id', 'comment_user_id')->on('users')->references('id')->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};

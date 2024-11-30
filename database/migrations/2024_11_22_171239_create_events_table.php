<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('events', function (Blueprint $table) {
        $table->id();
        $table->text('content');
        $table->string('title'); // Tiêu đề bài viết
        $table->dateTime('start');
        $table->dateTime('end');
        $table->string('image')->nullable(); // Thêm cột photo
        $table->unsignedBigInteger('category_id')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};

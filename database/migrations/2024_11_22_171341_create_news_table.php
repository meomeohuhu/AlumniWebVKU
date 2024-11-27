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
    Schema::create('news', function (Blueprint $table) {
        $table->id(); // Tạo cột id tự động
        $table->text('content'); // Nội dung bài viết
        $table->string('title'); // Tiêu đề bài viết
        $table->string('image')->nullable(); // Thêm cột image (có thể null)
        $table->unsignedBigInteger('category_id')->nullable(); // Sửa category_id thành unsignedBigInteger
        $table->timestamps(); // Timestamps để lưu thời gian tạo và cập nhật
    });
}       


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
